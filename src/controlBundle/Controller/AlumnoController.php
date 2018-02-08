<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\alumno;
use controlBundle\Form\alumnoType;
use Symfony\Component\HttpFoundation\Request;

class AlumnoController extends Controller
{
    /**
     * @Route("/historial")
     */
    public function historialAction()
    {
        return $this->render('alumnos/historial.html.twig');
    }

    /**
     * @Route("/tabla" , name="listalumnos")
     */
    public function tablaAction()
    {
        return $this->render('alumnos/tablaAlumno.html.twig');
    }

    /**
     * @Route("/nuevoAlumno", name="nuevoAlumno")
     */
    public function nuevoAlumnoAction(Request $request)
    {
      $alumnos = new alumno();
      $form = $this->createForm(alumnoType::class, $alumnos);

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
       $alumno = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($alumno);
        $em->flush();

       return $this->redirectToRoute('index');
   }
        return $this->render('alumnos/nuevoAlumno.html.twig', array('form'=>$form->createView()));
    }
}
