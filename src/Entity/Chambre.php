<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="CHAMBRE", indexes={@ORM\Index(name="IDX_FA4C1AE5D6CCA38B", columns={"CODEPROD"})})
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCHAMBRE", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqchambre;

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
     * @ORM\Column(name="FREQUENCE", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $frequence = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $duree = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ALLOT1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $allot1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ALLOT2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $allot2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ALLOT3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $allot3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ALLOT4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $allot4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ALLOT5", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $allot5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ALLOT6", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $allot6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OUVERT1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OUVERT2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OUVERT3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OUVERT4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OUVERT5", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OUVERT6", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vendu1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vendu2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vendu3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vendu4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU5", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vendu5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU6", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $vendu6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBREJOUR", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbrejour = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBREPAX", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbrepax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_ALLOT1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bAllot1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_ALLOT2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bAllot2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_ALLOT3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bAllot3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_ALLOT4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bAllot4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_VENDU1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bVendu1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_VENDU2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bVendu2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_VENDU3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bVendu3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="B_VENDU4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bVendu4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ALLOT1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cAllot1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ALLOT2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cAllot2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ALLOT3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cAllot3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ALLOT4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cAllot4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_VENDU1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cVendu1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_VENDU2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cVendu2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_VENDU3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cVendu3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="C_VENDU4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $cVendu4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_ALLOT1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jAllot1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_ALLOT2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jAllot2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_ALLOT3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jAllot3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_ALLOT4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jAllot4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_VENDU1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jVendu1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_VENDU2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jVendu2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_VENDU3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jVendu3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="J_VENDU4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $jVendu4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_ALLOT1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sAllot1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_ALLOT2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sAllot2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_ALLOT3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sAllot3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_ALLOT4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sAllot4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_VENDU1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sVendu1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_VENDU2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sVendu2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_VENDU3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sVendu3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="S_VENDU4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sVendu4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTSTOCK", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $totstock = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $arrivee1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $arrivee2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $arrivee3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="arrivee4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $arrivee4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="depart1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $depart1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="depart2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $depart2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="depart3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $depart3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="depart4", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $depart4 = '0';

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

    public function getSeqchambre(): ?string
    {
        return $this->seqchambre;
    }

    public function setSeqchambre(string $seqchambre): self
    {
        $this->seqchambre = $seqchambre;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function getFrequence(): ?string
    {
        return $this->frequence;
    }

    public function setFrequence(string $frequence): self
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getAllot1(): ?string
    {
        return $this->allot1;
    }

    public function setAllot1(string $allot1): self
    {
        $this->allot1 = $allot1;

        return $this;
    }

    public function getAllot2(): ?string
    {
        return $this->allot2;
    }

    public function setAllot2(string $allot2): self
    {
        $this->allot2 = $allot2;

        return $this;
    }

    public function getAllot3(): ?string
    {
        return $this->allot3;
    }

    public function setAllot3(string $allot3): self
    {
        $this->allot3 = $allot3;

        return $this;
    }

    public function getAllot4(): ?string
    {
        return $this->allot4;
    }

    public function setAllot4(string $allot4): self
    {
        $this->allot4 = $allot4;

        return $this;
    }

    public function getAllot5(): ?string
    {
        return $this->allot5;
    }

    public function setAllot5(string $allot5): self
    {
        $this->allot5 = $allot5;

        return $this;
    }

    public function getAllot6(): ?string
    {
        return $this->allot6;
    }

    public function setAllot6(string $allot6): self
    {
        $this->allot6 = $allot6;

        return $this;
    }

    public function getOuvert1(): ?string
    {
        return $this->ouvert1;
    }

    public function setOuvert1(string $ouvert1): self
    {
        $this->ouvert1 = $ouvert1;

        return $this;
    }

    public function getOuvert2(): ?string
    {
        return $this->ouvert2;
    }

    public function setOuvert2(string $ouvert2): self
    {
        $this->ouvert2 = $ouvert2;

        return $this;
    }

    public function getOuvert3(): ?string
    {
        return $this->ouvert3;
    }

    public function setOuvert3(string $ouvert3): self
    {
        $this->ouvert3 = $ouvert3;

        return $this;
    }

    public function getOuvert4(): ?string
    {
        return $this->ouvert4;
    }

    public function setOuvert4(string $ouvert4): self
    {
        $this->ouvert4 = $ouvert4;

        return $this;
    }

    public function getOuvert5(): ?string
    {
        return $this->ouvert5;
    }

    public function setOuvert5(string $ouvert5): self
    {
        $this->ouvert5 = $ouvert5;

        return $this;
    }

    public function getOuvert6(): ?string
    {
        return $this->ouvert6;
    }

    public function setOuvert6(string $ouvert6): self
    {
        $this->ouvert6 = $ouvert6;

        return $this;
    }

    public function getVendu1(): ?string
    {
        return $this->vendu1;
    }

    public function setVendu1(string $vendu1): self
    {
        $this->vendu1 = $vendu1;

        return $this;
    }

    public function getVendu2(): ?string
    {
        return $this->vendu2;
    }

    public function setVendu2(string $vendu2): self
    {
        $this->vendu2 = $vendu2;

        return $this;
    }

    public function getVendu3(): ?string
    {
        return $this->vendu3;
    }

    public function setVendu3(string $vendu3): self
    {
        $this->vendu3 = $vendu3;

        return $this;
    }

    public function getVendu4(): ?string
    {
        return $this->vendu4;
    }

    public function setVendu4(string $vendu4): self
    {
        $this->vendu4 = $vendu4;

        return $this;
    }

    public function getVendu5(): ?string
    {
        return $this->vendu5;
    }

    public function setVendu5(string $vendu5): self
    {
        $this->vendu5 = $vendu5;

        return $this;
    }

    public function getVendu6(): ?string
    {
        return $this->vendu6;
    }

    public function setVendu6(string $vendu6): self
    {
        $this->vendu6 = $vendu6;

        return $this;
    }

    public function getNbrejour(): ?string
    {
        return $this->nbrejour;
    }

    public function setNbrejour(string $nbrejour): self
    {
        $this->nbrejour = $nbrejour;

        return $this;
    }

    public function getNbrepax(): ?string
    {
        return $this->nbrepax;
    }

    public function setNbrepax(string $nbrepax): self
    {
        $this->nbrepax = $nbrepax;

        return $this;
    }

    public function getBAllot1(): ?string
    {
        return $this->bAllot1;
    }

    public function setBAllot1(string $bAllot1): self
    {
        $this->bAllot1 = $bAllot1;

        return $this;
    }

    public function getBAllot2(): ?string
    {
        return $this->bAllot2;
    }

    public function setBAllot2(string $bAllot2): self
    {
        $this->bAllot2 = $bAllot2;

        return $this;
    }

    public function getBAllot3(): ?string
    {
        return $this->bAllot3;
    }

    public function setBAllot3(string $bAllot3): self
    {
        $this->bAllot3 = $bAllot3;

        return $this;
    }

    public function getBAllot4(): ?string
    {
        return $this->bAllot4;
    }

    public function setBAllot4(string $bAllot4): self
    {
        $this->bAllot4 = $bAllot4;

        return $this;
    }

    public function getBVendu1(): ?string
    {
        return $this->bVendu1;
    }

    public function setBVendu1(string $bVendu1): self
    {
        $this->bVendu1 = $bVendu1;

        return $this;
    }

    public function getBVendu2(): ?string
    {
        return $this->bVendu2;
    }

    public function setBVendu2(string $bVendu2): self
    {
        $this->bVendu2 = $bVendu2;

        return $this;
    }

    public function getBVendu3(): ?string
    {
        return $this->bVendu3;
    }

    public function setBVendu3(string $bVendu3): self
    {
        $this->bVendu3 = $bVendu3;

        return $this;
    }

    public function getBVendu4(): ?string
    {
        return $this->bVendu4;
    }

    public function setBVendu4(string $bVendu4): self
    {
        $this->bVendu4 = $bVendu4;

        return $this;
    }

    public function getCAllot1(): ?string
    {
        return $this->cAllot1;
    }

    public function setCAllot1(string $cAllot1): self
    {
        $this->cAllot1 = $cAllot1;

        return $this;
    }

    public function getCAllot2(): ?string
    {
        return $this->cAllot2;
    }

    public function setCAllot2(string $cAllot2): self
    {
        $this->cAllot2 = $cAllot2;

        return $this;
    }

    public function getCAllot3(): ?string
    {
        return $this->cAllot3;
    }

    public function setCAllot3(string $cAllot3): self
    {
        $this->cAllot3 = $cAllot3;

        return $this;
    }

    public function getCAllot4(): ?string
    {
        return $this->cAllot4;
    }

    public function setCAllot4(string $cAllot4): self
    {
        $this->cAllot4 = $cAllot4;

        return $this;
    }

    public function getCVendu1(): ?string
    {
        return $this->cVendu1;
    }

    public function setCVendu1(string $cVendu1): self
    {
        $this->cVendu1 = $cVendu1;

        return $this;
    }

    public function getCVendu2(): ?string
    {
        return $this->cVendu2;
    }

    public function setCVendu2(string $cVendu2): self
    {
        $this->cVendu2 = $cVendu2;

        return $this;
    }

    public function getCVendu3(): ?string
    {
        return $this->cVendu3;
    }

    public function setCVendu3(string $cVendu3): self
    {
        $this->cVendu3 = $cVendu3;

        return $this;
    }

    public function getCVendu4(): ?string
    {
        return $this->cVendu4;
    }

    public function setCVendu4(string $cVendu4): self
    {
        $this->cVendu4 = $cVendu4;

        return $this;
    }

    public function getJAllot1(): ?string
    {
        return $this->jAllot1;
    }

    public function setJAllot1(string $jAllot1): self
    {
        $this->jAllot1 = $jAllot1;

        return $this;
    }

    public function getJAllot2(): ?string
    {
        return $this->jAllot2;
    }

    public function setJAllot2(string $jAllot2): self
    {
        $this->jAllot2 = $jAllot2;

        return $this;
    }

    public function getJAllot3(): ?string
    {
        return $this->jAllot3;
    }

    public function setJAllot3(string $jAllot3): self
    {
        $this->jAllot3 = $jAllot3;

        return $this;
    }

    public function getJAllot4(): ?string
    {
        return $this->jAllot4;
    }

    public function setJAllot4(string $jAllot4): self
    {
        $this->jAllot4 = $jAllot4;

        return $this;
    }

    public function getJVendu1(): ?string
    {
        return $this->jVendu1;
    }

    public function setJVendu1(string $jVendu1): self
    {
        $this->jVendu1 = $jVendu1;

        return $this;
    }

    public function getJVendu2(): ?string
    {
        return $this->jVendu2;
    }

    public function setJVendu2(string $jVendu2): self
    {
        $this->jVendu2 = $jVendu2;

        return $this;
    }

    public function getJVendu3(): ?string
    {
        return $this->jVendu3;
    }

    public function setJVendu3(string $jVendu3): self
    {
        $this->jVendu3 = $jVendu3;

        return $this;
    }

    public function getJVendu4(): ?string
    {
        return $this->jVendu4;
    }

    public function setJVendu4(string $jVendu4): self
    {
        $this->jVendu4 = $jVendu4;

        return $this;
    }

    public function getSAllot1(): ?string
    {
        return $this->sAllot1;
    }

    public function setSAllot1(string $sAllot1): self
    {
        $this->sAllot1 = $sAllot1;

        return $this;
    }

    public function getSAllot2(): ?string
    {
        return $this->sAllot2;
    }

    public function setSAllot2(string $sAllot2): self
    {
        $this->sAllot2 = $sAllot2;

        return $this;
    }

    public function getSAllot3(): ?string
    {
        return $this->sAllot3;
    }

    public function setSAllot3(string $sAllot3): self
    {
        $this->sAllot3 = $sAllot3;

        return $this;
    }

    public function getSAllot4(): ?string
    {
        return $this->sAllot4;
    }

    public function setSAllot4(string $sAllot4): self
    {
        $this->sAllot4 = $sAllot4;

        return $this;
    }

    public function getSVendu1(): ?string
    {
        return $this->sVendu1;
    }

    public function setSVendu1(string $sVendu1): self
    {
        $this->sVendu1 = $sVendu1;

        return $this;
    }

    public function getSVendu2(): ?string
    {
        return $this->sVendu2;
    }

    public function setSVendu2(string $sVendu2): self
    {
        $this->sVendu2 = $sVendu2;

        return $this;
    }

    public function getSVendu3(): ?string
    {
        return $this->sVendu3;
    }

    public function setSVendu3(string $sVendu3): self
    {
        $this->sVendu3 = $sVendu3;

        return $this;
    }

    public function getSVendu4(): ?string
    {
        return $this->sVendu4;
    }

    public function setSVendu4(string $sVendu4): self
    {
        $this->sVendu4 = $sVendu4;

        return $this;
    }

    public function getTotstock(): ?string
    {
        return $this->totstock;
    }

    public function setTotstock(string $totstock): self
    {
        $this->totstock = $totstock;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getArrivee1(): ?string
    {
        return $this->arrivee1;
    }

    public function setArrivee1(string $arrivee1): self
    {
        $this->arrivee1 = $arrivee1;

        return $this;
    }

    public function getArrivee2(): ?string
    {
        return $this->arrivee2;
    }

    public function setArrivee2(string $arrivee2): self
    {
        $this->arrivee2 = $arrivee2;

        return $this;
    }

    public function getArrivee3(): ?string
    {
        return $this->arrivee3;
    }

    public function setArrivee3(string $arrivee3): self
    {
        $this->arrivee3 = $arrivee3;

        return $this;
    }

    public function getArrivee4(): ?string
    {
        return $this->arrivee4;
    }

    public function setArrivee4(string $arrivee4): self
    {
        $this->arrivee4 = $arrivee4;

        return $this;
    }

    public function getDepart1(): ?string
    {
        return $this->depart1;
    }

    public function setDepart1(string $depart1): self
    {
        $this->depart1 = $depart1;

        return $this;
    }

    public function getDepart2(): ?string
    {
        return $this->depart2;
    }

    public function setDepart2(string $depart2): self
    {
        $this->depart2 = $depart2;

        return $this;
    }

    public function getDepart3(): ?string
    {
        return $this->depart3;
    }

    public function setDepart3(string $depart3): self
    {
        $this->depart3 = $depart3;

        return $this;
    }

    public function getDepart4(): ?string
    {
        return $this->depart4;
    }

    public function setDepart4(string $depart4): self
    {
        $this->depart4 = $depart4;

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
