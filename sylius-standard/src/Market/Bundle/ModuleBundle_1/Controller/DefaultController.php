<?php

namespace Market\Bundle\ModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ModuleBundle:Default:index.html.twig', array('name' => $name));
    }
}
