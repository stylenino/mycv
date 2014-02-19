<?php

namespace Cv\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
   /**
    * @Route("/" , name="cv_front_home")
    */
    public function indexAction()
    {
        $name = "mokrane";
        return $this->render('CvFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}
