<?php

namespace Webbook\MainBundle\Controller\Administrator;

use Core\UserBundle\Entity\User;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * User controller.
 *
 * @Route("administrator")
 */
class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findByRoles(array('ROLE_ADMINISTRATOR', 'ROLE_VALIDATOR'));

        return $this->render('@Main/Admin/user/users.html.twig', array(
            'users' => $users,
        ));
    }

    public function newAction(Request $request)
    {
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        /**
         * @var User $user
         */
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
                $role = $request->request->get('role');
                switch ($role) {
                    case 'ROLE_VALIDATEUR':
                        $user->setRoles(['ROLE_VALIDATOR']);
                        $user->setJobTitle("validateur");
                        break;
                    case 'ROLE_ADMINISTRATEUR':
                        $user->setRoles(['ROLE_ADMINISTRATOR']);
                        $user->setJobTitle("administrateur");
                        break;
                }

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $this->addFlash("success", "un nouveau compte a été crée !");
                    return $this->redirectToRoute('administrator_edit_user', array('id' => $user->getId()));
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('@Main/Admin/user/new.html.twig', array(
            'administrator' => $user,
            'form' => $form->createView()
        ));
    }

    public function showAction(User $user)
    {
        return $this->render('@Main/Admin/user/show.html.twig', array(
            'administrator' => $user,
        ));
    }
    public function switchEnabledAction(User $account)
    {
        $em = $this->getDoctrine()->getManager();
        if($account){
            $account->setEnabled(!$account->isEnabled());
            $em->persist($account);
            $em->flush();
        }
        return new Response();
    }

    public function editAction(Request $request, User $user)
    {
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        $editForm = $formFactory->createForm();
        $editForm->setData($user);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $username = $em->getRepository('UserBundle:User')->findOneBy(array("username" => $user->getUsername()));
            if ($username && ($username->getId() != $user->getId())) {
                $this->addFlash("error", "le nouveau nom d'utilisateur existe déja");
                return $this->render('@Main/Admin/user/edit.html.twig', array(
                    'administrator' => $user,
                    'edit_form' => $editForm->createView()
                ));
            }
            $emailuser = $em->getRepository("UserBundle:User")->findOneBy(array("email" => $user->getEmail()));
            if ($emailuser && ($emailuser->getId() != $user->getId())) {
                $this->addFlash("error", "le nouveau email existe déja");
                return $this->render('@Main/Admin/user/edit.html.twig', array(
                    'administrator' => $user,
                    'edit_form' => $editForm->createView()
                ));
            }
            switch ($request->request->get('roles')) {
                case 'ROLE_VALIDATOR':
                    $user->setRoles(['ROLE_VALIDATOR']);
                    $user->setJobTitle("validateur");
                    break;
                case 'ROLE_ADMINISTRATOR':
                    $user->setRoles(['ROLE_ADMINISTRATOR']);
                    $user->setJobTitle("administrateur");
                    break;
            }
            $em->flush();
            $this->addFlash("success", "les information d'utilisateur ont bien changé");
            return $this->redirectToRoute('administrator_edit_user', array('id' => $user->getId()));
        }

        return $this->render('@Main/Admin/user/edit.html.twig', array(
            'administrator' => $user,
            'edit_form' => $editForm->createView()
        ));
    }

    public function deleteAction(Request $request)
    {
        if ($request->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $id = $request->request->get('user_id');
            $user = $em->find(User::class, $id);
            if ($user) {
                $user->delete();
                $user->setEnabled(false);
                $em->persist($user);
                $em->flush();
            }
        }
        return new Response();
    }

    public function authorsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $authors = $em->getRepository('UserBundle:User')->findByRoles(['ROLE_AUTHOR']);
        return $this->render('@Main/Admin/author/authors.html.twig', array(
            'authors' => $authors,
        ));

    }

    public function newAuthorAction(Request $request)
    {
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        /**
         * @var User $user
         */
        $user = $userManager->createUser();
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm();
        $form->add('bibliography',null,['label'=>'Bibliographie']);
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
                $biblio = $request->request->get('bibliography');
                $user->setJobTitle("author");
                $user->setBibliography($biblio);
                $user->setRoles(['ROLE_AUTHOR']);
                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $this->addFlash("success","un nouveau auteur a été crée  ! les informations de compte ont été envoyer a l email d'author ! ");
                    return $this->redirectToRoute('administrator_authors');
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }

            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('@Main/Admin/author/new.author.html.twig', array(
            'administrator' => $user,
            'form' => $form->createView()
        ));
    }

    public function editAuthorAction(Request $request, User $author)
    {
        /** @var $formFactory FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        $editForm = $formFactory->createForm();
        $editForm->add('bibliography',null,['label'=>'Bibliographie']);
        $editForm->setData($author);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $username = $em->getRepository('UserBundle:User')->findOneBy(array("username" => $author->getUsername()));
            if ($username && ($username->getId() != $author->getId())) {
                $this->addFlash("error", "le nouveau nom d'author existe déja");
                return $this->render('@Main/Admin/author/edit.author.html.twig', array(
                    'author' => $author,
                    'edit_form' => $editForm->createView()
                ));
            }
            $emailuser = $em->getRepository("UserBundle:User")->findOneBy(array("email" => $author->getEmail()));
            if ($emailuser && ($emailuser->getId() != $author->getId())) {
                $this->addFlash("error", "le nouveau email existe déja");
                return $this->render('@Main/Admin/author/edit.author.html.twig', array(
                    'author' => $author,
                    'edit_form' => $editForm->createView()
                ));
            }
            $em->flush();
            $this->addFlash("success", "les information d'auteur ont bien changé");
            return $this->redirectToRoute('administrator_edit_author', array('id' => $author->getId()));
        }

        return $this->render('@Main/Admin/author/edit.author.html.twig', array(
            'author' => $author,
            'edit_form' => $editForm->createView()
        ));
    }

}
