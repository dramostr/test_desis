<?php

namespace App\Entity;

use App\Repository\VotoRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use \DateTime;

/**
 * @ORM\Table(name="votos")
 * @ORM\Entity(repositoryClass="VotoRepository")
 */
class Voto
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="datetime",nullable=false)
     */
    private $fechaVotacion;

    /**
     * @ORM\ManyToOne(targetEntity="Votante")
     * @ORM\JoinColumn(name="votante_id", referencedColumnName="id")
     */
    private $votante;

    /**
     * @ORM\ManyToOne(targetEntity="Candidato")
     * @ORM\JoinColumn(name="candidato_id", referencedColumnName="id")
     */
    private $candidato;

    public function __construct(){
        $this->fechaVotacion = new DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getFechaVotacion()
    {
        return $this->fechaVotacion;
    }

    public function setFechaVotacion(DateTime $fechaVotacion)
    {
        $this->fechaVotacion = $fechaVotacion;
    }

    public function getVotante()
    {
        return $this->votante;
    }

    public function setVotante(Votante $votante)
    {
        $this->votante = $votante;
    }
    
    public function getCandidato()
    {
        return $this->candidato;
    }

    public function setCandidato(Candidato $candidato)
    {
        $this->candidato = $candidato;
    }
}