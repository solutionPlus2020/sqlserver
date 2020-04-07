<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligvente
 *
 * @ORM\Table(name="LIGVENTE", indexes={@ORM\Index(name="IDX_61221D54D696B521", columns={"SEQVENTE"})})
 * @ORM\Entity
 */
class Ligvente
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQLIGVENTE", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqligvente;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEPROD", type="string", length=1, nullable=false)
     */
    private $typeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD", type="string", length=60, nullable=false)
     */
    private $libprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NUITEE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nuitee = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTREE", type="datetime", nullable=false)
     */
    private $entree = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SORTIE", type="datetime", nullable=false)
     */
    private $sortie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ADACHAT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $adachat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $advente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ORDRE", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $ordre = '0';

    /**
     * @var \Vente
     *
     * @ORM\ManyToOne(targetEntity="Vente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQVENTE", referencedColumnName="SEQVENTE")
     * })
     */
    private $seqvente;

    public function getSeqligvente(): ?string
    {
        return $this->seqligvente;
    }

    public function getTypeprod(): ?string
    {
        return $this->typeprod;
    }

    public function setTypeprod(string $typeprod): self
    {
        $this->typeprod = $typeprod;

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

    public function getLibprod(): ?string
    {
        return $this->libprod;
    }

    public function setLibprod(string $libprod): self
    {
        $this->libprod = $libprod;

        return $this;
    }

    public function getNuitee(): ?string
    {
        return $this->nuitee;
    }

    public function setNuitee(string $nuitee): self
    {
        $this->nuitee = $nuitee;

        return $this;
    }

    public function getEntree(): ?\DateTimeInterface
    {
        return $this->entree;
    }

    public function setEntree(\DateTimeInterface $entree): self
    {
        $this->entree = $entree;

        return $this;
    }

    public function getSortie(): ?\DateTimeInterface
    {
        return $this->sortie;
    }

    public function setSortie(\DateTimeInterface $sortie): self
    {
        $this->sortie = $sortie;

        return $this;
    }

    public function getAdachat(): ?string
    {
        return $this->adachat;
    }

    public function setAdachat(string $adachat): self
    {
        $this->adachat = $adachat;

        return $this;
    }

    public function getAdvente(): ?string
    {
        return $this->advente;
    }

    public function setAdvente(string $advente): self
    {
        $this->advente = $advente;

        return $this;
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

    public function getSeqvente(): ?Vente
    {
        return $this->seqvente;
    }

    public function setSeqvente(?Vente $seqvente): self
    {
        $this->seqvente = $seqvente;

        return $this;
    }


}
