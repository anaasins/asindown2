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
    * @Route("/tabla/{id}", name="alumnoid")
    */
    public function alumnoidAction($id){
        $repository = $this->getDoctrine()->getRepository(alumno::class);
        // find *id* alumno
        $alumno = $repository->findOneById($id);
          if(!$alumno){
            return $this->render('profesores/error.html.twig');
          }
          // hacer para que si esta vacio cuando llegue a id.twig
          return $this->render('alumnos/tablaAlumno.html.twig',array("alumnoID"=>$alumno));
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

    /**
     * @Route("/editarAlumno/{id}" , name="editarAlumno")
     */
    public function editarAlumnoAction(Request $request, $id)
    {
      $alumno=$this->getDoctrine()->getRepository(alumno::class)->find($id);

      $form=$this->createForm(alumnoType::class, $alumno);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

         //$cerveza = $form->getData();
         $em = $this->getDoctrine()->getManager();
         $em->persist($alumno);
         $em->flush();

         return $this->redirectToRoute('listalumnos');
       }

      return $this-> render('alumnos/editarAlumno.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/eliminarAlumno/{id}", name="eliminarAlumno")
     */
    public function eliminarAlumnoAction($id)
    {
      $db=$this->getDoctrine()->getManager();
      $eliminar = $db ->getRepository(alumno::class)->find($id);
      $db->remove($eliminar);
      $db->flush();
        return $this->redirectToRoute('listaalumnos');
    }
}
