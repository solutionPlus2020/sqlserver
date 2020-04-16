<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDebut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function setDateDebut( $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }
}
