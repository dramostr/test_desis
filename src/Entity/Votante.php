<?php

namespace App\Entity;

use App\Repository\VotanteRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

/**
 * @ORM\Table(name="votantes")
 * @ORM\Entity(repositoryClass="VotanteRepository")
 */
class Votante
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
    private $nombreCompleto;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $alias;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $rut;

    /**
     * @ORM\Column(type="string",nullable=false)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="Comuna")
     * @ORM\JoinColumn(name="comuna_id", referencedColumnName="id")
     */
    private $comuna;

    public function __construct(){

    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    public function setNombreCompleto(string $nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;
    }

    public function getAlias()
    {
        return $this->alias;
    }

    public function setAlias(string $alias)
    {
        $this->alias = $alias;
    }
    
    public function getRut()
    {
        return $this->rut;
    }

    public function setRut(string $rut)
    {
        $this->rut = $rut;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    
    public function getComuna()
    {
        return $this->comuna;
    }

    public function setComuna(Comuna $comuna)
    {
        $this->comuna = $comuna;
    }


}
