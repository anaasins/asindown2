<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use controlBundle\Entity\profesor;
use controlBundle\Form\profesorType;
use controlBundle\Form\editarProfesorType;
use Symfony\Component\HttpFoundation\Response;

class ProfesorController extends Controller
{
   /**
   * @Route("/varios/listaprofesores", name="listaprofesores")
   */
  public function listaprofesores(Request $request)
  {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(profesor::class);
      // find *all* profesores
      $prof = $repository->findAll();
      return $this->render('profesores/profesores.html.twig',array("prof"=>$prof));
  }
  /**
  * @Route("/varios/id/{id}", name="id")
  */
  public function idAction($id){
      $repository = $this->getDoctrine()->getRepository('controlBundle:profesor');
      // find *id* profesor
      $prof = $repository->findOneById($id);
        if(!$prof){
          return $this->render('profesores/error.html.twig');
        }
        // hacer para que si esta vacio cuando llegue a id.twig
        return $this->render('profesores/id.html.twig',array("prof"=>$prof));
    }

    /**
     * @Route("/admin/nuevoProfesor", name="nuevoProfesor")
     */
    public function nuevoProfesorAction(Request $request, $id=null)
    {
      $urlFoto="";
      if($id==null){
        $profesores = new profesor();
      }else{
        $em = $this->getDoctrine()->getManager();
        $profesores = $em->getRepository(profesor::class)->find($id);
        $urlFoto=$profesores->getFoto();
        $profesores->setFoto(null);
      }
      $form = $this->createForm(profesorType::class, $profesores);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $profesores = $form->getData();
        // $file stores the uploaded PDF file
        /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
        $fotoFile = $profesores->getFoto();
        // Generate a unique name for the file before saving it
        $fotoFileName = md5(uniqid()).'.'.$fotoFile->guessExtension();
        // Move the file to the directory where brochures are stored
        $fotoFile->move(
            $this->getParameter('foto_directory'),
            $fotoFileName
        );
        // Update the 'brochure' property to store the PDF file name
        // instead of its contents
        $profesores->setFoto($fotoFileName);
        $em = $this->getDoctrine()->getManager();
        $em->persist($profesores);
        $em->flush();
        return $this->redirectToRoute('listaprofesores');
      }
      return $this->render('profesores/nuevoProfesor.html.twig',array('form'=>$form->createView(),'urlFoto'=>$urlFoto));
    }

    /**
     * @Route("/admin/editarProfesor/{id}" , name="editarProfesor")
     */
    public function editarprofesorAction(Request $request, $id)
    {
      $profesor=$this->getDoctrine()->getRepository(profesor::class)->find($id);

      $form=$this->createForm(editarProfesorType::class, $profesor);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {

         $em = $this->getDoctrine()->getManager();
         $em->persist($profesor);
         $em->flush();

         return $this->redirectToRoute('listaprofesores');
       }

      return $this-> render('profesores/editarprofesor.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/admin/eliminarprofesor/{id}", name="eliminarprofesor")
     */
    public function eliminarprofesorAction($id)
    {
      $db=$this->getDoctrine()->getManager();
      $eliminar = $db ->getRepository(profesor::class)->find($id);
      $db->remove($eliminar);
      $db->flush();
        return $this->redirectToRoute('listaprofesores');
    }

    /**
    * @Route("/varios/historialProf/{id}", name="historialProf")
    */
    public function historialProfAction($id){
        $repository = $this->getDoctrine()->getRepository(profesor::class);
        // find *id* pofe
        $prof = $repository->findOneById($id);
          if(!$prof){
            return $this->render('profesores/error.html.twig');
          }
          // hacer para que si esta vacio cuando llegue a id.twig
          return $this->render('profesores/historialProf.html.twig',array("profeID"=>$prof));
      }

}
