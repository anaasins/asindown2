<?php

namespace controlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=true)
     */
    private $foto;

    //RELACIONES
   /**
     * @ORM\OneToMany(targetEntity="profesorCurso", mappedBy="profesor", cascade={"remove"})
     */
    protected $profesorCursos;
    public function __construct()
    {
        $this->profesorCursos = new ArrayCollection();
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
     * Add profesorCurso
     *
     * @param \controlBundle\Entity\profesorCurso $profesorCurso
     *
     * @return profesor
     */
    public function addProfesorCurso(\controlBundle\Entity\profesorCurso $profesorCurso)
    {
        $this->profesorCursos[] = $profesorCurso;

        return $this;
    }

    /**
     * Remove profesorCurso
     *
     * @param \controlBundle\Entity\profesorCurso $profesorCurso
     */
    public function removeProfesorCurso(\controlBundle\Entity\profesorCurso $profesorCurso)
    {
        $this->profesorCursos->removeElement($profesorCurso);
    }

    /**
     * Get profesorCursos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProfesorCursos()
    {
        return $this->profesorCursos;
    }
}
