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
     * @Route("/varios/historial")
     */
    public function historialAction()
    {
        return $this->render('alumnos/historial.html.twig');
    }

    /**
     * @Route("/varios/alumnosActivos" , name="listaAlumnosActivos")
     */
    public function alumnosActivos()
    {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(alumno::class);
      // find *all* alumnos
      $alumnos = $repository->findByActivo(1);
      return $this->render('alumnos/tablaAlumnoActivo.html.twig',array("alumno"=>$alumnos));
    }

    /**
     * @Route("/varios/alumnosInactivos" , name="listaAlumnosInactivos")
     */
    public function alumnosInactivos()
    {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(alumno::class);
      // find *all* alumnos
      $alumnos = $repository->findByActivo(0);
      return $this->render('alumnos/tablaAlumnoInactivo.html.twig',array("alumno"=>$alumnos));
    }

    /**
    * @Route("/varios/tabla/{id}", name="alumnoid")
    */
    public function alumnoidAction($id){
        $repository = $this->getDoctrine()->getRepository(alumno::class);
        // find *id* alumno
        $alumno = $repository->findOneById($id);
          if(!$alumno){
            return $this->render('profesores/error.html.twig');
          }
          // hacer para que si esta vacio cuando llegue a id.twig
          return $this->render('alumnos/historial.html.twig',array("alumnoID"=>$alumno));
      }

    /**
     * @Route("/admin/nuevoAlumno", name="nuevoAlumno")
     */
     public function nuevoAlumnoAction(Request $request,$id=null)
      {
        $urlFoto="";
        if($id==null){
          $alumnos = new alumno();
        }else{
          $em = $this->getDoctrine()->getManager();
          $alumnos = $em->getRepository(alumno::class)->find($id);
          $urlFoto=$alumnos->getFotoUsuario();
          $alumnos->setFotoUsuario(null);
        }
        $form = $this->createForm(alumnoType::class, $alumnos);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $alumnos = $form->getData();
          // $file stores the uploaded PDF file
          /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
          $fotoFile = $alumnos->getFotoUsuario();
          // Generate a unique name for the file before saving it
          $fotoFileName = md5(uniqid()).'.'.$fotoFile->guessExtension();
          // Move the file to the directory where brochures are stored
          $fotoFile->move(
              $this->getParameter('foto_directory'),
              $fotoFileName
          );
          // Update the 'brochure' property to store the PDF file name
          // instead of its contents
          $alumnos->setFotoUsuario($fotoFileName);
          $em = $this->getDoctrine()->getManager();
          $em->persist($alumnos);
          $em->flush();
          return $this->redirectToRoute('index');
        }
        return $this->render('alumnos/nuevoAlumno.html.twig',array('form'=>$form->createView(),'urlFoto'=>$urlFoto));
      }

    /**
     * @Route("/admin/editarAlumno/{id}" , name="editarAlumno")
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

         return $this->redirectToRoute('listaAlumnosActivos');
       }

      return $this-> render('alumnos/editarAlumno.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/admin/eliminarAlumno/{id}", name="eliminarAlumno")
     */
    public function eliminarAlumnoAction($id)
    {
      $db=$this->getDoctrine()->getManager();
      $eliminar = $db ->getRepository(alumno::class)->find($id);
      $db->remove($eliminar);
      $db->flush();
        return $this->redirectToRoute('listaAlumnosActivos');
    }

    /**
     * @Route("/admin/desactivarAlumno/{id}", name="desactivarAlumno")
     */
    public function updateAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $alumno = $em->getRepository(alumno::class)->find($id);

      $alumno->setActivo(false);
      $em->flush();

      return $this->redirectToRoute('listaAlumnosActivos');
    }
}
