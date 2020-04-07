<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="FACTURE", indexes={@ORM\Index(name="FACTURE24", columns={"SEQCLT", "SEQAVOIR", "TYPEDOSSIER", "TOTAL", "REGLE"}), @ORM\Index(name="FACTURE33", columns={"SEQCLT", "SEQFACT"}), @ORM\Index(name="FACTURE36", columns={"DATEFACT"}), @ORM\Index(name="FACTURE38", columns={"SEQRESA"})})
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="decimal", precision=8, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqfact = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFACT", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datefact = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQAVOIR", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $seqavoir = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEDOSSIER", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $typedossier = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false)
     */
    private $seqclt = '';

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
     * @ORM\Column(name="VILLE", type="string", length=60, nullable=false)
     */
    private $ville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=8, nullable=false)
     */
    private $cp = '';

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
     * @ORM\Column(name="ADULTES", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $adultes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ENFANTS", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $enfants = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="BEBES", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $bebes = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBSG", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbsg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBDB", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbdb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBTPL", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbtpl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBQUAD", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbquad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVENTE", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqvente = '0';

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
     * @ORM\Column(name="TAXE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBTAXE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $nbtaxe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CARTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $carte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBCARTE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbcarte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FRAIS", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $frais = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBFRAIS", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbfrais = '0';

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
     * @ORM\Column(name="NBTAXE2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbtaxe2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBASSUR", type="string", length=30, nullable=false)
     */
    private $libassur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ASSIST", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $assist = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBASSIST", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $nbassist = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISS", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $commiss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="HORSCOMISS", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $horscomiss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTCOMISS", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $montcomiss = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $total = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REGLE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $regle = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDEUR", type="string", length=20, nullable=false)
     */
    private $vendeur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VOTRECONTACT", type="string", length=20, nullable=false)
     */
    private $votrecontact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOTRECONTACT", type="string", length=20, nullable=false)
     */
    private $notrecontact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMUTIL", type="string", length=20, nullable=false)
     */
    private $nomutil = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATESAISIE", type="datetime", nullable=false)
     */
    private $datesaisie = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEMODIF", type="datetime", nullable=false)
     */
    private $datemodif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTA", type="string", length=10, nullable=false)
     */
    private $compta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REFRESA", type="string", length=40, nullable=false)
     */
    private $refresa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPORTEUR", type="string", length=30, nullable=false)
     */
    private $libporteur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $duree = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS1", type="text", length=16, nullable=false)
     */
    private $obs1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS2", type="text", length=16, nullable=false)
     */
    private $obs2 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="IMPFACT", type="datetime", nullable=false)
     */
    private $impfact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=30, nullable=false)
     */
    private $libpays = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEASSIST", type="datetime", nullable=false)
     */
    private $dateassist = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD1", type="string", length=4, nullable=false)
     */
    private $codeprod1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD1", type="string", length=40, nullable=false)
     */
    private $libprod1 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTREE1", type="datetime", nullable=false)
     */
    private $entree1 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SORTIE1", type="datetime", nullable=false)
     */
    private $sortie1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NBSG1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbsg1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBDB1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbdb1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBTPL1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbtpl1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBQUAD1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbquad1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST1", type="string", length=80, nullable=false)
     */
    private $libprest1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD2", type="string", length=4, nullable=false)
     */
    private $codeprod2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD2", type="string", length=40, nullable=false)
     */
    private $libprod2 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTREE2", type="datetime", nullable=false)
     */
    private $entree2 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SORTIE2", type="datetime", nullable=false)
     */
    private $sortie2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NBSG2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbsg2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBDB2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbdb2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBTPL2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbtpl2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBQUAD2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbquad2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST2", type="string", length=80, nullable=false)
     */
    private $libprest2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD3", type="string", length=4, nullable=false)
     */
    private $codeprod3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD3", type="string", length=40, nullable=false)
     */
    private $libprod3 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENTREE3", type="datetime", nullable=false)
     */
    private $entree3 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="SORTIE3", type="datetime", nullable=false)
     */
    private $sortie3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NBSG3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbsg3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBDB3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbdb3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBTPL3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbtpl3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NBQUAD3", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbquad3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST3", type="string", length=80, nullable=false)
     */
    private $libprest3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT1", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $montant1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT2", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $montant2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT3", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $montant3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT4", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $montant4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTINGENT", type="decimal", precision=1, scale=0, nullable=false, options={"default"="1"})
     */
    private $contingent = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="CONFHOTEL", type="string", length=30, nullable=false)
     */
    private $confhotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="production", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $production = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="genregle", type="string", length=20, nullable=false)
     */
    private $genregle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="achatvol", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $achatvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="achathot", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $achathot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="libville", type="string", length=3, nullable=false)
     */
    private $libville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transfert", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $transfert = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="typefact", type="string", length=10, nullable=false)
     */
    private $typefact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nbvol", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CUREONLY", type="string", length=50, nullable=false)
     */
    private $cureonly = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="recufou", type="integer", nullable=false)
     */
    private $recufou = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROMO", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $codepromo = '';

    /**
     * @var int
     *
     * @ORM\Column(name="PRIXPROMO", type="integer", nullable=false)
     */
    private $prixpromo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECOMPTA", type="datetime", nullable=false)
     */
    private $datecompta = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATECOMPTA2", type="datetime", nullable=false)
     */
    private $datecompta2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTA2", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $compta2 = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="infinity_dossier", type="boolean", nullable=false)
     */
    private $infinityDossier = '0';

    public function getSeqfact(): ?string
    {
        return $this->seqfact;
    }

    public function getDatefact(): ?\DateTimeInterface
    {
        return $this->datefact;
    }

    public function setDatefact(\DateTimeInterface $datefact): self
    {
        $this->datefact = $datefact;

        return $this;
    }

    public function getSeqavoir(): ?string
    {
        return $this->seqavoir;
    }

    public function setSeqavoir(string $seqavoir): self
    {
        $this->seqavoir = $seqavoir;

        return $this;
    }

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function setSeqresa(string $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getTypedossier(): ?string
    {
        return $this->typedossier;
    }

    public function setTypedossier(string $typedossier): self
    {
        $this->typedossier = $typedossier;

        return $this;
    }

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function setSeqclt(string $seqclt): self
    {
        $this->seqclt = $seqclt;

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

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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

    public function getAdultes(): ?string
    {
        return $this->adultes;
    }

    public function setAdultes(string $adultes): self
    {
        $this->adultes = $adultes;

        return $this;
    }

    public function getEnfants(): ?string
    {
        return $this->enfants;
    }

    public function setEnfants(string $enfants): self
    {
        $this->enfants = $enfants;

        return $this;
    }

    public function getBebes(): ?string
    {
        return $this->bebes;
    }

    public function setBebes(string $bebes): self
    {
        $this->bebes = $bebes;

        return $this;
    }

    public function getNbsg(): ?string
    {
        return $this->nbsg;
    }

    public function setNbsg(string $nbsg): self
    {
        $this->nbsg = $nbsg;

        return $this;
    }

    public function getNbdb(): ?string
    {
        return $this->nbdb;
    }

    public function setNbdb(string $nbdb): self
    {
        $this->nbdb = $nbdb;

        return $this;
    }

    public function getNbtpl(): ?string
    {
        return $this->nbtpl;
    }

    public function setNbtpl(string $nbtpl): self
    {
        $this->nbtpl = $nbtpl;

        return $this;
    }

    public function getNbquad(): ?string
    {
        return $this->nbquad;
    }

    public function setNbquad(string $nbquad): self
    {
        $this->nbquad = $nbquad;

        return $this;
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

    public function getTaxe(): ?string
    {
        return $this->taxe;
    }

    public function setTaxe(string $taxe): self
    {
        $this->taxe = $taxe;

        return $this;
    }

    public function getNbtaxe(): ?string
    {
        return $this->nbtaxe;
    }

    public function setNbtaxe(string $nbtaxe): self
    {
        $this->nbtaxe = $nbtaxe;

        return $this;
    }

    public function getCarte(): ?string
    {
        return $this->carte;
    }

    public function setCarte(string $carte): self
    {
        $this->carte = $carte;

        return $this;
    }

    public function getNbcarte(): ?string
    {
        return $this->nbcarte;
    }

    public function setNbcarte(string $nbcarte): self
    {
        $this->nbcarte = $nbcarte;

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

    public function getNbfrais(): ?string
    {
        return $this->nbfrais;
    }

    public function setNbfrais(string $nbfrais): self
    {
        $this->nbfrais = $nbfrais;

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

    public function getNbtaxe2(): ?string
    {
        return $this->nbtaxe2;
    }

    public function setNbtaxe2(string $nbtaxe2): self
    {
        $this->nbtaxe2 = $nbtaxe2;

        return $this;
    }

    public function getLibassur(): ?string
    {
        return $this->libassur;
    }

    public function setLibassur(string $libassur): self
    {
        $this->libassur = $libassur;

        return $this;
    }

    public function getAssist(): ?string
    {
        return $this->assist;
    }

    public function setAssist(string $assist): self
    {
        $this->assist = $assist;

        return $this;
    }

    public function getNbassist(): ?string
    {
        return $this->nbassist;
    }

    public function setNbassist(string $nbassist): self
    {
        $this->nbassist = $nbassist;

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

    public function getHorscomiss(): ?string
    {
        return $this->horscomiss;
    }

    public function setHorscomiss(string $horscomiss): self
    {
        $this->horscomiss = $horscomiss;

        return $this;
    }

    public function getMontcomiss(): ?string
    {
        return $this->montcomiss;
    }

    public function setMontcomiss(string $montcomiss): self
    {
        $this->montcomiss = $montcomiss;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getRegle(): ?string
    {
        return $this->regle;
    }

    public function setRegle(string $regle): self
    {
        $this->regle = $regle;

        return $this;
    }

    public function getVendeur(): ?string
    {
        return $this->vendeur;
    }

    public function setVendeur(string $vendeur): self
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    public function getVotrecontact(): ?string
    {
        return $this->votrecontact;
    }

    public function setVotrecontact(string $votrecontact): self
    {
        $this->votrecontact = $votrecontact;

        return $this;
    }

    public function getNotrecontact(): ?string
    {
        return $this->notrecontact;
    }

    public function setNotrecontact(string $notrecontact): self
    {
        $this->notrecontact = $notrecontact;

        return $this;
    }

    public function getNomutil(): ?string
    {
        return $this->nomutil;
    }

    public function setNomutil(string $nomutil): self
    {
        $this->nomutil = $nomutil;

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

    public function getDatemodif(): ?\DateTimeInterface
    {
        return $this->datemodif;
    }

    public function setDatemodif(\DateTimeInterface $datemodif): self
    {
        $this->datemodif = $datemodif;

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

    public function getRefresa(): ?string
    {
        return $this->refresa;
    }

    public function setRefresa(string $refresa): self
    {
        $this->refresa = $refresa;

        return $this;
    }

    public function getLibporteur(): ?string
    {
        return $this->libporteur;
    }

    public function setLibporteur(string $libporteur): self
    {
        $this->libporteur = $libporteur;

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

    public function getObs1(): ?string
    {
        return $this->obs1;
    }

    public function setObs1(string $obs1): self
    {
        $this->obs1 = $obs1;

        return $this;
    }

    public function getObs2(): ?string
    {
        return $this->obs2;
    }

    public function setObs2(string $obs2): self
    {
        $this->obs2 = $obs2;

        return $this;
    }

    public function getImpfact(): ?\DateTimeInterface
    {
        return $this->impfact;
    }

    public function setImpfact(\DateTimeInterface $impfact): self
    {
        $this->impfact = $impfact;

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

    public function getDateassist(): ?\DateTimeInterface
    {
        return $this->dateassist;
    }

    public function setDateassist(\DateTimeInterface $dateassist): self
    {
        $this->dateassist = $dateassist;

        return $this;
    }

    public function getCodeprod1(): ?string
    {
        return $this->codeprod1;
    }

    public function setCodeprod1(string $codeprod1): self
    {
        $this->codeprod1 = $codeprod1;

        return $this;
    }

    public function getLibprod1(): ?string
    {
        return $this->libprod1;
    }

    public function setLibprod1(string $libprod1): self
    {
        $this->libprod1 = $libprod1;

        return $this;
    }

    public function getEntree1(): ?\DateTimeInterface
    {
        return $this->entree1;
    }

    public function setEntree1(\DateTimeInterface $entree1): self
    {
        $this->entree1 = $entree1;

        return $this;
    }

    public function getSortie1(): ?\DateTimeInterface
    {
        return $this->sortie1;
    }

    public function setSortie1(\DateTimeInterface $sortie1): self
    {
        $this->sortie1 = $sortie1;

        return $this;
    }

    public function getNbsg1(): ?string
    {
        return $this->nbsg1;
    }

    public function setNbsg1(string $nbsg1): self
    {
        $this->nbsg1 = $nbsg1;

        return $this;
    }

    public function getNbdb1(): ?string
    {
        return $this->nbdb1;
    }

    public function setNbdb1(string $nbdb1): self
    {
        $this->nbdb1 = $nbdb1;

        return $this;
    }

    public function getNbtpl1(): ?string
    {
        return $this->nbtpl1;
    }

    public function setNbtpl1(string $nbtpl1): self
    {
        $this->nbtpl1 = $nbtpl1;

        return $this;
    }

    public function getNbquad1(): ?string
    {
        return $this->nbquad1;
    }

    public function setNbquad1(string $nbquad1): self
    {
        $this->nbquad1 = $nbquad1;

        return $this;
    }

    public function getLibprest1(): ?string
    {
        return $this->libprest1;
    }

    public function setLibprest1(string $libprest1): self
    {
        $this->libprest1 = $libprest1;

        return $this;
    }

    public function getCodeprod2(): ?string
    {
        return $this->codeprod2;
    }

    public function setCodeprod2(string $codeprod2): self
    {
        $this->codeprod2 = $codeprod2;

        return $this;
    }

    public function getLibprod2(): ?string
    {
        return $this->libprod2;
    }

    public function setLibprod2(string $libprod2): self
    {
        $this->libprod2 = $libprod2;

        return $this;
    }

    public function getEntree2(): ?\DateTimeInterface
    {
        return $this->entree2;
    }

    public function setEntree2(\DateTimeInterface $entree2): self
    {
        $this->entree2 = $entree2;

        return $this;
    }

    public function getSortie2(): ?\DateTimeInterface
    {
        return $this->sortie2;
    }

    public function setSortie2(\DateTimeInterface $sortie2): self
    {
        $this->sortie2 = $sortie2;

        return $this;
    }

    public function getNbsg2(): ?string
    {
        return $this->nbsg2;
    }

    public function setNbsg2(string $nbsg2): self
    {
        $this->nbsg2 = $nbsg2;

        return $this;
    }

    public function getNbdb2(): ?string
    {
        return $this->nbdb2;
    }

    public function setNbdb2(string $nbdb2): self
    {
        $this->nbdb2 = $nbdb2;

        return $this;
    }

    public function getNbtpl2(): ?string
    {
        return $this->nbtpl2;
    }

    public function setNbtpl2(string $nbtpl2): self
    {
        $this->nbtpl2 = $nbtpl2;

        return $this;
    }

    public function getNbquad2(): ?string
    {
        return $this->nbquad2;
    }

    public function setNbquad2(string $nbquad2): self
    {
        $this->nbquad2 = $nbquad2;

        return $this;
    }

    public function getLibprest2(): ?string
    {
        return $this->libprest2;
    }

    public function setLibprest2(string $libprest2): self
    {
        $this->libprest2 = $libprest2;

        return $this;
    }

    public function getCodeprod3(): ?string
    {
        return $this->codeprod3;
    }

    public function setCodeprod3(string $codeprod3): self
    {
        $this->codeprod3 = $codeprod3;

        return $this;
    }

    public function getLibprod3(): ?string
    {
        return $this->libprod3;
    }

    public function setLibprod3(string $libprod3): self
    {
        $this->libprod3 = $libprod3;

        return $this;
    }

    public function getEntree3(): ?\DateTimeInterface
    {
        return $this->entree3;
    }

    public function setEntree3(\DateTimeInterface $entree3): self
    {
        $this->entree3 = $entree3;

        return $this;
    }

    public function getSortie3(): ?\DateTimeInterface
    {
        return $this->sortie3;
    }

    public function setSortie3(\DateTimeInterface $sortie3): self
    {
        $this->sortie3 = $sortie3;

        return $this;
    }

    public function getNbsg3(): ?string
    {
        return $this->nbsg3;
    }

    public function setNbsg3(string $nbsg3): self
    {
        $this->nbsg3 = $nbsg3;

        return $this;
    }

    public function getNbdb3(): ?string
    {
        return $this->nbdb3;
    }

    public function setNbdb3(string $nbdb3): self
    {
        $this->nbdb3 = $nbdb3;

        return $this;
    }

    public function getNbtpl3(): ?string
    {
        return $this->nbtpl3;
    }

    public function setNbtpl3(string $nbtpl3): self
    {
        $this->nbtpl3 = $nbtpl3;

        return $this;
    }

    public function getNbquad3(): ?string
    {
        return $this->nbquad3;
    }

    public function setNbquad3(string $nbquad3): self
    {
        $this->nbquad3 = $nbquad3;

        return $this;
    }

    public function getLibprest3(): ?string
    {
        return $this->libprest3;
    }

    public function setLibprest3(string $libprest3): self
    {
        $this->libprest3 = $libprest3;

        return $this;
    }

    public function getMontant1(): ?string
    {
        return $this->montant1;
    }

    public function setMontant1(string $montant1): self
    {
        $this->montant1 = $montant1;

        return $this;
    }

    public function getMontant2(): ?string
    {
        return $this->montant2;
    }

    public function setMontant2(string $montant2): self
    {
        $this->montant2 = $montant2;

        return $this;
    }

    public function getMontant3(): ?string
    {
        return $this->montant3;
    }

    public function setMontant3(string $montant3): self
    {
        $this->montant3 = $montant3;

        return $this;
    }

    public function getMontant4(): ?string
    {
        return $this->montant4;
    }

    public function setMontant4(string $montant4): self
    {
        $this->montant4 = $montant4;

        return $this;
    }

    public function getContingent(): ?string
    {
        return $this->contingent;
    }

    public function setContingent(string $contingent): self
    {
        $this->contingent = $contingent;

        return $this;
    }

    public function getConfhotel(): ?string
    {
        return $this->confhotel;
    }

    public function setConfhotel(string $confhotel): self
    {
        $this->confhotel = $confhotel;

        return $this;
    }

    public function getProduction(): ?string
    {
        return $this->production;
    }

    public function setProduction(string $production): self
    {
        $this->production = $production;

        return $this;
    }

    public function getGenregle(): ?string
    {
        return $this->genregle;
    }

    public function setGenregle(string $genregle): self
    {
        $this->genregle = $genregle;

        return $this;
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

    public function getAchathot(): ?string
    {
        return $this->achathot;
    }

    public function setAchathot(string $achathot): self
    {
        $this->achathot = $achathot;

        return $this;
    }

    public function getLibville(): ?string
    {
        return $this->libville;
    }

    public function setLibville(string $libville): self
    {
        $this->libville = $libville;

        return $this;
    }

    public function getTransfert(): ?string
    {
        return $this->transfert;
    }

    public function setTransfert(string $transfert): self
    {
        $this->transfert = $transfert;

        return $this;
    }

    public function getTypefact(): ?string
    {
        return $this->typefact;
    }

    public function setTypefact(string $typefact): self
    {
        $this->typefact = $typefact;

        return $this;
    }

    public function getNbvol(): ?string
    {
        return $this->nbvol;
    }

    public function setNbvol(string $nbvol): self
    {
        $this->nbvol = $nbvol;

        return $this;
    }

    public function getCureonly(): ?string
    {
        return $this->cureonly;
    }

    public function setCureonly(string $cureonly): self
    {
        $this->cureonly = $cureonly;

        return $this;
    }

    public function getRecufou(): ?int
    {
        return $this->recufou;
    }

    public function setRecufou(int $recufou): self
    {
        $this->recufou = $recufou;

        return $this;
    }

    public function getCodepromo(): ?string
    {
        return $this->codepromo;
    }

    public function setCodepromo(string $codepromo): self
    {
        $this->codepromo = $codepromo;

        return $this;
    }

    public function getPrixpromo(): ?int
    {
        return $this->prixpromo;
    }

    public function setPrixpromo(int $prixpromo): self
    {
        $this->prixpromo = $prixpromo;

        return $this;
    }

    public function getDatecompta(): ?\DateTimeInterface
    {
        return $this->datecompta;
    }

    public function setDatecompta(\DateTimeInterface $datecompta): self
    {
        $this->datecompta = $datecompta;

        return $this;
    }

    public function getDatecompta2(): ?\DateTimeInterface
    {
        return $this->datecompta2;
    }

    public function setDatecompta2(\DateTimeInterface $datecompta2): self
    {
        $this->datecompta2 = $datecompta2;

        return $this;
    }

    public function getCompta2(): ?string
    {
        return $this->compta2;
    }

    public function setCompta2(string $compta2): self
    {
        $this->compta2 = $compta2;

        return $this;
    }

    public function getInfinityDossier(): ?bool
    {
        return $this->infinityDossier;
    }

    public function setInfinityDossier(bool $infinityDossier): self
    {
        $this->infinityDossier = $infinityDossier;

        return $this;
    }


}
