<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarif
 *
 * @ORM\Table(name="TARIF", indexes={@ORM\Index(name="IDX_F9254B79D6CCA38B", columns={"CODEPROD"})})
 * @ORM\Entity
 */
class Tarif
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQTARIF", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqtarif;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPETARIF", type="string", length=1, nullable=false)
     */
    private $typetarif = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datedebut = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TAUX", type="decimal", precision=7, scale=4, nullable=false)
     */
    private $taux = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $adachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADACHAT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $adachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADACHAT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $adachat3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADACHAT4", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $adachat4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $enfachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFACHAT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $enfachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFACHAT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $enfachat3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BBACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $bbachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADVENTE1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $advente1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADVENTE2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $advente2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADVENTE3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $advente3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ADVENTE4", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $advente4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFVENTE1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $enfvente1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFVENTE2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $enfvente2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFVENTE3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $enfvente3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BBVENTE1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $bbvente1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MARGE", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $marge = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST", type="string", length=80, nullable=false)
     */
    private $libprest = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PADACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $padachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PADACHAT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $padachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PADACHAT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $padachat3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PADACHAT4", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $padachat4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PENFACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $penfachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PENFACHAT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $penfachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PENFACHAT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $penfachat3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PBBACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $pbbachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ADACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoAdachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ADACHAT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoAdachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ADACHAT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoAdachat3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ADACHAT4", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoAdachat4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ENFACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoEnfachat1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ENFACHAT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoEnfachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_ENFACHAT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoEnfachat3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_BBACHAT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $promoBbachat1 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promo_datedebut", type="datetime", nullable=false)
     */
    private $promoDatedebut = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="promo_datefin", type="datetime", nullable=false)
     */
    private $promoDatefin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIB_TYPE_REDUCTION", type="string", length=30, nullable=false)
     */
    private $libTypeReduction = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TAUX_TYPE_REDUCTION", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $tauxTypeReduction = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prix_type_reduction", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prixTypeReduction = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ATRANSFERT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $atransfert = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VTRANSFERT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $vtransfert = '0';

    /**
     * @var \Produit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODEPROD", referencedColumnName="CODEPROD")
     * })
     */
    private $codeprod;

    public function getSeqtarif(): ?string
    {
        return $this->seqtarif;
    }

    public function setSeqtarif(string $seqtarif): self
    {
        $this->seqtarif = $seqtarif;

        return $this;
    }

    public function getTypetarif(): ?string
    {
        return $this->typetarif;
    }

    public function setTypetarif(string $typetarif): self
    {
        $this->typetarif = $typetarif;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function getTaux(): ?string
    {
        return $this->taux;
    }

    public function setTaux(string $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getAdachat1(): ?string
    {
        return $this->adachat1;
    }

    public function setAdachat1(string $adachat1): self
    {
        $this->adachat1 = $adachat1;

        return $this;
    }

    public function getAdachat2(): ?string
    {
        return $this->adachat2;
    }

    public function setAdachat2(string $adachat2): self
    {
        $this->adachat2 = $adachat2;

        return $this;
    }

    public function getAdachat3(): ?string
    {
        return $this->adachat3;
    }

    public function setAdachat3(string $adachat3): self
    {
        $this->adachat3 = $adachat3;

        return $this;
    }

    public function getAdachat4(): ?string
    {
        return $this->adachat4;
    }

    public function setAdachat4(string $adachat4): self
    {
        $this->adachat4 = $adachat4;

        return $this;
    }

    public function getEnfachat1(): ?string
    {
        return $this->enfachat1;
    }

    public function setEnfachat1(string $enfachat1): self
    {
        $this->enfachat1 = $enfachat1;

        return $this;
    }

    public function getEnfachat2(): ?string
    {
        return $this->enfachat2;
    }

    public function setEnfachat2(string $enfachat2): self
    {
        $this->enfachat2 = $enfachat2;

        return $this;
    }

    public function getEnfachat3(): ?string
    {
        return $this->enfachat3;
    }

    public function setEnfachat3(string $enfachat3): self
    {
        $this->enfachat3 = $enfachat3;

        return $this;
    }

    public function getBbachat1(): ?string
    {
        return $this->bbachat1;
    }

    public function setBbachat1(string $bbachat1): self
    {
        $this->bbachat1 = $bbachat1;

        return $this;
    }

    public function getAdvente1(): ?string
    {
        return $this->advente1;
    }

    public function setAdvente1(string $advente1): self
    {
        $this->advente1 = $advente1;

        return $this;
    }

    public function getAdvente2(): ?string
    {
        return $this->advente2;
    }

    public function setAdvente2(string $advente2): self
    {
        $this->advente2 = $advente2;

        return $this;
    }

    public function getAdvente3(): ?string
    {
        return $this->advente3;
    }

    public function setAdvente3(string $advente3): self
    {
        $this->advente3 = $advente3;

        return $this;
    }

    public function getAdvente4(): ?string
    {
        return $this->advente4;
    }

    public function setAdvente4(string $advente4): self
    {
        $this->advente4 = $advente4;

        return $this;
    }

    public function getEnfvente1(): ?string
    {
        return $this->enfvente1;
    }

    public function setEnfvente1(string $enfvente1): self
    {
        $this->enfvente1 = $enfvente1;

        return $this;
    }

    public function getEnfvente2(): ?string
    {
        return $this->enfvente2;
    }

    public function setEnfvente2(string $enfvente2): self
    {
        $this->enfvente2 = $enfvente2;

        return $this;
    }

    public function getEnfvente3(): ?string
    {
        return $this->enfvente3;
    }

    public function setEnfvente3(string $enfvente3): self
    {
        $this->enfvente3 = $enfvente3;

        return $this;
    }

    public function getBbvente1(): ?string
    {
        return $this->bbvente1;
    }

    public function setBbvente1(string $bbvente1): self
    {
        $this->bbvente1 = $bbvente1;

        return $this;
    }

    public function getMarge(): ?string
    {
        return $this->marge;
    }

    public function setMarge(string $marge): self
    {
        $this->marge = $marge;

        return $this;
    }

    public function getLibprest(): ?string
    {
        return $this->libprest;
    }

    public function setLibprest(string $libprest): self
    {
        $this->libprest = $libprest;

        return $this;
    }

    public function getPadachat1(): ?string
    {
        return $this->padachat1;
    }

    public function setPadachat1(string $padachat1): self
    {
        $this->padachat1 = $padachat1;

        return $this;
    }

    public function getPadachat2(): ?string
    {
        return $this->padachat2;
    }

    public function setPadachat2(string $padachat2): self
    {
        $this->padachat2 = $padachat2;

        return $this;
    }

    public function getPadachat3(): ?string
    {
        return $this->padachat3;
    }

    public function setPadachat3(string $padachat3): self
    {
        $this->padachat3 = $padachat3;

        return $this;
    }

    public function getPadachat4(): ?string
    {
        return $this->padachat4;
    }

    public function setPadachat4(string $padachat4): self
    {
        $this->padachat4 = $padachat4;

        return $this;
    }

    public function getPenfachat1(): ?string
    {
        return $this->penfachat1;
    }

    public function setPenfachat1(string $penfachat1): self
    {
        $this->penfachat1 = $penfachat1;

        return $this;
    }

    public function getPenfachat2(): ?string
    {
        return $this->penfachat2;
    }

    public function setPenfachat2(string $penfachat2): self
    {
        $this->penfachat2 = $penfachat2;

        return $this;
    }

    public function getPenfachat3(): ?string
    {
        return $this->penfachat3;
    }

    public function setPenfachat3(string $penfachat3): self
    {
        $this->penfachat3 = $penfachat3;

        return $this;
    }

    public function getPbbachat1(): ?string
    {
        return $this->pbbachat1;
    }

    public function setPbbachat1(string $pbbachat1): self
    {
        $this->pbbachat1 = $pbbachat1;

        return $this;
    }

    public function getPromoAdachat1(): ?string
    {
        return $this->promoAdachat1;
    }

    public function setPromoAdachat1(string $promoAdachat1): self
    {
        $this->promoAdachat1 = $promoAdachat1;

        return $this;
    }

    public function getPromoAdachat2(): ?string
    {
        return $this->promoAdachat2;
    }

    public function setPromoAdachat2(string $promoAdachat2): self
    {
        $this->promoAdachat2 = $promoAdachat2;

        return $this;
    }

    public function getPromoAdachat3(): ?string
    {
        return $this->promoAdachat3;
    }

    public function setPromoAdachat3(string $promoAdachat3): self
    {
        $this->promoAdachat3 = $promoAdachat3;

        return $this;
    }

    public function getPromoAdachat4(): ?string
    {
        return $this->promoAdachat4;
    }

    public function setPromoAdachat4(string $promoAdachat4): self
    {
        $this->promoAdachat4 = $promoAdachat4;

        return $this;
    }

    public function getPromoEnfachat1(): ?string
    {
        return $this->promoEnfachat1;
    }

    public function setPromoEnfachat1(string $promoEnfachat1): self
    {
        $this->promoEnfachat1 = $promoEnfachat1;

        return $this;
    }

    public function getPromoEnfachat2(): ?string
    {
        return $this->promoEnfachat2;
    }

    public function setPromoEnfachat2(string $promoEnfachat2): self
    {
        $this->promoEnfachat2 = $promoEnfachat2;

        return $this;
    }

    public function getPromoEnfachat3(): ?string
    {
        return $this->promoEnfachat3;
    }

    public function setPromoEnfachat3(string $promoEnfachat3): self
    {
        $this->promoEnfachat3 = $promoEnfachat3;

        return $this;
    }

    public function getPromoBbachat1(): ?string
    {
        return $this->promoBbachat1;
    }

    public function setPromoBbachat1(string $promoBbachat1): self
    {
        $this->promoBbachat1 = $promoBbachat1;

        return $this;
    }

    public function getPromoDatedebut(): ?\DateTimeInterface
    {
        return $this->promoDatedebut;
    }

    public function setPromoDatedebut(\DateTimeInterface $promoDatedebut): self
    {
        $this->promoDatedebut = $promoDatedebut;

        return $this;
    }

    public function getPromoDatefin(): ?\DateTimeInterface
    {
        return $this->promoDatefin;
    }

    public function setPromoDatefin(\DateTimeInterface $promoDatefin): self
    {
        $this->promoDatefin = $promoDatefin;

        return $this;
    }

    public function getLibTypeReduction(): ?string
    {
        return $this->libTypeReduction;
    }

    public function setLibTypeReduction(string $libTypeReduction): self
    {
        $this->libTypeReduction = $libTypeReduction;

        return $this;
    }

    public function getTauxTypeReduction(): ?string
    {
        return $this->tauxTypeReduction;
    }

    public function setTauxTypeReduction(string $tauxTypeReduction): self
    {
        $this->tauxTypeReduction = $tauxTypeReduction;

        return $this;
    }

    public function getPrixTypeReduction(): ?string
    {
        return $this->prixTypeReduction;
    }

    public function setPrixTypeReduction(string $prixTypeReduction): self
    {
        $this->prixTypeReduction = $prixTypeReduction;

        return $this;
    }

    public function getAtransfert(): ?string
    {
        return $this->atransfert;
    }

    public function setAtransfert(string $atransfert): self
    {
        $this->atransfert = $atransfert;

        return $this;
    }

    public function getVtransfert(): ?string
    {
        return $this->vtransfert;
    }

    public function setVtransfert(string $vtransfert): self
    {
        $this->vtransfert = $vtransfert;

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
