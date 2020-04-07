<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curiste
 *
 * @ORM\Table(name="CURISTE")
 * @ORM\Entity
 */
class Curiste
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCURISTE", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqcuriste;

    /**
     * @var string
     *
     * @ORM\Column(name="CODECURISTE", type="string", length=4, nullable=false)
     */
    private $codecuriste = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCURISTE", type="string", length=30, nullable=false)
     */
    private $nomcuriste = '';

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
     * @ORM\Column(name="FAX", type="string", length=30, nullable=false)
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

    public function getSeqcuriste(): ?string
    {
        return $this->seqcuriste;
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


}
