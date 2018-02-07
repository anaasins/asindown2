<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AlumnoController extends Controller
{
    /**
     * @Route("/historial")
     */
    public function historialAction()
    {
        return $this->render('alumnos/historial.html.twig');
    }
}
