<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reglement
 *
 * @ORM\Table(name="REGLEMENT")
 * @ORM\Entity
 */
class Reglement
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQREGLE", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqregle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEREGLE", type="datetime", nullable=false)
     */
    private $dateregle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $seqfact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=4, nullable=false)
     */
    private $seqclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCLT", type="string", length=30, nullable=false)
     */
    private $nomclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQBORD", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqbord = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $montant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RESTE", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $reste = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEREGLE", type="string", length=30, nullable=false)
     */
    private $typeregle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REFREGLE", type="string", length=30, nullable=false)
     */
    private $refregle = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEECHEANCE", type="datetime", nullable=false)
     */
    private $dateecheance = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQUE", type="string", length=30, nullable=false)
     */
    private $banque = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VALIDITE", type="string", length=5, nullable=false)
     */
    private $validite = '';

    /**
     * @var string
     *
     * @ORM\Column(name="vendeur", type="string", length=20, nullable=false)
     */
    private $vendeur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTA", type="string", length=1, nullable=false)
     */
    private $compta = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECOMPTA", type="datetime", nullable=false)
     */
    private $datecompta = '';

    public function getSeqregle(): ?string
    {
        return $this->seqregle;
    }

    public function getDateregle(): ?\DateTimeInterface
    {
        return $this->dateregle;
    }

    public function setDateregle(\DateTimeInterface $dateregle): self
    {
        $this->dateregle = $dateregle;

        return $this;
    }

    public function getSeqfact(): ?string
    {
        return $this->seqfact;
    }

    public function setSeqfact(string $seqfact): self
    {
        $this->seqfact = $seqfact;

        return $this;
    }

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function setSeqresa(string $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function setSeqclt(string $seqclt): self
    {
        $this->seqclt = $seqclt;

        return $this;
    }

    public function getNomclt(): ?string
    {
        return $this->nomclt;
    }

    public function setNomclt(string $nomclt): self
    {
        $this->nomclt = $nomclt;

        return $this;
    }

    public function getSeqbord(): ?string
    {
        return $this->seqbord;
    }

    public function setSeqbord(string $seqbord): self
    {
        $this->seqbord = $seqbord;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getReste(): ?string
    {
        return $this->reste;
    }

    public function setReste(string $reste): self
    {
        $this->reste = $reste;

        return $this;
    }

    public function getTyperegle(): ?string
    {
        return $this->typeregle;
    }

    public function setTyperegle(string $typeregle): self
    {
        $this->typeregle = $typeregle;

        return $this;
    }

    public function getRefregle(): ?string
    {
        return $this->refregle;
    }

    public function setRefregle(string $refregle): self
    {
        $this->refregle = $refregle;

        return $this;
    }

    public function getDateecheance(): ?\DateTimeInterface
    {
        return $this->dateecheance;
    }

    public function setDateecheance(\DateTimeInterface $dateecheance): self
    {
        $this->dateecheance = $dateecheance;

        return $this;
    }

    public function getBanque(): ?string
    {
        return $this->banque;
    }

    public function setBanque(string $banque): self
    {
        $this->banque = $banque;

        return $this;
    }

    public function getValidite(): ?string
    {
        return $this->validite;
    }

    public function setValidite(string $validite): self
    {
        $this->validite = $validite;

        return $this;
    }

    public function getVendeur(): ?string
    {
        return $this->vendeur;
    }

    public function setVendeur(string $vendeur): self
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    public function getCompta(): ?string
    {
        return $this->compta;
    }

    public function setCompta(string $compta): self
    {
        $this->compta = $compta;

        return $this;
    }

    public function getDatecompta(): ?\DateTimeInterface
    {
        return $this->datecompta;
    }

    public function setDatecompta(\DateTimeInterface $datecompta): self
    {
        $this->datecompta = $datecompta;

        return $this;
    }


}
