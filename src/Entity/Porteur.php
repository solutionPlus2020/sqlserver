<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Porteur
 *
 * @ORM\Table(name="PORTEUR")
 * @ORM\Entity
 */
class Porteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQPORTEUR", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPORTEUR", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libporteur = '';

    public function getSeqporteur(): ?string
    {
        return $this->seqporteur;
    }

    public function setSeqporteur(string $seqporteur): self
    {
        $this->seqporteur = $seqporteur;

        return $this;
    }

    public function getLibporteur(): ?string
    {
        return $this->libporteur;
    }


}
