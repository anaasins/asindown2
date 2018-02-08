<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * profesorCurso
 *
 * @ORM\Table(name="profesor_curso")
 * @ORM\Entity(repositoryClass="controlBundle\Repository\profesorCursoRepository")
 */
class profesorCurso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var profesor
     *
     * @ORM\ManyToOne(targetEntity="profesor", inversedBy="cursos",cascade={"persist"})
     * @ORM\JoinColumn(name="profesores", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $profesores;


    /**
     * @var curso
     *
     * @ORM\ManyToOne(targetEntity="curso", inversedBy="alumnos",cascade={"persist"})
     * @ORM\JoinColumn(name="cursos", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $cursos;


    /**
     * @var int
     *
     * @ORM\Column(name="anyoImpartido", type="integer")
     */
    private $anyoImpartido;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set curso
     *
     * @param integer $curso
     *
     * @return profesorCurso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return int
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set profesor
     *
     * @param integer $profesor
     *
     * @return profesorCurso
     */
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return int
     */
    public function getProfesor()
    {
        return $this->profesor;
    }

    /**
     * Set anyoImpartido
     *
     * @param integer $anyoImpartido
     *
     * @return profesorCurso
     */
    public function setAnyoImpartido($anyoImpartido)
    {
        $this->anyoImpartido = $anyoImpartido;

        return $this;
    }

    /**
     * Get anyoImpartido
     *
     * @return int
     */
    public function getAnyoImpartido()
    {
        return $this->anyoImpartido;
    }

    /**
     * Set profesores
     *
     * @param \controlBundle\Entity\profesor $profesores
     *
     * @return profesorCurso
     */
    public function setProfesores(\controlBundle\Entity\profesor $profesores = null)
    {
        $this->profesores = $profesores;

        return $this;
    }

    /**
     * Get profesores
     *
     * @return \controlBundle\Entity\profesor
     */
    public function getProfesores()
    {
        return $this->profesores;
    }

    /**
     * Set cursos
     *
     * @param \controlBundle\Entity\curso $cursos
     *
     * @return profesorCurso
     */
    public function setCursos(\controlBundle\Entity\curso $cursos = null)
    {
        $this->cursos = $cursos;

        return $this;
    }

    /**
     * Get cursos
     *
     * @return \controlBundle\Entity\curso
     */
    public function getCursos()
    {
        return $this->cursos;
    }
}