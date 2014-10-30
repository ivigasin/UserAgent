<?php

namespace ivigasin\UserAgentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ivigasinUserAgentBundle:Default:index.html.twig', array('name' => $name));
    }
}
