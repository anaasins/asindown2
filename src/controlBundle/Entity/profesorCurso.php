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
     * @ORM\ManyToOne(targetEntity="curso", inversedBy="cursoProfesores")
     * @ORM\JoinColumn(name="cursoProfesor_id", referencedColumnName="id")
     */
    protected $curso;
    /**
     * @ORM\ManyToOne(targetEntity="profesor", inversedBy="profesorCursos")
     * @ORM\JoinColumn(name="profesorCurso_id", referencedColumnName="id")
     */
    protected $profesor;

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

    /**
     * Set curso
     *
     * @param \controlBundle\Entity\curso $curso
     *
     * @return profesorCurso
     */
    public function setCurso(\controlBundle\Entity\curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \controlBundle\Entity\curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set profesor
     *
     * @param \controlBundle\Entity\profesor $profesor
     *
     * @return profesorCurso
     */
    public function setProfesor(\controlBundle\Entity\profesor $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \controlBundle\Entity\profesor
     */
    public function getProfesor()
    {
        return $this->profesor;
    }
}
