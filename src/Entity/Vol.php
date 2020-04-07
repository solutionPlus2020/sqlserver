<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vol
 *
 * @ORM\Table(name="VOL", indexes={@ORM\Index(name="VOL43", columns={"SEQVOL", "VILLED", "SG", "VENDU", "RESERVE"}), @ORM\Index(name="SeqVolVilleD", columns={"SG", "VENDU", "RESERVE", "TAXEVENTE", "CARTEVENTE", "FICTIF", "SEQVOL", "VILLED"})})
 * @ORM\Entity
 */
class Vol
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOL", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqvol;

    /**
     * @var string
     *
     * @ORM\Column(name="NVOL", type="string", length=8, nullable=false)
     */
    private $nvol = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEVOL", type="datetime", nullable=false)
     */
    private $datevol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="JO", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $jo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="JPLUS", type="string", length=2, nullable=false)
     */
    private $jplus = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLED", type="string", length=3, nullable=false)
     */
    private $villed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEURED", type="string", length=4, nullable=false)
     */
    private $heured = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLEA", type="string", length=3, nullable=false)
     */
    private $villea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEUREA", type="string", length=4, nullable=false)
     */
    private $heurea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLEV", type="string", length=3, nullable=false)
     */
    private $villev = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEVOL", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $typevol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KILOS", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $kilos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODAFFRET", type="string", length=3, nullable=false)
     */
    private $codaffret = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SG", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $vendu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RESERVE", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $reserve = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXADA", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixada = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXZZA", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixzza = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXBBA", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixbba = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXEA", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxea = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXADV", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixadv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXZZV", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixzzv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXBBV", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixbbv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXADV2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixadv2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXZZV2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixzzv2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXBBV2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixbbv2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUPP1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $supp1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUPP2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $supp2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXEVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxevente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CARTEVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $cartevente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXESOVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxesovente = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECONVO", type="datetime", nullable=false)
     */
    private $dateconvo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEURECONVO", type="string", length=4, nullable=false)
     */
    private $heureconvo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIEUCONVO", type="string", length=30, nullable=false)
     */
    private $lieuconvo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTOIR", type="string", length=50, nullable=false)
     */
    private $comptoir = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PORTE", type="string", length=50, nullable=false)
     */
    private $porte = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AGENCE", type="string", length=30, nullable=false)
     */
    private $agence = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FORMFORF", type="string", length=30, nullable=false)
     */
    private $formforf = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FORMSEC", type="string", length=30, nullable=false)
     */
    private $formsec = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECONF", type="datetime", nullable=false)
     */
    private $dateconf = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDECONF", type="datetime", nullable=false)
     */
    private $datedeconf = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FREESALE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $freesale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ASSVOL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $assvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ouvert", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ouvert = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="taxea2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxea2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="autres", type="string", length=35, nullable=false)
     */
    private $autres = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COAF", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $coaf = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUPPVOL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $suppvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="coafv", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $coafv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stopsale", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $stopsale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VOLSEC", type="decimal", precision=1, scale=0, nullable=false, options={"comment"="Autorisé vol sec internet"})
     */
    private $volsec = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DESTINATION", type="string", length=35, nullable=false)
     */
    private $destination = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FICTIF", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $fictif = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ARCHIVER", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $archiver = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPAGNIE", type="string", length=20, nullable=false)
     */
    private $compagnie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEAVION", type="string", length=20, nullable=false)
     */
    private $typeavion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $lien = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXESOLIDARITE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxesolidarite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMFOUR", type="string", length=50, nullable=false)
     */
    private $nomfour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXADV3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixadv3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXZZV3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixzzv3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXBBV3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixbbv3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="blocsiege", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $blocsiege = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ferry", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $ferry = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="semaine1", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $semaine1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="allot_freesale", type="integer", nullable=false)
     */
    private $allotFreesale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PNR", type="string", length=6, nullable=false, options={"fixed"=true})
     */
    private $pnr = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="DispoNouvelAir", type="boolean", nullable=false)
     */
    private $disponouvelair = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTransportAxe", type="string", length=20, nullable=false)
     */
    private $codetransportaxe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NVOL2", type="string", length=10, nullable=false)
     */
    private $nvol2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prix_yield", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prixYield = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="aerod", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $aerod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="aeroa", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $aeroa = '';

    /**
     * @var int
     *
     * @ORM\Column(name="pas_afficher_horaire", type="smallint", nullable=false)
     */
    private $pasAfficherHoraire = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="RETRO_VOL", type="smallint", nullable=false)
     */
    private $retroVol = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="KILOBEBE", type="integer", nullable=false)
     */
    private $kilobebe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="BAGAGESOUTE", type="integer", nullable=false)
     */
    private $bagagesoute = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AERODEP", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $aerodep = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AEROARR", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $aeroarr = '';

    public function getSeqvol(): ?string
    {
        return $this->seqvol;
    }

    public function getNvol(): ?string
    {
        return $this->nvol;
    }

    public function setNvol(string $nvol): self
    {
        $this->nvol = $nvol;

        return $this;
    }

    public function getDatevol(): ?\DateTimeInterface
    {
        return $this->datevol;
    }

    public function setDatevol(\DateTimeInterface $datevol): self
    {
        $this->datevol = $datevol;

        return $this;
    }

    public function getJo(): ?string
    {
        return $this->jo;
    }

    public function setJo(string $jo): self
    {
        $this->jo = $jo;

        return $this;
    }

    public function getJplus(): ?string
    {
        return $this->jplus;
    }

    public function setJplus(string $jplus): self
    {
        $this->jplus = $jplus;

        return $this;
    }

    public function getVilled(): ?string
    {
        return $this->villed;
    }

    public function setVilled(string $villed): self
    {
        $this->villed = $villed;

        return $this;
    }

    public function getHeured(): ?string
    {
        return $this->heured;
    }

    public function setHeured(string $heured): self
    {
        $this->heured = $heured;

        return $this;
    }

    public function getVillea(): ?string
    {
        return $this->villea;
    }

    public function setVillea(string $villea): self
    {
        $this->villea = $villea;

        return $this;
    }

    public function getHeurea(): ?string
    {
        return $this->heurea;
    }

    public function setHeurea(string $heurea): self
    {
        $this->heurea = $heurea;

        return $this;
    }

    public function getVillev(): ?string
    {
        return $this->villev;
    }

    public function setVillev(string $villev): self
    {
        $this->villev = $villev;

        return $this;
    }

    public function getTypevol(): ?string
    {
        return $this->typevol;
    }

    public function setTypevol(string $typevol): self
    {
        $this->typevol = $typevol;

        return $this;
    }

    public function getKilos(): ?string
    {
        return $this->kilos;
    }

    public function setKilos(string $kilos): self
    {
        $this->kilos = $kilos;

        return $this;
    }

    public function getCodaffret(): ?string
    {
        return $this->codaffret;
    }

    public function setCodaffret(string $codaffret): self
    {
        $this->codaffret = $codaffret;

        return $this;
    }

    public function getSg(): ?string
    {
        return $this->sg;
    }

    public function setSg(string $sg): self
    {
        $this->sg = $sg;

        return $this;
    }

    public function getVendu(): ?string
    {
        return $this->vendu;
    }

    public function setVendu(string $vendu): self
    {
        $this->vendu = $vendu;

        return $this;
    }

    public function getReserve(): ?string
    {
        return $this->reserve;
    }

    public function setReserve(string $reserve): self
    {
        $this->reserve = $reserve;

        return $this;
    }

    public function getPrixada(): ?string
    {
        return $this->prixada;
    }

    public function setPrixada(string $prixada): self
    {
        $this->prixada = $prixada;

        return $this;
    }

    public function getPrixzza(): ?string
    {
        return $this->prixzza;
    }

    public function setPrixzza(string $prixzza): self
    {
        $this->prixzza = $prixzza;

        return $this;
    }

    public function getPrixbba(): ?string
    {
        return $this->prixbba;
    }

    public function setPrixbba(string $prixbba): self
    {
        $this->prixbba = $prixbba;

        return $this;
    }

    public function getTaxea(): ?string
    {
        return $this->taxea;
    }

    public function setTaxea(string $taxea): self
    {
        $this->taxea = $taxea;

        return $this;
    }

    public function getPrixadv(): ?string
    {
        return $this->prixadv;
    }

    public function setPrixadv(string $prixadv): self
    {
        $this->prixadv = $prixadv;

        return $this;
    }

    public function getPrixzzv(): ?string
    {
        return $this->prixzzv;
    }

    public function setPrixzzv(string $prixzzv): self
    {
        $this->prixzzv = $prixzzv;

        return $this;
    }

    public function getPrixbbv(): ?string
    {
        return $this->prixbbv;
    }

    public function setPrixbbv(string $prixbbv): self
    {
        $this->prixbbv = $prixbbv;

        return $this;
    }

    public function getPrixadv2(): ?string
    {
        return $this->prixadv2;
    }

    public function setPrixadv2(string $prixadv2): self
    {
        $this->prixadv2 = $prixadv2;

        return $this;
    }

    public function getPrixzzv2(): ?string
    {
        return $this->prixzzv2;
    }

    public function setPrixzzv2(string $prixzzv2): self
    {
        $this->prixzzv2 = $prixzzv2;

        return $this;
    }

    public function getPrixbbv2(): ?string
    {
        return $this->prixbbv2;
    }

    public function setPrixbbv2(string $prixbbv2): self
    {
        $this->prixbbv2 = $prixbbv2;

        return $this;
    }

    public function getSupp1(): ?string
    {
        return $this->supp1;
    }

    public function setSupp1(string $supp1): self
    {
        $this->supp1 = $supp1;

        return $this;
    }

    public function getSupp2(): ?string
    {
        return $this->supp2;
    }

    public function setSupp2(string $supp2): self
    {
        $this->supp2 = $supp2;

        return $this;
    }

    public function getTaxevente(): ?string
    {
        return $this->taxevente;
    }

    public function setTaxevente(string $taxevente): self
    {
        $this->taxevente = $taxevente;

        return $this;
    }

    public function getCartevente(): ?string
    {
        return $this->cartevente;
    }

    public function setCartevente(string $cartevente): self
    {
        $this->cartevente = $cartevente;

        return $this;
    }

    public function getTaxesovente(): ?string
    {
        return $this->taxesovente;
    }

    public function setTaxesovente(string $taxesovente): self
    {
        $this->taxesovente = $taxesovente;

        return $this;
    }

    public function getDateconvo(): ?\DateTimeInterface
    {
        return $this->dateconvo;
    }

    public function setDateconvo(\DateTimeInterface $dateconvo): self
    {
        $this->dateconvo = $dateconvo;

        return $this;
    }

    public function getHeureconvo(): ?string
    {
        return $this->heureconvo;
    }

    public function setHeureconvo(string $heureconvo): self
    {
        $this->heureconvo = $heureconvo;

        return $this;
    }

    public function getLieuconvo(): ?string
    {
        return $this->lieuconvo;
    }

    public function setLieuconvo(string $lieuconvo): self
    {
        $this->lieuconvo = $lieuconvo;

        return $this;
    }

    public function getComptoir(): ?string
    {
        return $this->comptoir;
    }

    public function setComptoir(string $comptoir): self
    {
        $this->comptoir = $comptoir;

        return $this;
    }

    public function getPorte(): ?string
    {
        return $this->porte;
    }

    public function setPorte(string $porte): self
    {
        $this->porte = $porte;

        return $this;
    }

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(string $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    public function getFormforf(): ?string
    {
        return $this->formforf;
    }

    public function setFormforf(string $formforf): self
    {
        $this->formforf = $formforf;

        return $this;
    }

    public function getFormsec(): ?string
    {
        return $this->formsec;
    }

    public function setFormsec(string $formsec): self
    {
        $this->formsec = $formsec;

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

    public function getDateconf(): ?\DateTimeInterface
    {
        return $this->dateconf;
    }

    public function setDateconf(\DateTimeInterface $dateconf): self
    {
        $this->dateconf = $dateconf;

        return $this;
    }

    public function getDatedeconf(): ?\DateTimeInterface
    {
        return $this->datedeconf;
    }

    public function setDatedeconf(\DateTimeInterface $datedeconf): self
    {
        $this->datedeconf = $datedeconf;

        return $this;
    }

    public function getFreesale(): ?string
    {
        return $this->freesale;
    }

    public function setFreesale(string $freesale): self
    {
        $this->freesale = $freesale;

        return $this;
    }

    public function getAssvol(): ?string
    {
        return $this->assvol;
    }

    public function setAssvol(string $assvol): self
    {
        $this->assvol = $assvol;

        return $this;
    }

    public function getOuvert(): ?string
    {
        return $this->ouvert;
    }

    public function setOuvert(string $ouvert): self
    {
        $this->ouvert = $ouvert;

        return $this;
    }

    public function getTaxea2(): ?string
    {
        return $this->taxea2;
    }

    public function setTaxea2(string $taxea2): self
    {
        $this->taxea2 = $taxea2;

        return $this;
    }

    public function getAutres(): ?string
    {
        return $this->autres;
    }

    public function setAutres(string $autres): self
    {
        $this->autres = $autres;

        return $this;
    }

    public function getCoaf(): ?string
    {
        return $this->coaf;
    }

    public function setCoaf(string $coaf): self
    {
        $this->coaf = $coaf;

        return $this;
    }

    public function getSuppvol(): ?string
    {
        return $this->suppvol;
    }

    public function setSuppvol(string $suppvol): self
    {
        $this->suppvol = $suppvol;

        return $this;
    }

    public function getCoafv(): ?string
    {
        return $this->coafv;
    }

    public function setCoafv(string $coafv): self
    {
        $this->coafv = $coafv;

        return $this;
    }

    public function getStopsale(): ?string
    {
        return $this->stopsale;
    }

    public function setStopsale(string $stopsale): self
    {
        $this->stopsale = $stopsale;

        return $this;
    }

    public function getVolsec(): ?string
    {
        return $this->volsec;
    }

    public function setVolsec(string $volsec): self
    {
        $this->volsec = $volsec;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getFictif(): ?string
    {
        return $this->fictif;
    }

    public function setFictif(string $fictif): self
    {
        $this->fictif = $fictif;

        return $this;
    }

    public function getArchiver(): ?string
    {
        return $this->archiver;
    }

    public function setArchiver(string $archiver): self
    {
        $this->archiver = $archiver;

        return $this;
    }

    public function getCompagnie(): ?string
    {
        return $this->compagnie;
    }

    public function setCompagnie(string $compagnie): self
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    public function getTypeavion(): ?string
    {
        return $this->typeavion;
    }

    public function setTypeavion(string $typeavion): self
    {
        $this->typeavion = $typeavion;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getTaxesolidarite(): ?string
    {
        return $this->taxesolidarite;
    }

    public function setTaxesolidarite(string $taxesolidarite): self
    {
        $this->taxesolidarite = $taxesolidarite;

        return $this;
    }

    public function getNomfour(): ?string
    {
        return $this->nomfour;
    }

    public function setNomfour(string $nomfour): self
    {
        $this->nomfour = $nomfour;

        return $this;
    }

    public function getPrixadv3(): ?string
    {
        return $this->prixadv3;
    }

    public function setPrixadv3(string $prixadv3): self
    {
        $this->prixadv3 = $prixadv3;

        return $this;
    }

    public function getPrixzzv3(): ?string
    {
        return $this->prixzzv3;
    }

    public function setPrixzzv3(string $prixzzv3): self
    {
        $this->prixzzv3 = $prixzzv3;

        return $this;
    }

    public function getPrixbbv3(): ?string
    {
        return $this->prixbbv3;
    }

    public function setPrixbbv3(string $prixbbv3): self
    {
        $this->prixbbv3 = $prixbbv3;

        return $this;
    }

    public function getBlocsiege(): ?string
    {
        return $this->blocsiege;
    }

    public function setBlocsiege(string $blocsiege): self
    {
        $this->blocsiege = $blocsiege;

        return $this;
    }

    public function getFerry(): ?string
    {
        return $this->ferry;
    }

    public function setFerry(string $ferry): self
    {
        $this->ferry = $ferry;

        return $this;
    }

    public function getSemaine1(): ?string
    {
        return $this->semaine1;
    }

    public function setSemaine1(string $semaine1): self
    {
        $this->semaine1 = $semaine1;

        return $this;
    }

    public function getAllotFreesale(): ?int
    {
        return $this->allotFreesale;
    }

    public function setAllotFreesale(int $allotFreesale): self
    {
        $this->allotFreesale = $allotFreesale;

        return $this;
    }

    public function getPnr(): ?string
    {
        return $this->pnr;
    }

    public function setPnr(string $pnr): self
    {
        $this->pnr = $pnr;

        return $this;
    }

    public function getDisponouvelair(): ?bool
    {
        return $this->disponouvelair;
    }

    public function setDisponouvelair(bool $disponouvelair): self
    {
        $this->disponouvelair = $disponouvelair;

        return $this;
    }

    public function getCodetransportaxe(): ?string
    {
        return $this->codetransportaxe;
    }

    public function setCodetransportaxe(string $codetransportaxe): self
    {
        $this->codetransportaxe = $codetransportaxe;

        return $this;
    }

    public function getNvol2(): ?string
    {
        return $this->nvol2;
    }

    public function setNvol2(string $nvol2): self
    {
        $this->nvol2 = $nvol2;

        return $this;
    }

    public function getPrixYield(): ?string
    {
        return $this->prixYield;
    }

    public function setPrixYield(string $prixYield): self
    {
        $this->prixYield = $prixYield;

        return $this;
    }

    public function getAerod(): ?string
    {
        return $this->aerod;
    }

    public function setAerod(string $aerod): self
    {
        $this->aerod = $aerod;

        return $this;
    }

    public function getAeroa(): ?string
    {
        return $this->aeroa;
    }

    public function setAeroa(string $aeroa): self
    {
        $this->aeroa = $aeroa;

        return $this;
    }

    public function getPasAfficherHoraire(): ?int
    {
        return $this->pasAfficherHoraire;
    }

    public function setPasAfficherHoraire(int $pasAfficherHoraire): self
    {
        $this->pasAfficherHoraire = $pasAfficherHoraire;

        return $this;
    }

    public function getRetroVol(): ?int
    {
        return $this->retroVol;
    }

    public function setRetroVol(int $retroVol): self
    {
        $this->retroVol = $retroVol;

        return $this;
    }

    public function getKilobebe(): ?int
    {
        return $this->kilobebe;
    }

    public function setKilobebe(int $kilobebe): self
    {
        $this->kilobebe = $kilobebe;

        return $this;
    }

    public function getBagagesoute(): ?int
    {
        return $this->bagagesoute;
    }

    public function setBagagesoute(int $bagagesoute): self
    {
        $this->bagagesoute = $bagagesoute;

        return $this;
    }

    public function getAerodep(): ?string
    {
        return $this->aerodep;
    }

    public function setAerodep(string $aerodep): self
    {
        $this->aerodep = $aerodep;

        return $this;
    }

    public function getAeroarr(): ?string
    {
        return $this->aeroarr;
    }

    public function setAeroarr(string $aeroarr): self
    {
        $this->aeroarr = $aeroarr;

        return $this;
    }


}
