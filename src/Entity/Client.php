<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="CLIENT", indexes={@ORM\Index(name="Seqcltpackdb", columns={"REFPACKDB", "frais", "taxecli", "SEQCLTPACKDB"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REFPACKDB", type="string", length=50, nullable=false)
     */
    private $refpackdb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCLT", type="string", length=30, nullable=false)
     */
    private $nomclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=60, nullable=false)
     */
    private $adresse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=6, nullable=false)
     */
    private $cp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=60, nullable=false)
     */
    private $ville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PAYS", type="string", length=20, nullable=false)
     */
    private $pays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TEL1", type="string", length=20, nullable=false)
     */
    private $tel1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TEL2", type="string", length=20, nullable=false)
     */
    private $tel2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TEL3", type="string", length=20, nullable=false)
     */
    private $tel3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=20, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=150, nullable=false, options={"fixed"=true})
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PATRON", type="string", length=30, nullable=false)
     */
    private $patron = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT", type="string", length=30, nullable=false)
     */
    private $contact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CCOMPTA", type="string", length=8, nullable=false)
     */
    private $ccompta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISS", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $commiss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISS2", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $commiss2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBRE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $libre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CONFIRMATION", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $confirmation = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="SEQCLTPACKDB", type="integer", nullable=false)
     */
    private $seqcltpackdb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="frais", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $frais = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="taxecli", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxecli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="paiement", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $paiement = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datesaisie", type="datetime", nullable=false)
     */
    private $datesaisie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="libtyperegle", type="string", length=25, nullable=false)
     */
    private $libtyperegle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ccredit", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $ccredit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="compta", type="string", length=150, nullable=false)
     */
    private $compta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="resa", type="string", length=150, nullable=false)
     */
    private $resa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="convoc", type="string", length=150, nullable=false)
     */
    private $convoc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="blacklist", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $blacklist = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMRESEAU", type="string", length=50, nullable=false)
     */
    private $nomreseau = '';

    /**
     * @var string
     *
     * @ORM\Column(name="encompte", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $encompte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comttc", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $comttc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="login_adpack", type="string", length=20, nullable=false)
     */
    private $loginAdpack = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_adpack", type="string", length=20, nullable=false)
     */
    private $mdpAdpack = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPAYEUR", type="string", length=6, nullable=false)
     */
    private $codepayeur = '';

    /**
     * @var int
     *
     * @ORM\Column(name="actif", type="integer", nullable=false)
     */
    private $actif = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="prix_brochure", type="integer", nullable=false)
     */
    private $prixBrochure = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maj_prix_web", type="integer", nullable=false)
     */
    private $majPrixWeb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="login_xft", type="string", length=50, nullable=false)
     */
    private $loginXft = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_xft", type="string", length=50, nullable=false)
     */
    private $pwdXft = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="GENERATION_PD", type="boolean", nullable=false)
     */
    private $generationPd = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="seqcondition_client", type="integer", nullable=false)
     */
    private $seqconditionClient = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="venteflash", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $venteflash = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTABILISABLE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $comptabilisable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code_comptable", type="string", length=30, nullable=false)
     */
    private $codeComptable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="code_vendeur", type="string", length=50, nullable=false)
     */
    private $codeVendeur = '';

    /**
     * @var int
     *
     * @ORM\Column(name="REGLEMENT_MCTO", type="smallint", nullable=false)
     */
    private $reglementMcto = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vente", mappedBy="seqclt")
     */
    private $seqvente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seqvente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function getRefpackdb(): ?string
    {
        return $this->refpackdb;
    }

    public function setRefpackdb(string $refpackdb): self
    {
        $this->refpackdb = $refpackdb;

        return $this;
    }

    public function getNomclt(): ?string
    {
        return $this->nomclt;
    }

    public function setNomclt(string $nomclt): self
    {
        $this->nomclt = $nomclt;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): self
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): self
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getTel3(): ?string
    {
        return $this->tel3;
    }

    public function setTel3(string $tel3): self
    {
        $this->tel3 = $tel3;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPatron(): ?string
    {
        return $this->patron;
    }

    public function setPatron(string $patron): self
    {
        $this->patron = $patron;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getCcompta(): ?string
    {
        return $this->ccompta;
    }

    public function setCcompta(string $ccompta): self
    {
        $this->ccompta = $ccompta;

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

    public function getCommiss2(): ?string
    {
        return $this->commiss2;
    }

    public function setCommiss2(string $commiss2): self
    {
        $this->commiss2 = $commiss2;

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

    public function getLibre(): ?string
    {
        return $this->libre;
    }

    public function setLibre(string $libre): self
    {
        $this->libre = $libre;

        return $this;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getSeqcltpackdb(): ?int
    {
        return $this->seqcltpackdb;
    }

    public function setSeqcltpackdb(int $seqcltpackdb): self
    {
        $this->seqcltpackdb = $seqcltpackdb;

        return $this;
    }

    public function getFrais(): ?string
    {
        return $this->frais;
    }

    public function setFrais(string $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getTaxecli(): ?string
    {
        return $this->taxecli;
    }

    public function setTaxecli(string $taxecli): self
    {
        $this->taxecli = $taxecli;

        return $this;
    }

    public function getPaiement(): ?string
    {
        return $this->paiement;
    }

    public function setPaiement(string $paiement): self
    {
        $this->paiement = $paiement;

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

    public function getLibtyperegle(): ?string
    {
        return $this->libtyperegle;
    }

    public function setLibtyperegle(string $libtyperegle): self
    {
        $this->libtyperegle = $libtyperegle;

        return $this;
    }

    public function getCcredit(): ?string
    {
        return $this->ccredit;
    }

    public function setCcredit(string $ccredit): self
    {
        $this->ccredit = $ccredit;

        return $this;
    }

    public function getCompta(): ?string
    {
        return $this->compta;
    }

    public function setCompta(string $compta): self
    {
        $this->compta = $compta;

        return $this;
    }

    public function getResa(): ?string
    {
        return $this->resa;
    }

    public function setResa(string $resa): self
    {
        $this->resa = $resa;

        return $this;
    }

    public function getConvoc(): ?string
    {
        return $this->convoc;
    }

    public function setConvoc(string $convoc): self
    {
        $this->convoc = $convoc;

        return $this;
    }

    public function getBlacklist(): ?string
    {
        return $this->blacklist;
    }

    public function setBlacklist(string $blacklist): self
    {
        $this->blacklist = $blacklist;

        return $this;
    }

    public function getNomreseau(): ?string
    {
        return $this->nomreseau;
    }

    public function setNomreseau(string $nomreseau): self
    {
        $this->nomreseau = $nomreseau;

        return $this;
    }

    public function getEncompte(): ?string
    {
        return $this->encompte;
    }

    public function setEncompte(string $encompte): self
    {
        $this->encompte = $encompte;

        return $this;
    }

    public function getComttc(): ?string
    {
        return $this->comttc;
    }

    public function setComttc(string $comttc): self
    {
        $this->comttc = $comttc;

        return $this;
    }

    public function getLoginAdpack(): ?string
    {
        return $this->loginAdpack;
    }

    public function setLoginAdpack(string $loginAdpack): self
    {
        $this->loginAdpack = $loginAdpack;

        return $this;
    }

    public function getMdpAdpack(): ?string
    {
        return $this->mdpAdpack;
    }

    public function setMdpAdpack(string $mdpAdpack): self
    {
        $this->mdpAdpack = $mdpAdpack;

        return $this;
    }

    public function getCodepayeur(): ?string
    {
        return $this->codepayeur;
    }

    public function setCodepayeur(string $codepayeur): self
    {
        $this->codepayeur = $codepayeur;

        return $this;
    }

    public function getActif(): ?int
    {
        return $this->actif;
    }

    public function setActif(int $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    public function getPrixBrochure(): ?int
    {
        return $this->prixBrochure;
    }

    public function setPrixBrochure(int $prixBrochure): self
    {
        $this->prixBrochure = $prixBrochure;

        return $this;
    }

    public function getMajPrixWeb(): ?int
    {
        return $this->majPrixWeb;
    }

    public function setMajPrixWeb(int $majPrixWeb): self
    {
        $this->majPrixWeb = $majPrixWeb;

        return $this;
    }

    public function getLoginXft(): ?string
    {
        return $this->loginXft;
    }

    public function setLoginXft(string $loginXft): self
    {
        $this->loginXft = $loginXft;

        return $this;
    }

    public function getPwdXft(): ?string
    {
        return $this->pwdXft;
    }

    public function setPwdXft(string $pwdXft): self
    {
        $this->pwdXft = $pwdXft;

        return $this;
    }

    public function getGenerationPd(): ?bool
    {
        return $this->generationPd;
    }

    public function setGenerationPd(bool $generationPd): self
    {
        $this->generationPd = $generationPd;

        return $this;
    }

    public function getSeqconditionClient(): ?int
    {
        return $this->seqconditionClient;
    }

    public function setSeqconditionClient(int $seqconditionClient): self
    {
        $this->seqconditionClient = $seqconditionClient;

        return $this;
    }

    public function getVenteflash(): ?string
    {
        return $this->venteflash;
    }

    public function setVenteflash(string $venteflash): self
    {
        $this->venteflash = $venteflash;

        return $this;
    }

    public function getComptabilisable(): ?string
    {
        return $this->comptabilisable;
    }

    public function setComptabilisable(string $comptabilisable): self
    {
        $this->comptabilisable = $comptabilisable;

        return $this;
    }

    public function getCodeComptable(): ?string
    {
        return $this->codeComptable;
    }

    public function setCodeComptable(string $codeComptable): self
    {
        $this->codeComptable = $codeComptable;

        return $this;
    }

    public function getCodeVendeur(): ?string
    {
        return $this->codeVendeur;
    }

    public function setCodeVendeur(string $codeVendeur): self
    {
        $this->codeVendeur = $codeVendeur;

        return $this;
    }

    public function getReglementMcto(): ?int
    {
        return $this->reglementMcto;
    }

    public function setReglementMcto(int $reglementMcto): self
    {
        $this->reglementMcto = $reglementMcto;

        return $this;
    }

    /**
     * @return Collection|Vente[]
     */
    public function getSeqvente(): Collection
    {
        return $this->seqvente;
    }

    public function addSeqvente(Vente $seqvente): self
    {
        if (!$this->seqvente->contains($seqvente)) {
            $this->seqvente[] = $seqvente;
            $seqvente->addSeqclt($this);
        }

        return $this;
    }

    public function removeSeqvente(Vente $seqvente): self
    {
        if ($this->seqvente->contains($seqvente)) {
            $this->seqvente->removeElement($seqvente);
            $seqvente->removeSeqclt($this);
        }

        return $this;
    }

}
