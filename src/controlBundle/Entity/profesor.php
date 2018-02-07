<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity(repositoryClass="controlBundle\Repository\profesorRepository")
 */
class profesor
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var profesorCurso[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="profesorCurso", mappedBy="profesores",cascade={"all"}, orphanRemoval=true)
     */
    protected $cursos;
    public function __construct()
    {
        $this->cursos = new ArrayCollection();
    }


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return profesor
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos.
     *
     * @param string $apellidos
     *
     * @return profesor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos.
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set foto.
     *
     * @param string $foto
     *
     * @return profesor
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto.
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Add curso
     *
     * @param \controlBundle\Entity\profesorCurso $curso
     *
     * @return profesor
     */
    public function addCurso(\controlBundle\Entity\profesorCurso $curso)
    {
        $this->cursos[] = $curso;

        return $this;
    }

    /**
     * Remove curso
     *
     * @param \controlBundle\Entity\profesorCurso $curso
     */
    public function removeCurso(\controlBundle\Entity\profesorCurso $curso)
    {
        $this->cursos->removeElement($curso);
    }

    /**
     * Get cursos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCursos()
    {
        return $this->cursos;
    }
}
