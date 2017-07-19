<?php

namespace Webbook\MainBundle\Controller\Administrator;

use Core\UserBundle\Controller\DefaultController;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Persisters\Entity\EntityPersister;
use Snilius\Twig\SortByFieldExtension;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Webbook\MainBundle\Entity\BlockHistoric;
use Webbook\MainBundle\Entity\Book;
use Webbook\MainBundle\Entity\BookBlock;
use Webbook\MainBundle\Entity\BookEdition;
use Webbook\MainBundle\Entity\Media;
use Webbook\MainBundle\Entity\Version;
use Webbook\NotificationBundle\Entity\Notification;

class BookController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('MainBundle:Book')->findAll();
        return $this->render("MainBundle:Admin/book:books.html.twig", array(
            'books' => $books,
        ));
    }

    public function newBookAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $book = new Book();
        $form = $this->createForm('Webbook\MainBundle\Form\BookType', $book);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $images = $request->files->get('images');
            /** @var UploadedFile $img */
            foreach ($images as $img) {
                if ($img)
                    try {
                        if (strpos($img->getMimeType(), 'image') !== false) {
                            $media = new Media();
                            $media->setMediaFile($img);
                            $book->addImage($media);
                        }
                    } catch (FileNotFoundException $exception) {
                        echo "file not found";
                    }
            }
            $firstEdition=new BookEdition("1er edition");
            $book->addEdition($firstEdition);
            $em->persist($book);
            $em->flush();
            foreach ($book->getMainAuthors() as $author) {
                $notif = new Notification();
                $notif->setUser($author);
                $notif->setIcon('fa-pencil-square');
                $notif->setMessage('Vous etes assigné a l edition du livre ' . $book->getTitle());
                $notif->setUrl($this->generateUrl('author_show_book', ['token' => $book->getToken()]));
                $em->persist($notif);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('administrator_edit_book', array("token" => $book->getToken())));

        }

        return $this->render("MainBundle:Admin/book:new.book.html.twig", array(
            'entity' => $book,
            'form' => $form->createView()));

    }

    // Published Books
    public function publishedAction()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('MainBundle:Book')->findBy(array("published" => true));
        return $this->render("@Main/Admin/book/published.book.html.twig", array(
            'books' => $books,
        ));
    }

    // Published Books
    public function unpublishedAction()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('MainBundle:Book')->findBy(array("published" => false));
        return $this->render("@Main/Admin/book/unpublished.book.html.twig", array(
            'books' => $books,
        ));
    }

    public function switchUpcomingStateAction(Book $book){
        $em = $this->getDoctrine()->getManager();
        if($book){
            if(!$book->getPublishedEdition()){
                $book->setPublishedPreview(!$book->isPublishedPreview());
                $em->persist($book);
                $em->flush();
            }
        }
        return new Response();
    }
    // do publish action
    public function publishBookEditionAction(BookEdition $edition)
    {
        $em = $this->getDoctrine()->getManager();
        if($edition){
            $book=$edition->getBook();
            $check=$this->verifyReadyEdition($edition);
            if($check===true){
                $publishedEdition=$book->getPublishedEdition();
                if($publishedEdition){
                    $publishedEdition->setPublished(false);
                    $em->persist($publishedEdition);
                }
                $edition->setPublished(true);
                $book->setPublished(true);
                $book->setPublishedPreview(false);
                $book->setPublishDate(new \DateTime());
                $em->persist($book);
                $em->flush();
                return new JsonResponse(['success'=>true]);
            }else{
                return new JsonResponse(['success'=>false,"msg"=>$check]);
            }
        }
        return new JsonResponse(['success'=>false,"msg"=>"Erreur lors du chargement d'édition"]);
    }

    public function showBookAction($token)
    {

        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('MainBundle:Book')->findOneBy(array("token" => $token));

        if (!$book)
            return $this->redirectToRoute('not_found');

        return $this->render("@Main/Admin/book/show.book.html.twig", array(
            'book' => $book,
        ));

    }

    public function editBookAction(Request $request, $token)
    {

        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('MainBundle:Book')->findOneBy(array("token" => $token));
        if (!$book)
            return $this->redirectToRoute('not_found');

        $form = $this->createForm('Webbook\MainBundle\Form\BookType', $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $deletedImage = $request->request->get('deleteImages');
            $images = $request->files->get('images');
            /** @var UploadedFile $img */
            foreach ($images as $img) {
                if ($img) {
                    if (strpos($img->getMimeType(), 'image') !== false) {
                        $media = new Media();
                        $media->setMediaFile($img);
                        $book->addImage($media);
                    }
                }
            }
            if ($deletedImage)
                foreach ($deletedImage as $img) {
                    if ($img) {
                        $img = $em->find(Media::class, $img);
                        $em->remove($img);
                    }
                }
            $em->persist($book);
            $em->flush();
            /** @var Media $image */
            foreach ($book->getImages() as $image) {
                if ($image->getMedia()->getName() == null)
                    $em->remove($image);
            }
            $em->flush();
            $this->addFlash("success", "Toutes les modifications ont été enregistrés");
            return $this->redirect($request->getRequestUri());
        }

        $validators = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_VALIDATOR']);
        $authors = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_AUTHOR']);

        foreach ($book->getMainAuthors() as $author) {
            $pos = array_search($author, $authors);
            array_splice($authors, $pos, 1);
        }

        return $this->render("@Main/Admin/book/edit.book.html.twig", array(
            'book' => $book,
            'form' => $form->createView(),
            'validators' => $validators,
            'authors' => $authors
        ));

    }

    public function deleteBookBlockAction(BookBlock $block = null, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if (!$block && $request->isXmlHttpRequest())
            return new JsonResponse(['success' => false]);
        elseif (!$block)
            return $this->redirectToRoute('not_found');

        /** @var Book $book */
        $book = $block->getBook();
        if ($block) {
            //rearrange other block position
            if($block->getParent())
                $brothers=$block->getParent()->getChildrens();
            else
                $brothers=$book->getUnderBlock();

            /** @var BookBlock $brother */
            foreach ($brothers as $brother)
                if ($brother->getPosition() > $block->getPosition() && $brother->getId()!=$block->getId()) {
                    $brother->setPosition($brother->getPosition() - 1);
                    $em->persist($brother);
                }

                // if block exist in other editions then just remove from current edition otherwise delete the block completely
            if($this->blockExistInOtherEdition($book,$block)){
                $block->setBook(null);
                $this->detachBlockChildrenFromBook($block);
                $em->persist($block);
            }else
                $em->remove($block);

            $em->flush();
            $activeEdition=$book->getActivatedEdition();
            $this->updateBookEdition($activeEdition);
            $em->flush();
            if ($request->isXmlHttpRequest())
                return new JsonResponse(['success' => true]);
            $this->addFlash('success', 'La suppression du bloc a été faite');
            return $this->redirectToRoute('administrator_edit_book', array('token' => $book->getToken()));
        } elseif ($request->isXmlHttpRequest())
            return new JsonResponse(['success' => false]);

        $this->addFlash('error', 'Erreur la suppression na pas été executé');
        return $this->redirectToRoute('administrator_edit_book', array('token' => $book->getToken()));
    }

    public function deleteBookAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('MainBundle:Book')->findOneBy(['token' => $token]);
        if ($book) {
            $em->remove($book);
            $em->flush();
        }

        return new Response();
    }

    public function addBookEditionAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $title = $request->request->get('title');
        $book = $em->getRepository('MainBundle:Book')->findOneBy(['token' => $token]);
        if ($book) {
            $newBookEdition = new BookEdition($title);
            $newBookEdition->setBook($book);
            $newBookEdition->setNumber(count($book->getEditions()));
            $oldEdition=$book->getActivatedEdition();
            $oldEdition->setActive(false);
            $em->persist($oldEdition);
            $newBookEdition->setBody($oldEdition->getBody());
            $em->persist($newBookEdition);
            $em->flush();
            $serializer = $this->get('serializer');
            $data = $serializer->serialize($newBookEdition, 'json');
            return new Response($data);
        }
        return new Response("false");
    }

    public function deleteBookEditionAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $bookEdition = $em->getRepository('MainBundle:BookEdition')->findOneBy(['token' => $token]);
        if ($bookEdition) {
            $em->remove($bookEdition);
            $em->flush();
            return new Response("true");
        }
        return new Response("false");
    }

    public function activateBookEditionAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var BookEdition $bookEdition */
        $bookEdition = $em->getRepository('MainBundle:BookEdition')->findOneBy(['token' => $token]);
        $activatedEdition = $bookEdition->getBook()->getActivatedEdition();
        $activatedEdition->setActive(false);
        $bookEdition->setActive(true);
        $em->persist($activatedEdition);

        // initialize book blocks
        /** @var BookBlock $bl */
        foreach ($bookEdition->getBook()->getUnderBlock() as $bl) {
            $bl->setBook(null);
        }
        $em->persist($bookEdition->getBook());
        $blocks = json_decode($bookEdition->getBody());
        foreach ($blocks as $bl) {
            $bl=(array)$bl;
            $block = $em->getRepository('MainBundle:BookBlock')->find($bl['id']);
            if($block){
                $block->setBook($bookEdition->getBook());
                // set each block s'saved version
                if ($bl['version']) {
                    $version = $em->getRepository('MainBundle:Version')->find($bl['version']);
                    if ($block->getPublishedVersion())
                        $block->getPublishedVersion()->setStatus(2);
                    $version->setStatus(3);
                    $em->persist($version);
                }
                if($bl['parent'])
                    $block->setParent($em->getRepository('MainBundle:BookBlock')->find($bl['parent']));
                else
                    $block->setParent(null);
                $block->setPosition($bl['position']);
                $em->persist($block);
            }
        }
        $this->addFlash('success', 'L édition numéro '.$bookEdition->getNumber().' du livre «' . $bookEdition->getBook()->getTitle() . '»  a été établi');
        $em->flush();
        return new Response();
    }

    public function publishBlockVersionAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        $newVersion = $em->getRepository('MainBundle:Version')->findOneBy(['token' => $token]);
        /** @var BookBlock $block */
        $block = $newVersion->getBookBlock();
        $publishedVersion = $em->getRepository('MainBundle:Version')->findOneBy(['status' => 3, 'bookBlock' => $block->getId()]);
        if($publishedVersion){
            $publishedVersion->setStatus(2);
            $em->persist($publishedVersion);
        }
        $newVersion->setStatus(3);
        $historic = new BlockHistoric();
        $historic->setMessage("Publication du version numéro ".$newVersion->getNumber()." par " . $this->getUser()->getFullName());
        $block->addHistoric($historic);
        $em->persist($newVersion);
        $em->flush();
        $activeEdition=$block->getBook()->getActivatedEdition();
        $this->updateBookEdition($activeEdition);
        $em->flush();
        $this->addFlash('success', 'La version a été changer avec success');
        return new Response();
    }

    public function searchBookAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $parameters=[];
        $query="SELECT b FROM MainBundle:Book b JOIN b.mainAuthors u JOIN b.category cat JOIN UserBundle:Profile p where (u.profile = p.id)";
        if($request->query->has('title')){
            $query.=' AND (b.title like :title)';
            $parameters['title']='%'.$request->query->get('title').'%';
        }
        if($request->query->has('letter')){
            $query.=' AND (b.title like :letter)';
            $parameters['letter']=$request->query->get('letter').'%';
        }
        if($request->query->has('publicationFrom')){
            $query.=' AND (b.publishDate between :dateFrom and :dateTo)';
            $parameters['dateFrom']=$request->query->get('publicationFrom').'%';
            $parameters['dateTo']=$request->query->get('publicationTo').'%';
        }

        if($request->query->has('author')){
            $query.=' AND (( p.firstName like :author) OR (p.lastName like :author) 
            OR( CONCAT(p.firstName,\' \',p.lastName) like :author ) 
            OR( CONCAT(p.lastName,\' \',p.firstName) like :author ))';
            $parameters['author']='%'.$request->query->get('author').'%';

        }
        if($request->query->has('category')){
            $query.=' AND(cat.id like :category)';
            $parameters['category']='%'.$request->query->get('category').'%';
        }
        if($request->query->has('isbn')){
            dump($request->query->get('isbn'));die;
            $query.=' AND(b.isbn like :isbn)';
            $parameters['isbn']='%'.$request->query->get('isbn').'%';
        }
        if($request->query->has('sort')){
            $query.='order By b.title :sort';
            $parameters['sort']=$request->query->get('sort');
        }

        $query=$em->createQuery($query)->setParameters($parameters);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        $categories=$em->getRepository('MainBundle:Category')->findNotEmpty();
        return $this->render('@Main/Admin/book/search.book.html.twig',
            ['pagination'=>$pagination,'categories'=>$categories]);
    }

    public function findBookAjaxAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->query->has('searchFor') && $request->query->has('searchType')) {
            $searchFor = $request->query->get('searchFor');
            $searchType = $request->query->get('searchType');
            $books = [];
            switch ($searchType) {
                case 1:
                    $books = $em->getRepository('MainBundle:Book')->findByTitle($searchFor, 7);
                    break;
                case 2:
                    $books = $em->getRepository('MainBundle:Book')->findByAuthorFullName($searchFor, 7);
                    break;
                case 3:
                    $books = $em->getRepository('MainBundle:Book')->findByDescription($searchFor, 7);
                    break;
            }
            $serializer = $this->get('jms_serializer');
            $data = $serializer->serialize($books, 'json');
            return new Response($data);
        }
        return new Response();
    }

    public function createBookBlockAction(Book $book = null, Request $request)
    {
        $newBlock = new BookBlock();
        $form = $this->createForm('Webbook\MainBundle\Form\BookBlockType', $newBlock);
        $form->handleRequest($request);
        if ($book) {
            $em = $this->getDoctrine()->getManager();
            if ($form->isSubmitted() && $form->isValid()) {
                if($newBlock->HasValidator()){
                    $newBlock->setBook($book);
                    $parent=$newBlock->getParent();
                    if($parent){
                        $newBlock->setPosition(count($parent->getChildrens()));
                        $newBlock->setLevel($parent->getLevel() + 1);
                    }else{
                        $newBlock->setPosition(count($book->getUnderBlock()));
                    }
                    $em->persist($newBlock);
                    $em->flush();
                    $activeEdition=$newBlock->getBook()->getActivatedEdition();
                    $this->updateBookEdition($activeEdition);
                    $em->flush();


                    $validators = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_VALIDATOR']);
                    $authors = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_AUTHOR']);

                    foreach ($book->getMainAuthors() as $author) {
                        $pos = array_search($author, $authors);
                        array_splice($authors, $pos, 1);
                    }

                    $template=$this->renderView('form/form.book_block.html.twig',
                        ['block'=>$newBlock,
                        'validators' => $validators,
                        'authors' => $authors]);

                    $data = ['success' => true, 'id' => $newBlock->getId(), 'level' => $newBlock->getLevel(),'title'=>$newBlock->getTitle(),
                        'template'=>$template, 'position' => $newBlock->getPosition(),'parent'=>$parent?$parent->getId():null,
                        'url'=>$this->generateUrl('administrator_book_block',['token'=>$newBlock->getToken()])];
                    return new JsonResponse($data);
                }else
                    return new JsonResponse(['success'=>false,'errors'=>['Vous devez affecter un validateur a ce bloc']]);
            }
        }
        return new JsonResponse(['success' => false,'errors'=>DefaultController::getErrorsFromForm($form)]);
    }

    public function updateBookBlockAction(BookBlock $bookBlock=null, Request $request){
        $em = $this->getDoctrine()->getManager();
        if($bookBlock){
            $form = $this->createForm('Webbook\MainBundle\Form\BookBlockType', $bookBlock);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->flush();
                return new JsonResponse(['success' => true,'id'=>$bookBlock->getId(),'title'=>$bookBlock->getTitle()]);
            }else
                return new JsonResponse(['success' => false,'errors'=>DefaultController::getErrorsFromForm($form)]);
        }
        return new JsonResponse(['success' => false]);
    }

    public function updateBlockParentAndPositionAction(BookBlock $block, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $newParent = $request->request->get('newParent');
        $newPosition= $request->request->get('position');
        $oldPosition=$block->getPosition();
        $block->getParent()?$oldParent=$block->getParent()->getId():$oldParent=null;
        // rearrange other block
        $data['id']=$block->getId();
        $data['parent']=$newParent;
        //if only position is changed
        if($newParent == $oldParent && $oldPosition!=$newPosition){
            $brothers=$em->getRepository('MainBundle:BookBlock')->findBy(['level'=>$block->getLevel()]);
            foreach ($brothers as $brother){
                if($brother->getPosition()<$oldPosition && $brother->getPosition()>=$newPosition && $brother->getId()!=$block->getId()){
                    $brother->setPosition($brother->getPosition()+1);
                    $em->persist($brother);
                }elseif($brother->getPosition()>$oldPosition && $brother->getPosition()<=$newPosition && $brother->getId()!=$block->getId()){
                    $brother->setPosition($brother->getPosition()-1);
                    $em->persist($brother);
                }

            }
            // if level is changed
        }elseif ($newParent != $oldParent){
            $oldBrothers=$em->getRepository('MainBundle:BookBlock')->findBy(['level'=>$block->getLevel()]);
            // if new parent is the book or a block
            if($newParent)
                $newBrothers=$em->getRepository('MainBundle:BookBlock')->findBy(['parent'=>$newParent]);
            else
                $newBrothers=$block->getBook()->getUnderBlock();

            //first rearrange old brothers
            foreach ($oldBrothers as $brother){
                if($brother->getPosition()>$oldPosition && $brother->getId()!=$block->getId()){
                    $brother->setPosition($brother->getPosition()-1);
                    $em->persist($brother);
                }
            }
            // now rearrange new brothers
            foreach ($newBrothers as $brother){
                if($brother->getPosition()>=$newPosition && $brother->getId()!=$block->getId()){
                    $brother->setPosition($brother->getPosition()+1);
                    $em->persist($brother);
                }
            }

            // rearrange children s level
            if(!$newParent)
                $step=-1;
            elseif(!$oldParent)
                $step=1;
            else{
                $newParent = $em->find(BookBlock::class, $newParent);
                $oldParent = $em->find(BookBlock::class, $oldParent);
                $oldParent->getLevel()>$newParent->getLevel()?$step=-1:$step=1;
            }

            $this->updateChildrenLevel ($block->getChildrens(),$step);
        }

        if ($newParent) {
            $newParent = $em->find(BookBlock::class, $newParent);
        } else{
            $newParent = null;
        }

        $block->setParent($newParent);
        $block->setPosition($newPosition);
        $em->persist($block);
        $em->flush();
        $activeEdition=$block->getBook()->getActivatedEdition();
        $this->updateBookEdition($activeEdition);
        $em->flush();

        return new JsonResponse($data);
    }

    public function editBookBlockAction($token)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var BookBlock $block */
        $block = $em->getRepository("MainBundle:BookBlock")->findOneBy(['token' => $token]);
        if (!$block)
            return $this->redirectToRoute('not_found');

        $validators = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_VALIDATOR']);
        $authors = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_AUTHOR']);

        foreach ($block->getBook()->getMainAuthors() as $author) {
            $pos = array_search($author, $authors);
            array_splice($authors, $pos, 1);
        }
        return $this->render('@Main/Admin/book/edit.block.html.twig', [
            'block' => $block,
            'validators' => $validators,
            'authors' => $authors
        ]);
    }

    private function updateChildrenLevel($children,$step){
        $em=$this->getDoctrine()->getManager();
        /** @var BookBlock $child */
        foreach ($children as $child){
            $child->setLevel($child->getLevel()+$step);
            $em->persist($child);
            if($child->getChildrens())
                $this->updateChildrenLevel($child->getChildrens(),$step);
        }
    }

    private function updateBookEdition(BookEdition $bookEdition){
        $em=$this->getDoctrine()->getManager();
        $em->refresh($bookEdition->getBook());
        $body = array();
        /** @var BookBlock $bl */
        foreach ($bookEdition->getBook()->getBlocks() as $bl) {
            // save the version of each block
            $version = $em->getRepository('MainBundle:Version')->findOneBy(['bookBlock' => $bl->getId(),
                'status' => 3]);
            $data['id']= $bl->getId();
            $data['version'] = ($version ? $version->getId() : null);
            $data['position'] = $bl->getPosition();
            $data['parent'] =($bl->getParent() ? $bl->getParent()->getId() : null);

            array_push($body,$data);
        }
        $body = json_encode($body);
        $bookEdition->setBody($body);
        $em->persist($bookEdition);
    }

    private function verifyReadyEdition(BookEdition $bookEdition){
        $blocks = json_decode($bookEdition->getBody());
        if(count($blocks)>0)
            foreach ($blocks as $bl) {
                if(!$bl->version)
                    return "Vérifier que tous les blocs ont de version publiée";
            }
        else
            return "Vous ne pouvez pas publier une édition vide !";

        return true;

    }

    private function blockExistInOtherEdition(Book $book,BookBlock $block)
    {
        foreach ($book->getEditions() as $edition){
            if($edition->getId()!=$book->getActivatedEdition()->getId()){
                $blocks = json_decode($edition->getBody());
                foreach ($blocks as $bl)
                    if($bl->id==$block->getId())
                        return true;
            }
        }
        return false;
    }

    private function detachBlockChildrenFromBook(BookBlock $block){
        $em=$this->getDoctrine()->getManager();
        foreach ($block->getChildrens() as $children){
            $children->setBook(null);
            $em->persist($children);
            $this->detachBlockChildrenFromBook($children);
        }
    }
}

?>