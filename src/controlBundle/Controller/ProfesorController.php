<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use controlBundle\Entity\profesor;
use controlBundle\Form\profesorType;
use Symfony\Component\HttpFoundation\Response;

class ProfesorController extends Controller
{
   /**
   * @Route("/listaprofesores", name="listaprofesores")
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
  * @Route("/id/{id}", name="id")
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
     * @Route("/nuevoProfesor", name="nuevoProfesor")
     */
    public function nuevoProfesorAction(Request $request)
    {
      $profesores = new profesor();
      $form = $this->createForm(profesorType::class, $profesores);

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
       $profesor = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($profesor);
        $em->flush();

       return $this->redirectToRoute('index');
   }
        return $this->render('profesores/nuevoProfesor.html.twig', array('form'=>$form->createView()));
    }

    /**
     * @Route("/editarProfesor/{id}" , name="editarProfesor")
     */
    public function editarprofesorAction(Request $request, $id)
    {
      $profesor=$this->getDoctrine()->getRepository(profesor::class)->find($id);

      $form=$this->createForm(profesorType::class, $profesor);
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
     * @Route("/eliminarprofesor/{id}", name="eliminarprofesor")
     */
    public function eliminarprofesorAction($id)
    {
      $db=$this->getDoctrine()->getManager();
      $eliminar = $db ->getRepository(profesor::class)->find($id);
      $db->remove($eliminar);
      $db->flush();
        return $this->redirectToRoute('listaprofesores');
    }

}
