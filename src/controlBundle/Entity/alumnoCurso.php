<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * alumnoCurso
 *
 * @ORM\Table(name="alumno_curso")
 * @ORM\Entity(repositoryClass="controlBundle\Repository\alumnoCursoRepository")
 */
class alumnoCurso
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
     * @var alumno
     *
     * @ORM\ManyToOne(targetEntity="alumno", inversedBy="cursos",cascade={"persist"})
     * @ORM\JoinColumn(name="alumnos", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $alumnos;


    /**
     * @var curso
     *
     * @ORM\ManyToOne(targetEntity="curso", inversedBy="alumnos",cascade={"persist"})
     * @ORM\JoinColumn(name="cursos", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $cursos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="matricula", type="date")
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="asignaturasAprobadas", type="string", length=255)
     */
    private $asignaturasAprobadas;


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
     * Set matricula
     *
     * @param \DateTime $matricula
     *
     * @return alumnoCurso
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return \DateTime
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set asignaturasAprobadas
     *
     * @param string $asignaturasAprobadas
     *
     * @return alumnoCurso
     */
    public function setAsignaturasAprobadas($asignaturasAprobadas)
    {
        $this->asignaturasAprobadas = $asignaturasAprobadas;

        return $this;
    }

    /**
     * Get asignaturasAprobadas
     *
     * @return string
     */
    public function getAsignaturasAprobadas()
    {
        return $this->asignaturasAprobadas;
    }

    /**
     * Set alumno.
     *
     * @param int $alumno
     *
     * @return alumnoCurso
     */
    public function setAlumno($alumno)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno.
     *
     * @return int
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set curso.
     *
     * @param int $curso
     *
     * @return alumnoCurso
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso.
     *
     * @return int
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set cursos
     *
     * @param \controlBundle\Entity\curso $cursos
     *
     * @return alumnoCurso
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
     * Set alumnos
     *
     * @param \controlBundle\Entity\alumno $alumnos
     *
     * @return alumnoCurso
     */
    public function setAlumnos(\controlBundle\Entity\alumno $alumnos = null)
    {
        $this->alumnos = $alumnos;

        return $this;
    }

    /**
     * Get alumnos
     *
     * @return \controlBundle\Entity\alumno
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}
