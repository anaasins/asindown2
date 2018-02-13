<?php

namespace controlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use controlBundle\Entity\alumno;
use controlBundle\Form\alumnoType;
use controlBundle\Entity\curso;
use controlBundle\Form\cursoType;
use controlBundle\Entity\alumnoCurso;
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
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
      }
      return $this->render('alumnosCursos/nuevoAlumnoCurso.html.twig',array('form'=>$form->createView()));
    }

    /**
     * @Route("/varios/alumnosPorCurso" , name="alumnosPorCurso")
     */
    public function alumnosPorCursoActivos()
    {
      // replace this example code with whatever you need
      $repository = $this->getDoctrine()->getRepository(alumnoCurso::class);
      // find *all* alumnos
      $alumnos = $repository->findByCurso(5);
      return $this->render('alumnosCursos/tablaAlumnosCurso.html.twig',array("alumno"=>$alumnos));
    }
}
