<?php

namespace Webbook\FrontOfficeBundle\Controller;

use Core\UserBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Webbook\MainBundle\Entity\Book;
use Webbook\MainBundle\Entity\BookBlock;
use Webbook\MainBundle\Entity\Category;
use Webbook\MainBundle\Entity\NewsletterSubscriber;
use Webbook\MainBundle\Entity\Version;

class DefaultController extends FOSRestController
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('MainBundle:Category')->findAll();

        return $this->render('@FrontOffice/index.html.twig',['categories'=>$categories]);
    }

    public function profileAction(Request $request)
    {
        if($request->getMethod()=="POST"){

        }else
            return $this->render('@FrontOffice/components/profile/profile.html.twig');
    }

    public function homeAction()
    {
        $em=$this->getDoctrine()->getManager();
        $clients=$em->getRepository('UserBundle:User')->findByRoles(['ROLE_CLIENT']);
        $books=$em->getRepository('MainBundle:Book')->findBy(['published'=>TRUE]);
        $authors=$em->getRepository('UserBundle:User')->findByRoles(['ROLE_AUTHOR']);
        $globalPrice=$em->getRepository('MainBundle:Parameter')->findOneBy(['name'=>'globalPrice']);
        $themePrice=$em->getRepository('MainBundle:Parameter')->findOneBy(['name'=>'themePrice']);

        return ['authors'=>count($authors),'books'=>count($books),'clients'=>count($clients),
                'globalPrice'=>(int)$globalPrice->getValue(),'themePrice'=>(int)$themePrice->getValue()];
    }

    public function getCategoriesAction()
    {
        $em=$this->getDoctrine()->getManager();
        $categories=$em->getRepository('MainBundle:Category')->findNotEmpty();
        if ($categories === null) {
            return new View("There is no category", Response::HTTP_NOT_FOUND);
        }
        return $categories;
    }

    public function newsletterSubscribeAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $email=$request->request->get('email');
        $exist=$em->getRepository('MainBundle:NewsletterSubscriber')->findByEmail($email);
        if(!$exist) {
            $em->persist(new NewsletterSubscriber($email));
            $em->flush();
            return ['success'=>true,'message'=>'Vous êtes maintenant officiellement inscrit á la newsletter'];
        }
        return ['success'=>false,'message'=>'Vous êtes déja inscrit á la newsletter'];
    }

    public function getBookByCategoryAction(Request $request,Category $category,$page=1){
        $em=$this->getDoctrine()->getManager();
        $books=[];
        if($category) {
            $range = $request->get('range');
            $books=$em->getRepository('MainBundle:Book')->getBooksByCategory($category->getId(),$page,$range);
        }
        return $books;
    }


    public function getShoppingCartBooksAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $books_id=$request->get('books');
        $data=[];
        if($books_id)
            foreach ($books_id as $book_id){
                $book=$em->getRepository('MainBundle:Book')
                    ->findOneBy(['published'=>true,'id'=>$book_id]);
                if($book){
                    array_push($data,$this->getBookData($book));
                }
            }

        return $data;
    }

    public function getBookAction($token)
    {
        $em=$this->getDoctrine()->getManager();
        $book=$em->getRepository('MainBundle:Book')->findOneBy(['token'=>$token,'published'=>true]);
        if($book){
            return $this->getBookData($book);
        }else
            throw new HttpException(404, "Livre inexistant .");
    }

    // returning book information
    private function getBookData(Book $book){
        $em=$this->getDoctrine()->getManager();

        $b=[];
        $b['id']=$book->getId();
        $b['token']=$book->getToken();
        $b['title']=$book->getTitle();
        $b['publishDate']=$book->getPublishDate()->format('d-m-Y');
        $b['price']=$book->getPrice();
        $b['language']=$book->getLanguage();
        $b['editionNumber']=$book->getPublishedEdition()->getNumber();
        $b['ISBN']=$book->getISBN();
        $b['description']=$book->getDescription();
        $b['category']=$book->getCategory()->getName();
        $b['authors']=[];

        /** @var User $author */
        foreach ($book->getMainAuthors() as $author)
            array_push($b['authors'],$author);



        $b['images']=[];
        foreach ($book->getImages() as $img)
            array_push($b['images'],['path'=>$img->getPath()]);
        // generate table of content & list of table & list of figure
        $b['tableOfContent']=[];
        $b['listOfTable']=[];
        $b['listOfFigure']=[];
        // assemble book's block together but no persisting
        $blocks=json_decode($book->getPublishedEdition()->getBody());

        $tmpBook=new Book();
        foreach ($blocks as $bl){
            $bl2=$em->find(BookBlock::class,$bl->id);
            if($bl2 && $bl->version){
                $bl2->setPosition($bl->position);
                $bl2->getVersions()->clear();
                $bl2->getChildrens()->clear();
                $v=$em->find(Version::class,$bl->version);
                $v->setStatus(3);
                $bl2->addVersions($v);
                if($bl->parent){
                    $bl2->setParent($em->find(BookBlock::class,$bl->parent));
                }
                else
                    $bl2->removeParent();

                $tmpBook->addBlock($bl2);
            }
        }
        $this->generateBookTables($tmpBook->getUnderBlock(),
            $b['tableOfContent'], $b['listOfFigure'],$b['listOfTable']);

        // after the table generate clear data
        unset($tmpBook);
        unset($bl2);
        return $b;
    }

    public function getBookPdfAction($token){
        $em=$this->getDoctrine()->getManager();
        $book=$em->getRepository('MainBundle:Book')->findOneBy(['token'=>$token,'published'=>true]);
        if($book){
            // assemble book's block together but no persisting
            $blocks=json_decode($book->getPublishedEdition()->getBody());
            $book->getBlocks()->clear();
            // initialise all block
            $allBlock=[];
            foreach ($blocks as $block){
                $version =$block->version? $version=$em->find(Version::class,$block->version):null;
                $bl=$em->find(BookBlock::class,$block->id);
                if($bl && $version){
                    $version->setStatus(3);
                    $bl->getChildrens()->clear();
                    $bl->getVersions()->clear();
                    $bl->setPosition($block->position);
                    $bl->addVersions($version);
                    $allBlock[$bl->getId()]=$bl;
                }
            }
            foreach ($blocks as $bl){
                    foreach ($blocks as $bl2){
                        if($bl2->parent==$bl->id){
                            $allBlock[$bl->id]->addChild($allBlock[$bl2->id]);
                        }
                    }
                if(key_exists($bl->id,$allBlock))
                    $book->addBlock($allBlock[$bl->id]);
            }

            $content=$this->getBlocksContent($book->getUnderBlock());
            $content=$this->updateTableAndFigureNumeration($content);
            $html= $this->renderView('@Main/test.html.twig',['content'=>$content,'book'=>$book]);
            $snappyPdf=$this->get('knp_snappy.pdf');
            $snappyPdf->setOption('replace', ["Page 1"=>"Page 2"]);
            $footer=$this->renderView('footer-test.html.twig',["startPaginationFrom"=>4,"StopPaginationAt"=>false]);
            $pdf=$snappyPdf->getOutputFromHtml($html,array(
                'header-right'=>utf8_decode('webbook'),
                'enable-javascript' => true,
                'javascript-delay' => 1000,
                'enable-internal-links'=>true,
                'footer-html' => $footer,
                'page-size' => 'A4',
                'margin-bottom'=>10,
            ));
            $response= new Response(
                $pdf, 200);
            $response->headers->set('Content-Type', 'application/pdf');
            // Allow all websites
            $response->headers->set('Access-Control-Allow-Origin', '*');

            return $response;

        }else
            throw new HttpException(404, "Livre inexistant .");
    }

    /**
     * @param $bookBlocks
     * @param $tableOfContent
     * @param $listOfFigure
     * @param $listOfTable
     */
    private function generateBookTables($bookBlocks,&$tableOfContent,&$listOfFigure,&$listOfTable)
    {
        /** @var BookBlock $block */
        foreach ($bookBlocks as $block ){
            if($block->getOptions()->isIndexed()){
                $b['title']=$block->getTitle();
                $b['children']=[];
                $v=$block->getVersions()->toArray();
                // searching for figure in version of the block
                $crawler = new Crawler($v[0]->getContent());
                // first extract all the images legend
                /** @var \DOMElement $imgDom */
                foreach ($crawler->filter('figcaption') as $imgDom) {
                    array_push($listOfFigure,str_replace('&&figureNumber&&',count($listOfFigure)+1,$imgDom->textContent));
                }
                // searching for table in version of the block
                // now extract all the tables legend
                /** @var \DOMElement $tableDom */
                $crawler = new Crawler($v[0]->getContent());
                foreach ($crawler->filter('caption') as $tableDom) {
                    array_push($listOfTable,str_replace('&&tableNumber&&',count($listOfTable)+1,$tableDom->textContent));
                }
                if(count($block->getChildrens())>0){
                    $this->generateBookTables($block->getChildrens(),$b['children'],$listOfFigure,$listOfTable);
                }
                array_push($tableOfContent,$b);
            }
        }

    }

    private function getBlocksContent($blocks){
        $txt="<ol> ";
        /** @var BookBlock $block */
        foreach ($blocks as $block){
            $txt.="<li name='section-".$block->getId()."' class='".($block->getOptions()->isIndexed()?"numerated ":"")."book-header-".($block->getLevel()+1)."''>";
            if($block->getOptions()->isShowTitle())
                $txt.="<h".($block->getLevel()+1).">".$block->getTitle()."</h".($block->getLevel()+1).">";
            $txt.="</br><div>";
            $txt.=$block->getPublishedVersion()->getContent();
            if($block->getChildrens())
                $txt.=$this->getBlocksContent($block->getChildrens());

            $txt.="</div></li>";
        }
        return $txt.="<ol>";
    }
    // Generating table and figure numbers
    private function updateTableAndFigureNumeration($content){
        /*$figureNumber=1;
        $tableNumber=1;
        //&amp; => &&
        while (strpos($content, '&amp;&amp;figureNumber&amp;&amp;') !== false)
        {
            $content = preg_replace('/&amp;&amp;figureNumber&amp;&amp;/', $figureNumber++, $content, 1);
        }
        while (strpos($content, '&amp;&amp;tableNumber&amp;&amp;') !== false)
        {
            $content = preg_replace('/&amp;&amp;tableNumber&amp;&amp;/', $tableNumber++, $content, 1);
        }
        // removing tinymce editor pre tags
        $content=str_replace('<pre>',"",$content);
        $content=str_replace('</pre>',"",$content);

        // adding absolute path to images*/
        $siteUrl=$this->getParameter('site_url');
        $content=str_replace('src="','src="'.$siteUrl,$content);

        return $content;
    }

    public function upcomingBooksAction(){
        $em=$this->getDoctrine()->getManager();
        $books=$em->getRepository('MainBundle:Book')->findBy(['publishedPreview'=>true]);
        return $books;
    }

    public function lastPublishedBooksAction(){
        $em=$this->getDoctrine()->getManager();
        $books=$em->getRepository('MainBundle:Book')
            ->findBy(['published'=>true],['publishDate'=>'DESC']);
        return array_slice($books,0,10);
    }

    public function bestBooksAction(){
        $em=$this->getDoctrine()->getManager();
        $books=$em->getRepository('MainBundle:Book')
            ->bestBooks();
        dump($books);die;
        return array_slice($books,0,6);
    }

    public function bestSellingBooksAction(){
        $em=$this->getDoctrine()->getManager();
        $books=$em->getRepository('MainBundle:Book')
            ->bestSellingBooks();
        return array_slice($books,0,10);
    }
}