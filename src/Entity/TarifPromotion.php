<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarifPromotion
 *
 * @ORM\Table(name="TARIF_PROMOTION")
 * @ORM\Entity
 */
class TarifPromotion
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
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeprod = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datedebut = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUTRESA", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datedebutresa = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFINRESA", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datefinresa = '';

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
     * @ORM\Column(name="ADACHAT5", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $adachat5 = '0';

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
     * @ORM\Column(name="ADVENTE5", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $advente5 = '0';

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
     * @ORM\Column(name="commentaire_tarif", type="string", length=800, nullable=false)
     */
    private $commentaireTarif = '';

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

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function getDatedebutresa(): ?\DateTimeInterface
    {
        return $this->datedebutresa;
    }

    public function getDatefinresa(): ?\DateTimeInterface
    {
        return $this->datefinresa;
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

    public function getAdachat5(): ?string
    {
        return $this->adachat5;
    }

    public function setAdachat5(string $adachat5): self
    {
        $this->adachat5 = $adachat5;

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

    public function getAdvente5(): ?string
    {
        return $this->advente5;
    }

    public function setAdvente5(string $advente5): self
    {
        $this->advente5 = $advente5;

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

    public function getCommentaireTarif(): ?string
    {
        return $this->commentaireTarif;
    }

    public function setCommentaireTarif(string $commentaireTarif): self
    {
        $this->commentaireTarif = $commentaireTarif;

        return $this;
    }


}
