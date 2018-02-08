<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\curso;
use controlBundle\Form\cursoType;
use Symfony\Component\HttpFoundation\Request;

class CursoController extends Controller
{
  /**
   * @Route("/nuevoCurso", name="nuevoCurso")
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

     return $this->redirectToRoute('index');
 }
      return $this->render('cursos/nuevoCurso.html.twig', array('form'=>$form->createView()));
  }
}
