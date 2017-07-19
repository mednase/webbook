<?php

namespace Webbook\MainBundle\Controller\Administrator;

use Core\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Webbook\MainBundle\Entity\Category;
use Webbook\MainBundle\Entity\Parameter;

class AdministratorController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $version_edit=$em->getRepository("MainBundle:Version")->findBy(['status'=>'0']);
        $version_validation=$em->getRepository("MainBundle:Version")->findBy(['status'=>1]);
        $versions=array_merge($version_edit,$version_validation);
        return $this->render('@Main/Admin/index.html.twig',['versions'=>$versions]);
    }
    public function manageRolesAction(Request $request){

        $em=$this->getDoctrine()->getManager();
        if($request->getMethod()=="POST"){
            $user = $em->getRepository("UserBundle:User")->findOneByUsername($request->request->get('username'));
            $output = array();
            if ($user) {
                $role = $request->request->get('role');
                switch ($role) {
                    case 'ROLE_ADMINISTRATOR':
                        $user->setJobTitle("administrateur");
                        break;
                    case 'ROLE_VALIDATOR':
                        $user->setJobTitle("validateur");
                        break;
                    case 'ROLE_AUTHOR':
                        $user->setJobTitle("auteur");
                        break;
                }
                $user->setFullRoles(array($role));
                $em->persist($user);
                $em->flush();
                $output['success'] = true;
                $output['username'] = $user->getUsername();

            }
            $response = new Response(json_encode($output));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        $ROLES=['ROLE_AUTHOR','ROLE_ADMINISTRATOR','ROLE_VALIDATOR'];
        $users=$em->getRepository("UserBundle:User")->findByRoles($ROLES);

        return $this->render("@Main/Admin/manage.roles.html.twig",array("users"=>$users));
    }

    public function versionProgressionAction($token){
        $em=$this->getDoctrine()->getManager();
        $version=$em->getRepository("MainBundle:Version")->findOneBy(['token'=>$token]);
        if(!$version)
            return $this->redirectToRoute('not_found');

        return $this->render("@Main/Admin/book/version.progression.html.twig",
            array('version'=>$version));
    }

    public function clientsAction(){
        $em=$this->getDoctrine()->getManager();
        $clients=$em->getRepository('UserBundle:User')->findClients();

        return $this->render('@Main/Admin/client/clients.html.twig',array('clients'=>$clients));
    }
    public function showClientAction(User $client){
        if(!$client)
            return $this->redirectToRoute('not_found');

        return $this->render('@Main/Admin/client/show.client.html.twig',array('client'=>$client));
    }
    public function subscriptionsAction(){
        $em=$this->getDoctrine()->getManager();
        $subscription=$em->getRepository('MainBundle:Subscription')->findAll();

        return $this->render('@Main/Admin/client/subscriptions.html.twig',array('subscriptions'=>$subscription));
    }

    public function purchasesAction(){
        $em=$this->getDoctrine()->getManager();
        $purchases=$em->getRepository('MainBundle:Purchase')->findAll();

        return $this->render('@Main/Admin/client/purchases.html.twig',array('purchases'=>$purchases));
    }

    public function parametersSubscriptionAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        if($request->getMethod()=="POST"){
            $data=$request->request->all();
            foreach ($data as $key=>$value){
                $param=$em->find(Parameter::class,$key);
                if($param){
                    $param->setValue($value);
                    $em->persist($param);
                }
            }
            $this->addFlash('info','Toutes les modifications ont été enregistrés');
        }
        $parameters=$em->getRepository('MainBundle:Parameter')->findAll();
        return $this->render('@Main/Admin/parameters.subscription.html.twig',['parameters'=>$parameters]);
    }
    public function parametersGeneralAction(Request $request){

        return $this->render('@Main/Admin/parameters.general.html.twig');
    }

    public function listCategoriesAction(){
        $em=$this->getDoctrine()->getManager();
        $listCategories=$em->getRepository('MainBundle:Category')->findAll();

        return $this->render('@Main/Admin/category/list.category.html.twig',['categories'=>$listCategories]);
    }

    public function newCategoryAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $newCategory=new Category();
        $form=$this->createForm('Webbook\MainBundle\Form\CategoryType',$newCategory);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('success','Nouvelle categorie a été ajouter ');

            return $this->redirectToRoute('administrator_category_list');
        }
        return $this->render('@Main/Admin/category/new.category.html.twig',['form'=>$form->createView()]);
    }

    public function removeCategoryAction(Category $category){
        $em=$this->getDoctrine()->getManager();

        if(!$category)
            return $this->redirectToRoute('not_found');

        $em->remove($category);
        $em->flush();
        $this->addFlash('success','La categorie a été supprimer avec succes');

        return $this->redirectToRoute('administrator_category_list');
    }
}
