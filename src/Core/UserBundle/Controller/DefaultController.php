<?php

namespace Core\UserBundle\Controller;

use Core\UserBundle\Entity\User;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse as JsonResponse;
use Symfony\Component\HttpFoundation\Request as Request;
use Webbook\MainBundle\Form\SubscriptionType;
use Webbook\NotificationBundle\Entity\Notification;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }

    public function registerAction(Request $request, $plan)
    {
        $em = $this->getDoctrine()->getManager();
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
        if ($plan == "global" or $plan == "theme")
            $form->add('subscription', SubscriptionType::class);

        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            if ($plan == "theme")
                $user->getSubscription()->setType(2);

            //send notification to all administrators if its a new subscription
            $administrators=$em->getRepository('UserBundle:User')->findByRoles(['ROLE_ADMINISTRATOR']);
            if ($plan == "global" or $plan == "theme")
                foreach ($administrators as $administrator){
                    $notif = new Notification();
                    $notif->setMessage('Nouveau abonnement a été crée');
                    $notif->setIcon('fa-user-plus');
                    $notif->setUser($administrator);
                    $notif->setUrl($this->generateUrl('administrator_subscriptions'));
                    $em->persist($notif);
                }
            $user->setEnabled(true);
            $user->setFullRoles(['ROLE_CLIENT']);
            $userManager->updateUser($user);
            $response = ['valid' => true];
            $em->flush();
            return new JsonResponse($response);
        } else {
            // $errors=(string) $form->getErrors(true, false);
            $errors = $this->getErrorsFromForm($form);
            //Show errors
            $response = ['valid' => false, 'errors' => $errors];
            return new JsonResponse($response);

        }
    }

    public static function getErrorsFromForm(FormInterface $form)
    {
        $errors = array();
        foreach ($form->getErrors() as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if ($childForm instanceof FormInterface) {
                if ($childErrors = self::getErrorsFromForm($childForm)) {
                    $errors[$childForm->getName()] = $childErrors;
                }
            }
        }
        return $errors;
    }
}
