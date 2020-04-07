<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromotionHotel
 *
 * @ORM\Table(name="PROMOTION_HOTEL")
 * @ORM\Entity
 */
class PromotionHotel
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQ_PROMOTION_HOTEL", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqPromotionHotel;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=6, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD", type="string", length=50, nullable=false)
     */
    private $libprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEPROMOTION", type="string", length=15, nullable=false)
     */
    private $typepromotion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXACHAT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixachat = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="DATED", type="datetime", nullable=false)
     */
    private $dated = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATER", type="datetime", nullable=false)
     */
    private $dater = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEREFERENCE", type="string", length=15, nullable=false)
     */
    private $codereference = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prixvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AFFICHAGE_RESA", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $affichageResa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBCATEGCHAMBREPRODUIT", type="string", length=55, nullable=false)
     */
    private $libcategchambreproduit = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBTYPECHAMBRE", type="string", length=30, nullable=false)
     */
    private $libtypechambre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="APPLICABLE", type="string", length=50, nullable=false)
     */
    private $applicable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MINISTAY", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ministay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MAXISTAY", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $maxistay = '0';

    public function getSeqPromotionHotel(): ?string
    {
        return $this->seqPromotionHotel;
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

    public function getTypepromotion(): ?string
    {
        return $this->typepromotion;
    }

    public function setTypepromotion(string $typepromotion): self
    {
        $this->typepromotion = $typepromotion;

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

    public function getDated(): ?\DateTimeInterface
    {
        return $this->dated;
    }

    public function setDated(\DateTimeInterface $dated): self
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDater(): ?\DateTimeInterface
    {
        return $this->dater;
    }

    public function setDater(\DateTimeInterface $dater): self
    {
        $this->dater = $dater;

        return $this;
    }

    public function getCodereference(): ?string
    {
        return $this->codereference;
    }

    public function setCodereference(string $codereference): self
    {
        $this->codereference = $codereference;

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

    public function getAffichageResa(): ?string
    {
        return $this->affichageResa;
    }

    public function setAffichageResa(string $affichageResa): self
    {
        $this->affichageResa = $affichageResa;

        return $this;
    }

    public function getLibcategchambreproduit(): ?string
    {
        return $this->libcategchambreproduit;
    }

    public function setLibcategchambreproduit(string $libcategchambreproduit): self
    {
        $this->libcategchambreproduit = $libcategchambreproduit;

        return $this;
    }

    public function getLibtypechambre(): ?string
    {
        return $this->libtypechambre;
    }

    public function setLibtypechambre(string $libtypechambre): self
    {
        $this->libtypechambre = $libtypechambre;

        return $this;
    }

    public function getApplicable(): ?string
    {
        return $this->applicable;
    }

    public function setApplicable(string $applicable): self
    {
        $this->applicable = $applicable;

        return $this;
    }

    public function getMinistay(): ?string
    {
        return $this->ministay;
    }

    public function setMinistay(string $ministay): self
    {
        $this->ministay = $ministay;

        return $this;
    }

    public function getMaxistay(): ?string
    {
        return $this->maxistay;
    }

    public function setMaxistay(string $maxistay): self
    {
        $this->maxistay = $maxistay;

        return $this;
    }


}
