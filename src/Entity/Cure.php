<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cure
 *
 * @ORM\Table(name="CURE")
 * @ORM\Entity
 */
class Cure
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCURE", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqcure;

    /**
     * @var string
     *
     * @ORM\Column(name="CODECURE", type="string", length=5, nullable=false)
     */
    private $codecure = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODECURISTE", type="string", length=4, nullable=false)
     */
    private $codecuriste = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBCURE", type="string", length=50, nullable=false)
     */
    private $libcure = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixvente = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=false)
     */
    private $datedebut = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFIN", type="datetime", nullable=false)
     */
    private $datefin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Nouveau", type="string", length=4, nullable=false)
     */
    private $nouveau = '';

    public function getSeqcure(): ?string
    {
        return $this->seqcure;
    }

    public function getCodecure(): ?string
    {
        return $this->codecure;
    }

    public function setCodecure(string $codecure): self
    {
        $this->codecure = $codecure;

        return $this;
    }

    public function getCodecuriste(): ?string
    {
        return $this->codecuriste;
    }

    public function setCodecuriste(string $codecuriste): self
    {
        $this->codecuriste = $codecuriste;

        return $this;
    }

    public function getLibcure(): ?string
    {
        return $this->libcure;
    }

    public function setLibcure(string $libcure): self
    {
        $this->libcure = $libcure;

        return $this;
    }

    public function getPrixvente(): ?string
    {
        return $this->prixvente;
    }

    public function setPrixvente(string $prixvente): self
    {
        $this->prixvente = $prixvente;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getNouveau(): ?string
    {
        return $this->nouveau;
    }

    public function setNouveau(string $nouveau): self
    {
        $this->nouveau = $nouveau;

        return $this;
    }


}
