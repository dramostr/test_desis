<?php

namespace App\Entity;

use App\Repository\CandidatoRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

/**
 * @ORM\Table(name="candidatos")
 * @ORM\Entity(repositoryClass="CandidatoRepository")
 */
class Candidato
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $nombre;
    
    /**
     * @ORM\ManyToMany(targetEntity="Postulacion", mappedBy="candidatos")
     */
    private Collection $postulaciones;

    public function __construct()
    {
        $this->postulaciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
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

    public function addPostulaciones(Postulacion $postulacion): void
    {
        $this->postulaciones[] = $postulacion;
    }

}
