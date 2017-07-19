<?php

namespace Core\LibBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

class MenuController extends Controller
{

    public function RenderMainMenuAction($route){
        return $this->render('LibBundle:menu:main_section.html.twig', array(
        	'route' => $route
        ));
    }

    public function asseticAction(){
    	$kernel = $this->container->get('kernel');
        $output = new BufferedOutput();
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input = new ArrayInput(array(
           'command'              => 'assetic:dump',
        ));
        $application->run($input, $output);

        return $output->fetch();
    }
}
