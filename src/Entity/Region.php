<?php

namespace App\Entity;

use App\Repository\RegionRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

/**
 * @ORM\Table(name="regiones")
 * @ORM\Entity(repositoryClass="RegionRepository")
 */
class Region
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
     * @ORM\Column(type="string",nullable=false)
     */
    private $numerificacion;

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

    public function getNumerificacion()
    {
        return $this->nombre;
    }

    public function setNumerificacion(string $numerificacion)
    {
        $this->numerificacion = $numerificacion;
    }

}
