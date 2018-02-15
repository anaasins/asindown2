<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\curso;
use controlBundle\Form\cursoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CursoController extends Controller
{
  /**
  * @Route("/varios/listarCursos", name="listarCursos")
  */
  public function listarCursos(Request $request)
  {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(curso::class);
      // find *all* cursos
      $curso = $repository->findAll();
      return $this->render('cursos/listarCursos.html.twig',array("curso"=>$curso));
  }

  /**
   * @Route("/admin/nuevoCurso", name="nuevoCurso")
   */
  public function nuevoCursoAction(Request $request)
  {
    $cursos = new curso();
    $form = $this->createForm(cursoType::class, $cursos);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
     $curso = $form->getData();
      $em = $this->getDoctrine()->getManager();
      $em->persist($curso);
      $em->flush();

     return $this->redirectToRoute('listarCursos');
 }
      return $this->render('cursos/nuevoCurso.html.twig', array('form'=>$form->createView()));
  }

  /**
  * @Route("/admin/eliminarCurso/{id}", name="eliminarCurso")
  */
  public function eliminarCursoAction($id)
  {
      $DB = $this->getDoctrine()->getManager();

      $eliminar = $DB->getRepository('controlBundle:curso')->find($id);

      if (!$eliminar) {
          // throw $this->createNotFoundException('No se ha encontrado el id: '.$id);
          return $this->render('controlBundle:cursos:error.html.twig');
      }
      $DB->remove($eliminar);
      $DB->flush();

      return $this->redirectToRoute('listarCursos');
    }

     /**
    * @Route("/admin/cursoActualizar/{id}", name="cursoActualizar")
    */
    public function cursoActualizarAction(Request $request,$id)
    {

      $curso = $this->getDoctrine()->getRepository('controlBundle:curso')->find($id);

        if(!$curso){return $this->redirectToRoute('error');}
        $form = $this->createForm(\controlBundle\Form\cursoType::class, $curso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $DB = $this->getDoctrine()->getManager();
            $DB->persist($curso);
            $DB->flush();
            return $this->redirectToRoute('listarCursos');
        }
        return $this->render("cursos/cursoActualizar.html.twig", array('form'=>$form->createView() ));
    }


    /**
    * @Route("/error", name="error")
    */
    public function errorAction()
    {
        return $this->render('controlBundle:cursos:error.html.twig');
    }

}
