<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfesorController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('controlBundle:Default:index.html.twig');
    }
}
