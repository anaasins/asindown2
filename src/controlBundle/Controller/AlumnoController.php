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
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(alumno::class);
      // find *all* alumnos
      $alumnos = $repository->findAll();
      return $this->render('alumnos/tablaAlumno.html.twig',array("alumno"=>$alumnos));
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

       return $this->redirectToRoute('listalumnos');
   }
        return $this->render('alumnos/nuevoAlumno.html.twig', array('form'=>$form->createView()));
    }
}
