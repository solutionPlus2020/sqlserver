<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achatfour
 *
 * @ORM\Table(name="ACHATFOUR")
 * @ORM\Entity
 */
class Achatfour
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQACHATFOUR", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqachatfour;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATVOL", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FOUVOL", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $fouvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATHOT", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achathot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FOUHOT", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $fouhot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATTRANS", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achattrans = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FOUTRANS", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $foutrans = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATASS", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatass = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FOUASS", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $fouass = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATAUTRE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatautre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FOUAUTRE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $fouautre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATCURE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatcure = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FOUCURE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $foucure = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="export", type="integer", nullable=false)
     */
    private $export = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comm_vp", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $commVp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achat_taxesolidarite", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatTaxesolidarite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achat_taxecarbu", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatTaxecarbu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achat_taxeaeroport", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatTaxeaeroport = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achat_empty", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatEmpty = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achat_prepost", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatPrepost = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achat_kappa", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $achatKappa = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="arret_dynamisme", type="integer", nullable=false)
     */
    private $arretDynamisme = '0';

    public function getSeqachatfour(): ?string
    {
        return $this->seqachatfour;
    }

    public function setSeqachatfour(string $seqachatfour): self
    {
        $this->seqachatfour = $seqachatfour;

        return $this;
    }

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function getAchatvol(): ?string
    {
        return $this->achatvol;
    }

    public function setAchatvol(string $achatvol): self
    {
        $this->achatvol = $achatvol;

        return $this;
    }

    public function getFouvol(): ?string
    {
        return $this->fouvol;
    }

    public function setFouvol(string $fouvol): self
    {
        $this->fouvol = $fouvol;

        return $this;
    }

    public function getAchathot(): ?string
    {
        return $this->achathot;
    }

    public function setAchathot(string $achathot): self
    {
        $this->achathot = $achathot;

        return $this;
    }

    public function getFouhot(): ?string
    {
        return $this->fouhot;
    }

    public function setFouhot(string $fouhot): self
    {
        $this->fouhot = $fouhot;

        return $this;
    }

    public function getAchattrans(): ?string
    {
        return $this->achattrans;
    }

    public function setAchattrans(string $achattrans): self
    {
        $this->achattrans = $achattrans;

        return $this;
    }

    public function getFoutrans(): ?string
    {
        return $this->foutrans;
    }

    public function setFoutrans(string $foutrans): self
    {
        $this->foutrans = $foutrans;

        return $this;
    }

    public function getAchatass(): ?string
    {
        return $this->achatass;
    }

    public function setAchatass(string $achatass): self
    {
        $this->achatass = $achatass;

        return $this;
    }

    public function getFouass(): ?string
    {
        return $this->fouass;
    }

    public function setFouass(string $fouass): self
    {
        $this->fouass = $fouass;

        return $this;
    }

    public function getAchatautre(): ?string
    {
        return $this->achatautre;
    }

    public function setAchatautre(string $achatautre): self
    {
        $this->achatautre = $achatautre;

        return $this;
    }

    public function getFouautre(): ?string
    {
        return $this->fouautre;
    }

    public function setFouautre(string $fouautre): self
    {
        $this->fouautre = $fouautre;

        return $this;
    }

    public function getAchatcure(): ?string
    {
        return $this->achatcure;
    }

    public function setAchatcure(string $achatcure): self
    {
        $this->achatcure = $achatcure;

        return $this;
    }

    public function getFoucure(): ?string
    {
        return $this->foucure;
    }

    public function setFoucure(string $foucure): self
    {
        $this->foucure = $foucure;

        return $this;
    }

    public function getExport(): ?int
    {
        return $this->export;
    }

    public function setExport(int $export): self
    {
        $this->export = $export;

        return $this;
    }

    public function getCommVp(): ?string
    {
        return $this->commVp;
    }

    public function setCommVp(string $commVp): self
    {
        $this->commVp = $commVp;

        return $this;
    }

    public function getAchatTaxesolidarite(): ?string
    {
        return $this->achatTaxesolidarite;
    }

    public function setAchatTaxesolidarite(string $achatTaxesolidarite): self
    {
        $this->achatTaxesolidarite = $achatTaxesolidarite;

        return $this;
    }

    public function getAchatTaxecarbu(): ?string
    {
        return $this->achatTaxecarbu;
    }

    public function setAchatTaxecarbu(string $achatTaxecarbu): self
    {
        $this->achatTaxecarbu = $achatTaxecarbu;

        return $this;
    }

    public function getAchatTaxeaeroport(): ?string
    {
        return $this->achatTaxeaeroport;
    }

    public function setAchatTaxeaeroport(string $achatTaxeaeroport): self
    {
        $this->achatTaxeaeroport = $achatTaxeaeroport;

        return $this;
    }

    public function getAchatEmpty(): ?string
    {
        return $this->achatEmpty;
    }

    public function setAchatEmpty(string $achatEmpty): self
    {
        $this->achatEmpty = $achatEmpty;

        return $this;
    }

    public function getAchatPrepost(): ?string
    {
        return $this->achatPrepost;
    }

    public function setAchatPrepost(string $achatPrepost): self
    {
        $this->achatPrepost = $achatPrepost;

        return $this;
    }

    public function getAchatKappa(): ?string
    {
        return $this->achatKappa;
    }

    public function setAchatKappa(string $achatKappa): self
    {
        $this->achatKappa = $achatKappa;

        return $this;
    }

    public function getArretDynamisme(): ?int
    {
        return $this->arretDynamisme;
    }

    public function setArretDynamisme(int $arretDynamisme): self
    {
        $this->arretDynamisme = $arretDynamisme;

        return $this;
    }


}
