<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="VENTE", indexes={@ORM\Index(name="VENTE17", columns={"SEQVENTE", "CODEPROD", "DATEDEBUT", "SEQVOLD", "SEQVOLR", "VENDU", "STOPSALE", "QUOTAVENTE", "LIBPAYS", "DUREE", "NUITEE", "INSCRIP", "REFNET"}), @ORM\Index(name="VENTE18", columns={"NATURE", "LIBVENTE", "DUREE", "NUITEE", "JOUR", "REFVENTE"}), @ORM\Index(name="VENTE19", columns={"SEQVENTE", "DATEDEBUT", "DATED", "SEQVOLD", "DATER", "SEQVOLR", "VENDU", "INSCRIP", "STOPSALE", "QUOTAVENTE", "REFNET"}), @ORM\Index(name="VENTE20", columns={"SEQVENTE", "NATURE", "DATEDEBUT", "SEQVOLD", "SEQVOLR", "VENDU", "STOPSALE", "QUOTAVENTE", "VOL", "REFNET", "INSCRIP"}), @ORM\Index(name="VENTE22", columns={"SEQVENTE", "NATURE", "DATEDEBUT", "SEQVOLD", "VENDU", "STOPSALE", "QUOTAVENTE", "REFNET", "INSCRIP"}), @ORM\Index(name="VENTE23", columns={"SEQVENTE", "DATEDEBUT", "SEQVOLD", "SEQVOLR", "VENDU", "INSCRIP", "QUOTAVENTE", "REFNET"}), @ORM\Index(name="VENTE25", columns={"SEQVENTE", "DATEDEBUT", "VILLE1D", "VENDU", "STOPSALE", "QUOTAVENTE", "REFNET", "INSCRIP"}), @ORM\Index(name="VENTE26", columns={"LIBPAYS", "REFNET"}), @ORM\Index(name="VENTE27", columns={"CODEPROD", "DATEDEBUT", "SEQVOLD", "VENDU", "INSCRIP", "STOPSALE", "QUOTAVENTE"}), @ORM\Index(name="VENTE29", columns={"LIBPAYS"}), @ORM\Index(name="VENTE34", columns={"REFNET", "DATEDEBUT"}), @ORM\Index(name="VENTE41", columns={"PROMO"}), @ORM\Index(name="VENTE42", columns={"CODEPROD"}), @ORM\Index(name="VENTE44", columns={"VILLE1D"}), @ORM\Index(name="VENTE35", columns={"REFNETV2", "LIBVENTE"}), @ORM\Index(name="VENTE36", columns={"REFNETV2", "SEQVENTE", "DATEDEBUT", "SEQVOLD", "SEQVOLR", "VENDU", "INSCRIP", "STOPSALE", "QUOTAVENTE", "DATED", "DATER"}), @ORM\Index(name="VolStopSalePromoDatedebutSeqVenteQuotaVenteLibPaysVenduCodePord", columns={"NATURE", "DUREE", "NUITEE", "SEQVOLD", "SEQVOLR", "LIBWEB", "REFNETV2", "VOL", "STOPSALE", "PROMO", "DATEDEBUT", "SEQVENTE", "QUOTAVENTE", "LIBPAYS", "VENDU", "CODEPROD"})})
 * @ORM\Entity
 */
