<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table(name="PARAMETRE")
 * @ORM\Entity
 */
class Parametre
{
    /**
     * @var string
     *
     * @ORM\Column(name="seqparam", type="decimal", precision=2, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqparam;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTETE1", type="string", length=25, nullable=false)
     */
    private $entete1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ENTETE2", type="string", length=25, nullable=false)
     */
    private $entete2;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=30, nullable=false)
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
     * @ORM\Column(name="VILLE", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="TEL", type="string", length=16, nullable=false)
     */
    private $tel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=16, nullable=false)
     */
    private $fax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTFR", type="string", length=50, nullable=false)
     */
    private $contactfr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT", type="string", length=50, nullable=false)
     */
    private $contact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="EURO", type="decimal", precision=9, scale=5, nullable=false)
     */
    private $euro = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="expediteur", type="string", length=50, nullable=false)
     */
    private $expediteur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ALERTE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $alerte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="btobvol", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $btobvol = '0';

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
     * @ORM\Column(name="TEL4", type="string", length=20, nullable=false)
     */
    private $tel4 = '';

    public function getSeqparam(): ?string
    {
        return $this->seqparam;
    }

    public function getEntete1(): ?string
    {
        return $this->entete1;
    }

    public function setEntete1(string $entete1): self
    {
        $this->entete1 = $entete1;

        return $this;
    }

    public function getEntete2(): ?string
    {
        return $this->entete2;
    }

    public function setEntete2(string $entete2): self
    {
        $this->entete2 = $entete2;

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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

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

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function setSeqresa(string $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getContactfr(): ?string
    {
        return $this->contactfr;
    }

    public function setContactfr(string $contactfr): self
    {
        $this->contactfr = $contactfr;

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

    public function getEuro(): ?string
    {
        return $this->euro;
    }

    public function setEuro(string $euro): self
    {
        $this->euro = $euro;

        return $this;
    }

    public function getExpediteur(): ?string
    {
        return $this->expediteur;
    }

    public function setExpediteur(string $expediteur): self
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    public function getAlerte(): ?string
    {
        return $this->alerte;
    }

    public function setAlerte(string $alerte): self
    {
        $this->alerte = $alerte;

        return $this;
    }

    public function getBtobvol(): ?string
    {
        return $this->btobvol;
    }

    public function setBtobvol(string $btobvol): self
    {
        $this->btobvol = $btobvol;

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

    public function getTel4(): ?string
    {
        return $this->tel4;
    }

    public function setTel4(string $tel4): self
    {
        $this->tel4 = $tel4;

        return $this;
    }


}
