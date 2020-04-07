<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="VILLE")
 * @ORM\Entity
 */
class Ville
{
    /**
     * @var string
     *
     * @ORM\Column(name="AERO", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aero;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBVILLE", type="string", length=20, nullable=false)
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
     * @ORM\Column(name="AGENCE", type="string", length=30, nullable=false)
     */
    private $agence = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TEL", type="string", length=20, nullable=false)
     */
    private $tel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PLACE", type="string", length=8, nullable=false)
     */
    private $place = '';

    /**
     * @var string
     *
     * @ORM\Column(name="codeiata", type="string", length=3, nullable=false)
     */
    private $codeiata = '';

    public function getAero(): ?string
    {
        return $this->aero;
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

    public function getAgence(): ?string
    {
        return $this->agence;
    }

    public function setAgence(string $agence): self
    {
        $this->agence = $agence;

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

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getCodeiata(): ?string
    {
        return $this->codeiata;
    }

    public function setCodeiata(string $codeiata): self
    {
        $this->codeiata = $codeiata;

        return $this;
    }


}
