<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Optvente
 *
 * @ORM\Table(name="OPTVENTE", indexes={@ORM\Index(name="OPTVENTE31", columns={"SEQVENTE"})})
 * @ORM\Entity
 */
class Optvente
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQOPTVENTE", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqoptvente;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVENTE", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     */
    private $codeprod = '';

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
     * @ORM\Column(name="PRIXACHAT", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prixachat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE", type="decimal", precision=9, scale=2, nullable=false)
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
     * @ORM\Column(name="ACTIVE", type="string", length=1, nullable=false)
     */
    private $active = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQOPTPROD", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqoptprod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTALITE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $totalite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seqcltexclu", type="string", length=6, nullable=false, options={"fixed"=true})
     */
    private $seqcltexclu = '';

    public function getSeqoptvente(): ?string
    {
        return $this->seqoptvente;
    }

    public function getSeqvente(): ?string
    {
        return $this->seqvente;
    }

    public function setSeqvente(string $seqvente): self
    {
        $this->seqvente = $seqvente;

        return $this;
    }

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function setCodeprod(string $codeprod): self
    {
        $this->codeprod = $codeprod;

        return $this;
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

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getSeqoptprod(): ?string
    {
        return $this->seqoptprod;
    }

    public function setSeqoptprod(string $seqoptprod): self
    {
        $this->seqoptprod = $seqoptprod;

        return $this;
    }

    public function getTotalite(): ?string
    {
        return $this->totalite;
    }

    public function setTotalite(string $totalite): self
    {
        $this->totalite = $totalite;

        return $this;
    }

    public function getSeqcltexclu(): ?string
    {
        return $this->seqcltexclu;
    }

    public function setSeqcltexclu(string $seqcltexclu): self
    {
        $this->seqcltexclu = $seqcltexclu;

        return $this;
    }


}