class Vente
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQVENTE", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqvente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEVENTE", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datevente = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="NATURE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $nature = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD", type="string", length=40, nullable=false)
     */
    private $libprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBTYPEPROD", type="string", length=20, nullable=false)
     */
    private $libtypeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBVENTE", type="string", length=60, nullable=false)
     */
    private $libvente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=30, nullable=false)
     */
    private $libpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $duree = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NUITEE", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $nuitee = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="JOUR", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $jour = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=false)
     */
    private $datedebut = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prixvente = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATED", type="datetime", nullable=false)
     */
    private $dated = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOLD", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqvold = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE1D", type="string", length=3, nullable=false)
     */
    private $ville1d = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEURE1D", type="string", length=4, nullable=false)
     */
    private $heure1d = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE1A", type="string", length=3, nullable=false)
     */
    private $ville1a = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEURE1A", type="string", length=4, nullable=false)
     */
    private $heure1a = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NVOLD", type="string", length=8, nullable=false)
     */
    private $nvold = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATER", type="datetime", nullable=false)
     */
    private $dater = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOLR", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqvolr = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE2D", type="string", length=3, nullable=false)
     */
    private $ville2d = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEURE2D", type="string", length=4, nullable=false)
     */
    private $heure2d = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE2A", type="string", length=3, nullable=false)
     */
    private $ville2a = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HEURE2A", type="string", length=4, nullable=false)
     */
    private $heure2a = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NVOLR", type="string", length=8, nullable=false)
     */
    private $nvolr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $vendu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="INSCRIP", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $inscrip = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="STOPSALE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $stopsale = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="QUOTAVENTE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $quotavente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REFVENTE", type="string", length=16, nullable=false)
     */
    private $refvente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PROMO", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $promo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MARGE", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $marge = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFOUR", type="string", length=4, nullable=false)
     */
    private $seqfour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISS", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $commiss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VIA1", type="string", length=3, nullable=false)
     */
    private $via1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VIA2", type="string", length=3, nullable=false)
     */
    private $via2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AGEENFANT1", type="string", length=15, nullable=false)
     */
    private $ageenfant1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AGEENFANT2", type="string", length=15, nullable=false)
     */
    private $ageenfant2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXAGEENFANT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixageenfant1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXAGEENFANT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixageenfant2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXAGEENFANT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixageenfant3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUPPSG", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $suppsg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXTPL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixtpl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATADULTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatadulte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATENFANT1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatenfant1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATENFANT2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatenfant2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATENFANT3", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatenfant3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATSUPPSG", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatsuppsg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATTPL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achattpl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACHATBEBE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achatbebe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXBEBE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixbebe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTALTAXE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $totaltaxe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REFNET", type="string", length=12, nullable=false)
     */
    private $refnet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBAUTRES", type="string", length=35, nullable=false)
     */
    private $libautres = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXE2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxe2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VOL", type="decimal", precision=1, scale=0, nullable=false, options={"default"="1"})
     */
    private $vol = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="SGVENDU", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sgvendu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DBVENDU", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $dbvendu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PUBLIER", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $publier = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVOL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXD", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXR", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixr = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WEBPROMO", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $webpromo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="curein", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $curein = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBWEB", type="string", length=70, nullable=false)
     */
    private $libweb = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REFNETV2", type="string", length=20, nullable=false)
     */
    private $refnetv2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="typecure", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $typecure = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODECURE", type="string", length=5, nullable=false)
     */
    private $codecure = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBCURE", type="string", length=50, nullable=false)
     */
    private $libcure = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODECURISTE", type="string", length=5, nullable=false)
     */
    private $codecuriste = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCURISTE", type="string", length=50, nullable=false)
     */
    private $nomcuriste = '';

    /**
     * @var string
     *
     * @ORM\Column(name="affecter", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $affecter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="libprest", type="string", length=80, nullable=false)
     */
    private $libprest = '';

    /**
     * @var string
     *
     * @ORM\Column(name="venteonline", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $venteonline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="venteaccompagnant", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $venteaccompagnant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achataccompagnant", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $achataccompagnant = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datesaisie", type="datetime", nullable=false)
     */
    private $datesaisie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="exclure", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $exclure = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sanssg", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $sanssg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prorata", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prorata = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIB_PREST", type="string", length=100, nullable=false, options={"fixed"=true})
     */
    private $libPrest = '';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Localites", inversedBy="seqvente")
     * @ORM\JoinTable(name="assproduitslocalites",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SEQVENTE", referencedColumnName="SEQVENTE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IdLocalite", referencedColumnName="IdLocalite")
     *   }
     * )
     */
    private $idlocalite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Themes", inversedBy="seqvente")
     * @ORM\JoinTable(name="assproduitsthemes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="SEQVENTE", referencedColumnName="SEQVENTE")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="IDTHEME", referencedColumnName="IdTheme")
     *   }
     * )
     */
    private $idtheme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Client", mappedBy="seqvente")
     */
    private $seqclt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idlocalite = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idtheme = new \Doctrine\Common\Collections\ArrayCollection();
        $this->seqclt = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getSeqvente(): ?string
    {
        return $this->seqvente;
    }

    public function getDatevente(): ?\DateTimeInterface
    {
        return $this->datevente;
    }

    public function setDatevente(\DateTimeInterface $datevente): self
    {
        $this->datevente = $datevente;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;

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

    public function getLibtypeprod(): ?string
    {
        return $this->libtypeprod;
    }

    public function setLibtypeprod(string $libtypeprod): self
    {
        $this->libtypeprod = $libtypeprod;

        return $this;
    }

    public function getLibvente(): ?string
    {
        return $this->libvente;
    }

    public function setLibvente(string $libvente): self
    {
        $this->libvente = $libvente;

        return $this;
    }

    public function getLibpays(): ?string
    {
        return $this->libpays;
    }

    public function setLibpays(string $libpays): self
    {
        $this->libpays = $libpays;

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

    public function getNuitee(): ?string
    {
        return $this->nuitee;
    }

    public function setNuitee(string $nuitee): self
    {
        $this->nuitee = $nuitee;

        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): self
    {
        $this->jour = $jour;

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

    public function getPrixvente(): ?string
    {
        return $this->prixvente;
    }

    public function setPrixvente(string $prixvente): self
    {
        $this->prixvente = $prixvente;

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

    public function getSeqvold(): ?string
    {
        return $this->seqvold;
    }

    public function setSeqvold(string $seqvold): self
    {
        $this->seqvold = $seqvold;

        return $this;
    }

    public function getVille1d(): ?string
    {
        return $this->ville1d;
    }

    public function setVille1d(string $ville1d): self
    {
        $this->ville1d = $ville1d;

        return $this;
    }

    public function getHeure1d(): ?string
    {
        return $this->heure1d;
    }

    public function setHeure1d(string $heure1d): self
    {
        $this->heure1d = $heure1d;

        return $this;
    }

    public function getVille1a(): ?string
    {
        return $this->ville1a;
    }

    public function setVille1a(string $ville1a): self
    {
        $this->ville1a = $ville1a;

        return $this;
    }

    public function getHeure1a(): ?string
    {
        return $this->heure1a;
    }

    public function setHeure1a(string $heure1a): self
    {
        $this->heure1a = $heure1a;

        return $this;
    }

    public function getNvold(): ?string
    {
        return $this->nvold;
    }

    public function setNvold(string $nvold): self
    {
        $this->nvold = $nvold;

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

    public function getSeqvolr(): ?string
    {
        return $this->seqvolr;
    }

    public function setSeqvolr(string $seqvolr): self
    {
        $this->seqvolr = $seqvolr;

        return $this;
    }

    public function getVille2d(): ?string
    {
        return $this->ville2d;
    }

    public function setVille2d(string $ville2d): self
    {
        $this->ville2d = $ville2d;

        return $this;
    }

    public function getHeure2d(): ?string
    {
        return $this->heure2d;
    }

    public function setHeure2d(string $heure2d): self
    {
        $this->heure2d = $heure2d;

        return $this;
    }

    public function getVille2a(): ?string
    {
        return $this->ville2a;
    }

    public function setVille2a(string $ville2a): self
    {
        $this->ville2a = $ville2a;

        return $this;
    }

    public function getHeure2a(): ?string
    {
        return $this->heure2a;
    }

    public function setHeure2a(string $heure2a): self
    {
        $this->heure2a = $heure2a;

        return $this;
    }

    public function getNvolr(): ?string
    {
        return $this->nvolr;
    }

    public function setNvolr(string $nvolr): self
    {
        $this->nvolr = $nvolr;

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

    public function getInscrip(): ?string
    {
        return $this->inscrip;
    }

    public function setInscrip(string $inscrip): self
    {
        $this->inscrip = $inscrip;

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

    public function getQuotavente(): ?string
    {
        return $this->quotavente;
    }

    public function setQuotavente(string $quotavente): self
    {
        $this->quotavente = $quotavente;

        return $this;
    }

    public function getRefvente(): ?string
    {
        return $this->refvente;
    }

    public function setRefvente(string $refvente): self
    {
        $this->refvente = $refvente;

        return $this;
    }

    public function getPromo(): ?string
    {
        return $this->promo;
    }

    public function setPromo(string $promo): self
    {
        $this->promo = $promo;

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

    public function getSeqfour(): ?string
    {
        return $this->seqfour;
    }

    public function setSeqfour(string $seqfour): self
    {
        $this->seqfour = $seqfour;

        return $this;
    }

    public function getCommiss(): ?string
    {
        return $this->commiss;
    }

    public function setCommiss(string $commiss): self
    {
        $this->commiss = $commiss;

        return $this;
    }

    public function getVia1(): ?string
    {
        return $this->via1;
    }

    public function setVia1(string $via1): self
    {
        $this->via1 = $via1;

        return $this;
    }

    public function getVia2(): ?string
    {
        return $this->via2;
    }

    public function setVia2(string $via2): self
    {
        $this->via2 = $via2;

        return $this;
    }

    public function getAgeenfant1(): ?string
    {
        return $this->ageenfant1;
    }

    public function setAgeenfant1(string $ageenfant1): self
    {
        $this->ageenfant1 = $ageenfant1;

        return $this;
    }

    public function getAgeenfant2(): ?string
    {
        return $this->ageenfant2;
    }

    public function setAgeenfant2(string $ageenfant2): self
    {
        $this->ageenfant2 = $ageenfant2;

        return $this;
    }

    public function getPrixageenfant1(): ?string
    {
        return $this->prixageenfant1;
    }

    public function setPrixageenfant1(string $prixageenfant1): self
    {
        $this->prixageenfant1 = $prixageenfant1;

        return $this;
    }

    public function getPrixageenfant2(): ?string
    {
        return $this->prixageenfant2;
    }

    public function setPrixageenfant2(string $prixageenfant2): self
    {
        $this->prixageenfant2 = $prixageenfant2;

        return $this;
    }

    public function getPrixageenfant3(): ?string
    {
        return $this->prixageenfant3;
    }

    public function setPrixageenfant3(string $prixageenfant3): self
    {
        $this->prixageenfant3 = $prixageenfant3;

        return $this;
    }

    public function getSuppsg(): ?string
    {
        return $this->suppsg;
    }

    public function setSuppsg(string $suppsg): self
    {
        $this->suppsg = $suppsg;

        return $this;
    }

    public function getPrixtpl(): ?string
    {
        return $this->prixtpl;
    }

    public function setPrixtpl(string $prixtpl): self
    {
        $this->prixtpl = $prixtpl;

        return $this;
    }

    public function getAchatadulte(): ?string
    {
        return $this->achatadulte;
    }

    public function setAchatadulte(string $achatadulte): self
    {
        $this->achatadulte = $achatadulte;

        return $this;
    }

    public function getAchatenfant1(): ?string
    {
        return $this->achatenfant1;
    }

    public function setAchatenfant1(string $achatenfant1): self
    {
        $this->achatenfant1 = $achatenfant1;

        return $this;
    }

    public function getAchatenfant2(): ?string
    {
        return $this->achatenfant2;
    }

    public function setAchatenfant2(string $achatenfant2): self
    {
        $this->achatenfant2 = $achatenfant2;

        return $this;
    }

    public function getAchatenfant3(): ?string
    {
        return $this->achatenfant3;
    }

    public function setAchatenfant3(string $achatenfant3): self
    {
        $this->achatenfant3 = $achatenfant3;

        return $this;
    }

    public function getAchatsuppsg(): ?string
    {
        return $this->achatsuppsg;
    }

    public function setAchatsuppsg(string $achatsuppsg): self
    {
        $this->achatsuppsg = $achatsuppsg;

        return $this;
    }

    public function getAchattpl(): ?string
    {
        return $this->achattpl;
    }

    public function setAchattpl(string $achattpl): self
    {
        $this->achattpl = $achattpl;

        return $this;
    }

    public function getAchatbebe(): ?string
    {
        return $this->achatbebe;
    }

    public function setAchatbebe(string $achatbebe): self
    {
        $this->achatbebe = $achatbebe;

        return $this;
    }

    public function getPrixbebe(): ?string
    {
        return $this->prixbebe;
    }

    public function setPrixbebe(string $prixbebe): self
    {
        $this->prixbebe = $prixbebe;

        return $this;
    }

    public function getTotaltaxe(): ?string
    {
        return $this->totaltaxe;
    }

    public function setTotaltaxe(string $totaltaxe): self
    {
        $this->totaltaxe = $totaltaxe;

        return $this;
    }

    public function getRefnet(): ?string
    {
        return $this->refnet;
    }

    public function setRefnet(string $refnet): self
    {
        $this->refnet = $refnet;

        return $this;
    }

    public function getLibautres(): ?string
    {
        return $this->libautres;
    }

    public function setLibautres(string $libautres): self
    {
        $this->libautres = $libautres;

        return $this;
    }

    public function getTaxe2(): ?string
    {
        return $this->taxe2;
    }

    public function setTaxe2(string $taxe2): self
    {
        $this->taxe2 = $taxe2;

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

    public function getVol(): ?string
    {
        return $this->vol;
    }

    public function setVol(string $vol): self
    {
        $this->vol = $vol;

        return $this;
    }

    public function getSgvendu(): ?string
    {
        return $this->sgvendu;
    }

    public function setSgvendu(string $sgvendu): self
    {
        $this->sgvendu = $sgvendu;

        return $this;
    }

    public function getDbvendu(): ?string
    {
        return $this->dbvendu;
    }

    public function setDbvendu(string $dbvendu): self
    {
        $this->dbvendu = $dbvendu;

        return $this;
    }

    public function getPublier(): ?string
    {
        return $this->publier;
    }

    public function setPublier(string $publier): self
    {
        $this->publier = $publier;

        return $this;
    }

    public function getPrixvol(): ?string
    {
        return $this->prixvol;
    }

    public function setPrixvol(string $prixvol): self
    {
        $this->prixvol = $prixvol;

        return $this;
    }

    public function getPrixd(): ?string
    {
        return $this->prixd;
    }

    public function setPrixd(string $prixd): self
    {
        $this->prixd = $prixd;

        return $this;
    }

    public function getPrixr(): ?string
    {
        return $this->prixr;
    }

    public function setPrixr(string $prixr): self
    {
        $this->prixr = $prixr;

        return $this;
    }

    public function getWebpromo(): ?string
    {
        return $this->webpromo;
    }

    public function setWebpromo(string $webpromo): self
    {
        $this->webpromo = $webpromo;

        return $this;
    }

    public function getCurein(): ?string
    {
        return $this->curein;
    }

    public function setCurein(string $curein): self
    {
        $this->curein = $curein;

        return $this;
    }

    public function getLibweb(): ?string
    {
        return $this->libweb;
    }

    public function setLibweb(string $libweb): self
    {
        $this->libweb = $libweb;

        return $this;
    }

    public function getRefnetv2(): ?string
    {
        return $this->refnetv2;
    }

    public function setRefnetv2(string $refnetv2): self
    {
        $this->refnetv2 = $refnetv2;

        return $this;
    }

    public function getTypecure(): ?string
    {
        return $this->typecure;
    }

    public function setTypecure(string $typecure): self
    {
        $this->typecure = $typecure;

        return $this;
    }

    public function getCodecure(): ?string
    {
        return $this->codecure;
    }

    public function setCodecure(string $codecure): self
    {
        $this->codecure = $codecure;

        return $this;
    }

    public function getLibcure(): ?string
    {
        return $this->libcure;
    }

    public function setLibcure(string $libcure): self
    {
        $this->libcure = $libcure;

        return $this;
    }

    public function getCodecuriste(): ?string
    {
        return $this->codecuriste;
    }

    public function setCodecuriste(string $codecuriste): self
    {
        $this->codecuriste = $codecuriste;

        return $this;
    }

    public function getNomcuriste(): ?string
    {
        return $this->nomcuriste;
    }

    public function setNomcuriste(string $nomcuriste): self
    {
        $this->nomcuriste = $nomcuriste;

        return $this;
    }

    public function getAffecter(): ?string
    {
        return $this->affecter;
    }

    public function setAffecter(string $affecter): self
    {
        $this->affecter = $affecter;

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

    public function getVenteonline(): ?string
    {
        return $this->venteonline;
    }

    public function setVenteonline(string $venteonline): self
    {
        $this->venteonline = $venteonline;

        return $this;
    }

    public function getVenteaccompagnant(): ?string
    {
        return $this->venteaccompagnant;
    }

    public function setVenteaccompagnant(string $venteaccompagnant): self
    {
        $this->venteaccompagnant = $venteaccompagnant;

        return $this;
    }

    public function getAchataccompagnant(): ?string
    {
        return $this->achataccompagnant;
    }

    public function setAchataccompagnant(string $achataccompagnant): self
    {
        $this->achataccompagnant = $achataccompagnant;

        return $this;
    }

    public function getDatesaisie(): ?\DateTimeInterface
    {
        return $this->datesaisie;
    }

    public function setDatesaisie(\DateTimeInterface $datesaisie): self
    {
        $this->datesaisie = $datesaisie;

        return $this;
    }

    public function getExclure(): ?string
    {
        return $this->exclure;
    }

    public function setExclure(string $exclure): self
    {
        $this->exclure = $exclure;

        return $this;
    }

    public function getSanssg(): ?string
    {
        return $this->sanssg;
    }

    public function setSanssg(string $sanssg): self
    {
        $this->sanssg = $sanssg;

        return $this;
    }

    public function getProrata(): ?string
    {
        return $this->prorata;
    }

    public function setProrata(string $prorata): self
    {
        $this->prorata = $prorata;

        return $this;
    }

    /**
     * @return Collection|Localites[]
     */
    public function getIdlocalite(): Collection
    {
        return $this->idlocalite;
    }

    public function addIdlocalite(Localites $idlocalite): self
    {
        if (!$this->idlocalite->contains($idlocalite)) {
            $this->idlocalite[] = $idlocalite;
        }

        return $this;
    }

    public function removeIdlocalite(Localites $idlocalite): self
    {
        if ($this->idlocalite->contains($idlocalite)) {
            $this->idlocalite->removeElement($idlocalite);
        }

        return $this;
    }

    /**
     * @return Collection|Themes[]
     */
    public function getIdtheme(): Collection
    {
        return $this->idtheme;
    }

    public function addIdtheme(Themes $idtheme): self
    {
        if (!$this->idtheme->contains($idtheme)) {
            $this->idtheme[] = $idtheme;
        }

        return $this;
    }

    public function removeIdtheme(Themes $idtheme): self
    {
        if ($this->idtheme->contains($idtheme)) {
            $this->idtheme->removeElement($idtheme);
        }

        return $this;
    }

    /**
     * @return Collection|Client[]
     */
    public function getSeqclt(): Collection
    {
        return $this->seqclt;
    }

    public function addSeqclt(Client $seqclt): self
    {
        if (!$this->seqclt->contains($seqclt)) {
            $this->seqclt[] = $seqclt;
            $seqclt->addSeqvente($this);
        }

        return $this;
    }

    public function removeSeqclt(Client $seqclt): self
    {
        if ($this->seqclt->contains($seqclt)) {
            $this->seqclt->removeElement($seqclt);
            $seqclt->removeSeqvente($this);
        }

        return $this;
    }

}
