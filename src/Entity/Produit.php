<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="PRODUIT", indexes={@ORM\Index(name="CodeProd", columns={"LIBVILLE", "confirmation", "CODEPROD"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="LIBGROUPE", type="string", length=20, nullable=false)
     */
    private $libgroupe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=50, nullable=false)
     */
    private $adresse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=10, nullable=false)
     */
    private $cp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBVILLE", type="string", length=30, nullable=false)
     */
    private $libville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=30, nullable=false)
     */
    private $libpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PATRON", type="string", length=20, nullable=false)
     */
    private $patron = '';

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=200, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TEL1", type="string", length=30, nullable=false)
     */
    private $tel1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TEL2", type="string", length=30, nullable=false)
     */
    private $tel2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FAXHOTEL", type="string", length=30, nullable=false)
     */
    private $faxhotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FAXRESA", type="string", length=30, nullable=false)
     */
    private $faxresa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ADRESSE", type="string", length=50, nullable=false)
     */
    private $cAdresse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_CP", type="string", length=10, nullable=false)
     */
    private $cCp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_LIBVILLE", type="string", length=30, nullable=false)
     */
    private $cLibville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_LIBPAYS", type="string", length=30, nullable=false)
     */
    private $cLibpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_PATRON", type="string", length=20, nullable=false)
     */
    private $cPatron = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_EMAIL", type="string", length=200, nullable=false)
     */
    private $cEmail = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_TEL1", type="string", length=30, nullable=false)
     */
    private $cTel1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_TEL2", type="string", length=30, nullable=false)
     */
    private $cTel2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_FAXHOTEL", type="string", length=30, nullable=false)
     */
    private $cFaxhotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_FAXRESA", type="string", length=30, nullable=false)
     */
    private $cFaxresa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBMONNAIE", type="string", length=3, nullable=false)
     */
    private $libmonnaie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST", type="string", length=80, nullable=false)
     */
    private $libprest = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDABLE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $vendable = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SANSPRIX", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $sansprix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMRECEPTIF", type="string", length=30, nullable=false)
     */
    private $nomreceptif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CHAMBRE1", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $chambre1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CHAMBRE2", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $chambre2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CHAMBRE3", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $chambre3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CHAMBRE4", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $chambre4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CHAMBRE5", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $chambre5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CHAMBRE6", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $chambre6 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TRANSFERT", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $transfert = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LOCATION", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $location = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTRAT", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $contrat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFOUR", type="string", length=4, nullable=false)
     */
    private $seqfour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMFOUR", type="string", length=40, nullable=false)
     */
    private $nomfour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CEE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $cee = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

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
     * @ORM\Column(name="confirmation", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $confirmation = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CATEG", type="string", length=10, nullable=false)
     */
    private $categ = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ARCHIVER", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $archiver = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AERO1", type="string", length=3, nullable=false)
     */
    private $aero1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AERO2", type="string", length=3, nullable=false)
     */
    private $aero2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="marge", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $marge = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="statut_vente", type="string", length=2, nullable=false)
     */
    private $statutVente = '';

    /**
     * @var int
     *
     * @ORM\Column(name="enfant_interdit", type="smallint", nullable=false)
     */
    private $enfantInterdit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bebe_interdit", type="smallint", nullable=false)
     */
    private $bebeInterdit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_SG", type="smallint", nullable=false)
     */
    private $okSg = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_DBL", type="smallint", nullable=false)
     */
    private $okDbl = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_DBL1", type="smallint", nullable=false)
     */
    private $okDbl1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_DBL2", type="smallint", nullable=false)
     */
    private $okDbl2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_TPL", type="smallint", nullable=false)
     */
    private $okTpl = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_TPL1", type="smallint", nullable=false)
     */
    private $okTpl1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_QUAD", type="smallint", nullable=false)
     */
    private $okQuad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_QUAD1", type="smallint", nullable=false)
     */
    private $okQuad1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OK_TPL2", type="smallint", nullable=false)
     */
    private $okTpl2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="envoi_bloque_rooming", type="integer", nullable=false)
     */
    private $envoiBloqueRooming = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODE_PRINCIPAL", type="string", length=4, nullable=false)
     */
    private $codePrincipal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="INFINY", type="integer", nullable=false)
     */
    private $infiny = '0';

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
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

    public function getLibgroupe(): ?string
    {
        return $this->libgroupe;
    }

    public function setLibgroupe(string $libgroupe): self
    {
        $this->libgroupe = $libgroupe;

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

    public function getLibville(): ?string
    {
        return $this->libville;
    }

    public function setLibville(string $libville): self
    {
        $this->libville = $libville;

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

    public function getPatron(): ?string
    {
        return $this->patron;
    }

    public function setPatron(string $patron): self
    {
        $this->patron = $patron;

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

    public function getFaxhotel(): ?string
    {
        return $this->faxhotel;
    }

    public function setFaxhotel(string $faxhotel): self
    {
        $this->faxhotel = $faxhotel;

        return $this;
    }

    public function getFaxresa(): ?string
    {
        return $this->faxresa;
    }

    public function setFaxresa(string $faxresa): self
    {
        $this->faxresa = $faxresa;

        return $this;
    }

    public function getCAdresse(): ?string
    {
        return $this->cAdresse;
    }

    public function setCAdresse(string $cAdresse): self
    {
        $this->cAdresse = $cAdresse;

        return $this;
    }

    public function getCCp(): ?string
    {
        return $this->cCp;
    }

    public function setCCp(string $cCp): self
    {
        $this->cCp = $cCp;

        return $this;
    }

    public function getCLibville(): ?string
    {
        return $this->cLibville;
    }

    public function setCLibville(string $cLibville): self
    {
        $this->cLibville = $cLibville;

        return $this;
    }

    public function getCLibpays(): ?string
    {
        return $this->cLibpays;
    }

    public function setCLibpays(string $cLibpays): self
    {
        $this->cLibpays = $cLibpays;

        return $this;
    }

    public function getCPatron(): ?string
    {
        return $this->cPatron;
    }

    public function setCPatron(string $cPatron): self
    {
        $this->cPatron = $cPatron;

        return $this;
    }

    public function getCEmail(): ?string
    {
        return $this->cEmail;
    }

    public function setCEmail(string $cEmail): self
    {
        $this->cEmail = $cEmail;

        return $this;
    }

    public function getCTel1(): ?string
    {
        return $this->cTel1;
    }

    public function setCTel1(string $cTel1): self
    {
        $this->cTel1 = $cTel1;

        return $this;
    }

    public function getCTel2(): ?string
    {
        return $this->cTel2;
    }

    public function setCTel2(string $cTel2): self
    {
        $this->cTel2 = $cTel2;

        return $this;
    }

    public function getCFaxhotel(): ?string
    {
        return $this->cFaxhotel;
    }

    public function setCFaxhotel(string $cFaxhotel): self
    {
        $this->cFaxhotel = $cFaxhotel;

        return $this;
    }

    public function getCFaxresa(): ?string
    {
        return $this->cFaxresa;
    }

    public function setCFaxresa(string $cFaxresa): self
    {
        $this->cFaxresa = $cFaxresa;

        return $this;
    }

    public function getLibmonnaie(): ?string
    {
        return $this->libmonnaie;
    }

    public function setLibmonnaie(string $libmonnaie): self
    {
        $this->libmonnaie = $libmonnaie;

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

    public function getVendable(): ?string
    {
        return $this->vendable;
    }

    public function setVendable(string $vendable): self
    {
        $this->vendable = $vendable;

        return $this;
    }

    public function getSansprix(): ?string
    {
        return $this->sansprix;
    }

    public function setSansprix(string $sansprix): self
    {
        $this->sansprix = $sansprix;

        return $this;
    }

    public function getNomreceptif(): ?string
    {
        return $this->nomreceptif;
    }

    public function setNomreceptif(string $nomreceptif): self
    {
        $this->nomreceptif = $nomreceptif;

        return $this;
    }

    public function getChambre1(): ?string
    {
        return $this->chambre1;
    }

    public function setChambre1(string $chambre1): self
    {
        $this->chambre1 = $chambre1;

        return $this;
    }

    public function getChambre2(): ?string
    {
        return $this->chambre2;
    }

    public function setChambre2(string $chambre2): self
    {
        $this->chambre2 = $chambre2;

        return $this;
    }

    public function getChambre3(): ?string
    {
        return $this->chambre3;
    }

    public function setChambre3(string $chambre3): self
    {
        $this->chambre3 = $chambre3;

        return $this;
    }

    public function getChambre4(): ?string
    {
        return $this->chambre4;
    }

    public function setChambre4(string $chambre4): self
    {
        $this->chambre4 = $chambre4;

        return $this;
    }

    public function getChambre5(): ?string
    {
        return $this->chambre5;
    }

    public function setChambre5(string $chambre5): self
    {
        $this->chambre5 = $chambre5;

        return $this;
    }

    public function getChambre6(): ?string
    {
        return $this->chambre6;
    }

    public function setChambre6(string $chambre6): self
    {
        $this->chambre6 = $chambre6;

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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->contrat;
    }

    public function setContrat(string $contrat): self
    {
        $this->contrat = $contrat;

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

    public function getNomfour(): ?string
    {
        return $this->nomfour;
    }

    public function setNomfour(string $nomfour): self
    {
        $this->nomfour = $nomfour;

        return $this;
    }

    public function getCee(): ?string
    {
        return $this->cee;
    }

    public function setCee(string $cee): self
    {
        $this->cee = $cee;

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

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): self
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getCateg(): ?string
    {
        return $this->categ;
    }

    public function setCateg(string $categ): self
    {
        $this->categ = $categ;

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

    public function getAero1(): ?string
    {
        return $this->aero1;
    }

    public function setAero1(string $aero1): self
    {
        $this->aero1 = $aero1;

        return $this;
    }

    public function getAero2(): ?string
    {
        return $this->aero2;
    }

    public function setAero2(string $aero2): self
    {
        $this->aero2 = $aero2;

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

    public function getStatutVente(): ?string
    {
        return $this->statutVente;
    }

    public function setStatutVente(string $statutVente): self
    {
        $this->statutVente = $statutVente;

        return $this;
    }

    public function getEnfantInterdit(): ?int
    {
        return $this->enfantInterdit;
    }

    public function setEnfantInterdit(int $enfantInterdit): self
    {
        $this->enfantInterdit = $enfantInterdit;

        return $this;
    }

    public function getBebeInterdit(): ?int
    {
        return $this->bebeInterdit;
    }

    public function setBebeInterdit(int $bebeInterdit): self
    {
        $this->bebeInterdit = $bebeInterdit;

        return $this;
    }

    public function getOkSg(): ?int
    {
        return $this->okSg;
    }

    public function setOkSg(int $okSg): self
    {
        $this->okSg = $okSg;

        return $this;
    }

    public function getOkDbl(): ?int
    {
        return $this->okDbl;
    }

    public function setOkDbl(int $okDbl): self
    {
        $this->okDbl = $okDbl;

        return $this;
    }

    public function getOkDbl1(): ?int
    {
        return $this->okDbl1;
    }

    public function setOkDbl1(int $okDbl1): self
    {
        $this->okDbl1 = $okDbl1;

        return $this;
    }

    public function getOkDbl2(): ?int
    {
        return $this->okDbl2;
    }

    public function setOkDbl2(int $okDbl2): self
    {
        $this->okDbl2 = $okDbl2;

        return $this;
    }

    public function getOkTpl(): ?int
    {
        return $this->okTpl;
    }

    public function setOkTpl(int $okTpl): self
    {
        $this->okTpl = $okTpl;

        return $this;
    }

    public function getOkTpl1(): ?int
    {
        return $this->okTpl1;
    }

    public function setOkTpl1(int $okTpl1): self
    {
        $this->okTpl1 = $okTpl1;

        return $this;
    }

    public function getOkQuad(): ?int
    {
        return $this->okQuad;
    }

    public function setOkQuad(int $okQuad): self
    {
        $this->okQuad = $okQuad;

        return $this;
    }

    public function getOkQuad1(): ?int
    {
        return $this->okQuad1;
    }

    public function setOkQuad1(int $okQuad1): self
    {
        $this->okQuad1 = $okQuad1;

        return $this;
    }

    public function getOkTpl2(): ?int
    {
        return $this->okTpl2;
    }

    public function setOkTpl2(int $okTpl2): self
    {
        $this->okTpl2 = $okTpl2;

        return $this;
    }

    public function getEnvoiBloqueRooming(): ?int
    {
        return $this->envoiBloqueRooming;
    }

    public function setEnvoiBloqueRooming(int $envoiBloqueRooming): self
    {
        $this->envoiBloqueRooming = $envoiBloqueRooming;

        return $this;
    }

    public function getCodePrincipal(): ?string
    {
        return $this->codePrincipal;
    }

    public function setCodePrincipal(string $codePrincipal): self
    {
        $this->codePrincipal = $codePrincipal;

        return $this;
    }

    public function getInfiny(): ?int
    {
        return $this->infiny;
    }

    public function setInfiny(int $infiny): self
    {
        $this->infiny = $infiny;

        return $this;
    }


}
