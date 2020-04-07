<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passfact
 *
 * @ORM\Table(name="PASSFACT", indexes={@ORM\Index(name="PASSFACT35", columns={"SEQFACT"})})
 * @ORM\Entity
 */
class Passfact
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQPASSFACT", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqpassfact;

    /**
     * @var string
     *
     * @ORM\Column(name="ORDRE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ordre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="GENRE", type="string", length=4, nullable=false)
     */
    private $genre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=40, nullable=false)
     */
    private $nom = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATENAISS", type="datetime", nullable=false)
     */
    private $datenaiss = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPRESTPROD", type="string", length=50, nullable=false)
     */
    private $libprestprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ASSURE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $assure = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ETICKET", type="string", length=12, nullable=false)
     */
    private $eticket = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=80, nullable=false, options={"fixed"=true})
     */
    private $prenom = '';

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQFACT", referencedColumnName="SEQFACT")
     * })
     */
    private $seqfact;

    public function getSeqpassfact(): ?string
    {
        return $this->seqpassfact;
    }

    public function getOrdre(): ?string
    {
        return $this->ordre;
    }

    public function setOrdre(string $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getLibprestprod(): ?string
    {
        return $this->libprestprod;
    }

    public function setLibprestprod(string $libprestprod): self
    {
        $this->libprestprod = $libprestprod;

        return $this;
    }

    public function getAssure(): ?string
    {
        return $this->assure;
    }

    public function setAssure(string $assure): self
    {
        $this->assure = $assure;

        return $this;
    }

    public function getEticket(): ?string
    {
        return $this->eticket;
    }

    public function setEticket(string $eticket): self
    {
        $this->eticket = $eticket;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSeqfact(): ?Facture
    {
        return $this->seqfact;
    }

    public function setSeqfact(?Facture $seqfact): self
    {
        $this->seqfact = $seqfact;

        return $this;
    }


}
