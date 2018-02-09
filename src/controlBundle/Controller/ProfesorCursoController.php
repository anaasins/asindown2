<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\profesor;
use controlBundle\Form\profesorType;
use controlBundle\Entity\curso;
use controlBundle\Form\cursoType;
use controlBundle\Entity\profesorCurso;
use controlBundle\Form\profesorCursoType;
use controlBundle\Form\profesorCambiarCursoType;
use Symfony\Component\HttpFoundation\Request;

class ProfesorCursoController extends Controller
{
  /**
     * @Route("admin/nuevoProfesorCursos/{id}", name="nuevoProfesorCursos")
     */
     public function nuevoProfesorCursos(Request $request, $id)
    {
      $profesor=$this->getDoctrine()->getRepository(profesor::class)->find($id);
      $form = $this->createForm(profesorCambiarCursoType::class, $profesor);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $profesor = $form->getData();
        $profesorCursos=$profesor->getProfesorCursos();
        $em = $this->getDoctrine()->getManager();
        foreach ($profesorCursos as $profesorCurso) {
          $profesorCurso->setProfesor($profesor);
          $em->persist($profesorCurso);
        }
        $em->persist($profesor);
        $em->flush();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
      }
      return $this->render('profesorCurso/nuevoProfesorCurso.html.twig',array('form'=>$form->createView()));
    }
}
