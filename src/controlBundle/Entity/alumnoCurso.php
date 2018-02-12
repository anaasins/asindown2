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
     * @ORM\ManyToOne(targetEntity="curso", inversedBy="cursoAlumnos", cascade={"remove"})
     * @ORM\JoinColumn(name="cursoAlumno_id", referencedColumnName="id")
     */
    protected $curso;
    /**
     * @ORM\ManyToOne(targetEntity="alumno", inversedBy="alumnoCursos", cascade={"remove"})
     * @ORM\JoinColumn(name="alumnoCurso_id", referencedColumnName="id")
     */
    protected $alumno;

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
     * Set curso
     *
     * @param \controlBundle\Entity\curso $curso
     *
     * @return alumnoCurso
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
     * Set alumno
     *
     * @param \controlBundle\Entity\alumno $alumno
     *
     * @return alumnoCurso
     */
    public function setAlumno(\controlBundle\Entity\alumno $alumno = null)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \controlBundle\Entity\alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }
}
