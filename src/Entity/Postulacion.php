<?php

namespace App\Entity;

use App\Repository\PostulacionRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

/**
 * @ORM\Table(name="postulaciones")
 * @ORM\Entity(repositoryClass="PostulacionRepository")
 */
class Postulacion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $nombre;

    /**
     * @ORM\ManyToMany(targetEntity="Candidato", inversedBy="postulaciones")
     * @ORM\JoinTable(
     *      name="postulacion_candidatos",
     *      joinColumns={
     *          @ORM\JoinColumn(name="postulacion_id", referencedColumnName="id")
     *      },
     *      inverseJoinColumns={
     *          @ORM\JoinColumn(name="candidato_id", referencedColumnName="id")
     *      }
     * )
     */
    private $candidatos;

    public function __construct()
    {
        $this->candidatos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(?int $id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCandidatos()
    {
        return $this->candidatos;
    }

    public function setCandidatos(string $candidatos)
    {
        $this->candidatos = $candidatos;
    }

    public function addCandidatos(Candidato $candidato)
    {
        $candidato->addPostulaciones($this);
        $this->candidatos[] = $candidato;
    }

}
