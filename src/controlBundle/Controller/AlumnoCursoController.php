<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\alumno;
use controlBundle\Form\alumnoType;
use controlBundle\Entity\curso;
use controlBundle\Form\cursoType;
use controlBundle\Entity\alumnoCurso;
use controlBundle\Entity\profesor;
use controlBundle\Entity\profesorCurso;
use controlBundle\Form\alumnoCursoType;
use controlBundle\Form\alumnoCambiarCursoType;
use Symfony\Component\HttpFoundation\Request;

class AlumnoCursoController extends Controller
{
  /**
     * @Route("admin/nuevoAlumnoCursos/{id}", name="nuevoAlumnoCursos")
     */
     public function nuevoAlumnoCursos(Request $request, $id)
    {
      $alumno=$this->getDoctrine()->getRepository(alumno::class)->find($id);
      $form = $this->createForm(alumnoCambiarCursoType::class, $alumno);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $alumno = $form->getData();
        $alumnoCursos=$alumno->getAlumnoCursos();
        $em = $this->getDoctrine()->getManager();
        foreach ($alumnoCursos as $alumnoCurso) {
          $alumnoCurso->setAlumno($alumno);
          $em->persist($alumnoCurso);
        }
        $em->persist($alumno);
        $em->flush();
        // replace this example code with whatever you need
        return $this->redirectToRoute('listaAlumnosActivos');
      }
      return $this->render('alumnosCursos/nuevoAlumnoCurso.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/varios/gentePorCurso/{id}" , name="gentePorCurso")
     */
    public function gentePorCursoActivos($id)
    {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(alumnoCurso::class);
      // find *all* alumnos
      $alumnos = $repository->findByCurso($id);
      // replace this example code with whatever you need
      $repository2 = $this->getDoctrine()->getRepository(profesorCurso::class);
      // find *all* profesores
      $profesores = $repository2->findByCurso($id);
      return $this->render('cursos/tablaGenteCurso.html.twig',array("uno" => array("alumno"=>$alumnos), "dos" => array("profesor"=>$profesores)));
    }
}
