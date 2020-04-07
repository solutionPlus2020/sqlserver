<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Four
 *
 * @ORM\Table(name="FOUR")
 * @ORM\Entity
 */
class Four
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQFOUR", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * @ORM\Column(name="ABRV", type="string", length=20, nullable=false)
     */
    private $abrv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE1", type="string", length=60, nullable=false)
     */
    private $adresse1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE2", type="string", length=40, nullable=false)
     */
    private $adresse2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CP", type="string", length=8, nullable=false)
     */
    private $cp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLE", type="string", length=30, nullable=false)
     */
    private $ville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PAYS", type="string", length=30, nullable=false)
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
     * @ORM\Column(name="FAX", type="string", length=20, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=60, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT", type="string", length=20, nullable=false)
     */
    private $contact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PATRON", type="string", length=20, nullable=false)
     */
    private $patron = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CCOMPTA", type="string", length=9, nullable=false)
     */
    private $ccompta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBMONNAIE", type="string", length=3, nullable=false)
     */
    private $libmonnaie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REGIME", type="string", length=10, nullable=false)
     */
    private $regime = '';

    /**
     * @var string
     *
     * @ORM\Column(name="RANGEE", type="string", length=30, nullable=false)
     */
    private $rangee = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQ", type="string", length=30, nullable=false)
     */
    private $banq = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQAD1", type="string", length=30, nullable=false)
     */
    private $banqad1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQAD2", type="string", length=30, nullable=false)
     */
    private $banqad2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQCP", type="string", length=8, nullable=false)
     */
    private $banqcp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQVILLE", type="string", length=20, nullable=false)
     */
    private $banqville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQCPT", type="string", length=40, nullable=false)
     */
    private $banqcpt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="BANQSWF", type="string", length=40, nullable=false)
     */
    private $banqswf = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIEN1", type="string", length=10, nullable=false)
     */
    private $lien1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIEN2", type="string", length=10, nullable=false)
     */
    private $lien2 = '';

    public function getSeqfour(): ?string
    {
        return $this->seqfour;
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

    public function getAbrv(): ?string
    {
        return $this->abrv;
    }

    public function setAbrv(string $abrv): self
    {
        $this->abrv = $abrv;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    public function setAdresse1(string $adresse1): self
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(string $adresse2): self
    {
        $this->adresse2 = $adresse2;

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

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

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

    public function getCcompta(): ?string
    {
        return $this->ccompta;
    }

    public function setCcompta(string $ccompta): self
    {
        $this->ccompta = $ccompta;

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

    public function getRegime(): ?string
    {
        return $this->regime;
    }

    public function setRegime(string $regime): self
    {
        $this->regime = $regime;

        return $this;
    }

    public function getRangee(): ?string
    {
        return $this->rangee;
    }

    public function setRangee(string $rangee): self
    {
        $this->rangee = $rangee;

        return $this;
    }

    public function getBanq(): ?string
    {
        return $this->banq;
    }

    public function setBanq(string $banq): self
    {
        $this->banq = $banq;

        return $this;
    }

    public function getBanqad1(): ?string
    {
        return $this->banqad1;
    }

    public function setBanqad1(string $banqad1): self
    {
        $this->banqad1 = $banqad1;

        return $this;
    }

    public function getBanqad2(): ?string
    {
        return $this->banqad2;
    }

    public function setBanqad2(string $banqad2): self
    {
        $this->banqad2 = $banqad2;

        return $this;
    }

    public function getBanqcp(): ?string
    {
        return $this->banqcp;
    }

    public function setBanqcp(string $banqcp): self
    {
        $this->banqcp = $banqcp;

        return $this;
    }

    public function getBanqville(): ?string
    {
        return $this->banqville;
    }

    public function setBanqville(string $banqville): self
    {
        $this->banqville = $banqville;

        return $this;
    }

    public function getBanqcpt(): ?string
    {
        return $this->banqcpt;
    }

    public function setBanqcpt(string $banqcpt): self
    {
        $this->banqcpt = $banqcpt;

        return $this;
    }

    public function getBanqswf(): ?string
    {
        return $this->banqswf;
    }

    public function setBanqswf(string $banqswf): self
    {
        $this->banqswf = $banqswf;

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

    public function getLien1(): ?string
    {
        return $this->lien1;
    }

    public function setLien1(string $lien1): self
    {
        $this->lien1 = $lien1;

        return $this;
    }

    public function getLien2(): ?string
    {
        return $this->lien2;
    }

    public function setLien2(string $lien2): self
    {
        $this->lien2 = $lien2;

        return $this;
    }


}
