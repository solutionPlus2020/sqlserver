<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Optprod
 *
 * @ORM\Table(name="OPTPROD", indexes={@ORM\Index(name="IDX_4C57982DD6CCA38B", columns={"CODEPROD"})})
 * @ORM\Entity
 */
class Optprod
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEQOPTPROD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqoptprod;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPRESTPROD", type="string", length=4, nullable=false)
     */
    private $codeprestprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPRESTPROD", type="string", length=50, nullable=false)
     */
    private $libprestprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXACHAT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixachat = '0';

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
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seqclt_exclu", type="string", length=6, nullable=false)
     */
    private $seqcltExclu = '';

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODEPROD", referencedColumnName="CODEPROD")
     * })
     */
    private $codeprod;

    public function getSeqoptprod(): ?int
    {
        return $this->seqoptprod;
    }

    public function getCodeprestprod(): ?string
    {
        return $this->codeprestprod;
    }

    public function setCodeprestprod(string $codeprestprod): self
    {
        $this->codeprestprod = $codeprestprod;

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

    public function getPrixachat(): ?string
    {
        return $this->prixachat;
    }

    public function setPrixachat(string $prixachat): self
    {
        $this->prixachat = $prixachat;

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

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getSeqcltExclu(): ?string
    {
        return $this->seqcltExclu;
    }

    public function setSeqcltExclu(string $seqcltExclu): self
    {
        $this->seqcltExclu = $seqcltExclu;

        return $this;
    }

    public function getCodeprod(): ?Produit
    {
        return $this->codeprod;
    }

    public function setCodeprod(?Produit $codeprod): self
    {
        $this->codeprod = $codeprod;

        return $this;
    }


}
