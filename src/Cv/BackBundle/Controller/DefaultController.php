<?php

namespace Cv\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "admin";
        return $this->render('CvBackBundle:Default:index.html.twig', array('name' => $name));
    }
}
