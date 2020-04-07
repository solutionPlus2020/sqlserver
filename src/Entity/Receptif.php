<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receptif
 *
 * @ORM\Table(name="RECEPTIF")
 * @ORM\Entity
 */
class Receptif
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQRECEPTIF", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqreceptif;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMRECEPTIF", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomreceptif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ADRESSE", type="string", length=30, nullable=false)
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
     * @ORM\Column(name="LIBVILLE", type="string", length=20, nullable=false)
     */
    private $libville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=20, nullable=false)
     */
    private $libpays = '';

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
     * @ORM\Column(name="EMAIL", type="string", length=50, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT1", type="string", length=30, nullable=false)
     */
    private $contact1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACT2", type="string", length=30, nullable=false)
     */
    private $contact2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ESCALE1", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $escale1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ESCALE2", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $escale2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ESCALE3", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $escale3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ESCALE4", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $escale4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IDRECEPTIF", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $idreceptif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MDPRECEPTIF", type="string", length=50, nullable=false, options={"fixed"=true})
     */
    private $mdpreceptif = '';

    /**
     * @var int
     *
     * @ORM\Column(name="RESTRICTION_HOTEL", type="integer", nullable=false, options={"default"="1"})
     */
    private $restrictionHotel = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="HOTEL1", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $hotel1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HOTEL2", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $hotel2 = '';

    public function getSeqreceptif(): ?string
    {
        return $this->seqreceptif;
    }

    public function setSeqreceptif(string $seqreceptif): self
    {
        $this->seqreceptif = $seqreceptif;

        return $this;
    }

    public function getNomreceptif(): ?string
    {
        return $this->nomreceptif;
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

    public function getContact1(): ?string
    {
        return $this->contact1;
    }

    public function setContact1(string $contact1): self
    {
        $this->contact1 = $contact1;

        return $this;
    }

    public function getContact2(): ?string
    {
        return $this->contact2;
    }

    public function setContact2(string $contact2): self
    {
        $this->contact2 = $contact2;

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

    public function getEscale1(): ?string
    {
        return $this->escale1;
    }

    public function setEscale1(string $escale1): self
    {
        $this->escale1 = $escale1;

        return $this;
    }

    public function getEscale2(): ?string
    {
        return $this->escale2;
    }

    public function setEscale2(string $escale2): self
    {
        $this->escale2 = $escale2;

        return $this;
    }

    public function getEscale3(): ?string
    {
        return $this->escale3;
    }

    public function setEscale3(string $escale3): self
    {
        $this->escale3 = $escale3;

        return $this;
    }

    public function getEscale4(): ?string
    {
        return $this->escale4;
    }

    public function setEscale4(string $escale4): self
    {
        $this->escale4 = $escale4;

        return $this;
    }

    public function getIdreceptif(): ?string
    {
        return $this->idreceptif;
    }

    public function setIdreceptif(string $idreceptif): self
    {
        $this->idreceptif = $idreceptif;

        return $this;
    }

    public function getMdpreceptif(): ?string
    {
        return $this->mdpreceptif;
    }

    public function setMdpreceptif(string $mdpreceptif): self
    {
        $this->mdpreceptif = $mdpreceptif;

        return $this;
    }

    public function getRestrictionHotel(): ?int
    {
        return $this->restrictionHotel;
    }

    public function setRestrictionHotel(int $restrictionHotel): self
    {
        $this->restrictionHotel = $restrictionHotel;

        return $this;
    }

    public function getHotel1(): ?string
    {
        return $this->hotel1;
    }

    public function setHotel1(string $hotel1): self
    {
        $this->hotel1 = $hotel1;

        return $this;
    }

    public function getHotel2(): ?string
    {
        return $this->hotel2;
    }

    public function setHotel2(string $hotel2): self
    {
        $this->hotel2 = $hotel2;

        return $this;
    }


}
