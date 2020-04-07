<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parcoursgds
 *
 * @ORM\Table(name="ParcoursGDS")
 * @ORM\Entity
 */
class Parcoursgds
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdParcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparcours;

    /**
     * @var string
     *
     * @ORM\Column(name="AeroD", type="string", length=3, nullable=false)
     */
    private $aerod;

    /**
     * @var string
     *
     * @ORM\Column(name="AeroA", type="string", length=3, nullable=false)
     */
    private $aeroa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateD", type="date", nullable=false)
     */
    private $dated;

    /**
     * @var string
     *
     * @ORM\Column(name="AeroRD", type="string", length=3, nullable=false)
     */
    private $aerord;

    /**
     * @var string
     *
     * @ORM\Column(name="AeroRA", type="string", length=3, nullable=false)
     */
    private $aerora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateR", type="date", nullable=false)
     */
    private $dater;

    /**
     * @var string
     *
     * @ORM\Column(name="ParamsA", type="string", length=2000, nullable=false)
     */
    private $paramsa;

    /**
     * @var string
     *
     * @ORM\Column(name="ParamsR", type="string", length=2000, nullable=false)
     */
    private $paramsr;

    /**
     * @var string
     *
     * @ORM\Column(name="Compagnie", type="string", length=2, nullable=false)
     */
    private $compagnie;

    public function getIdparcours(): ?int
    {
        return $this->idparcours;
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

    public function getDated(): ?\DateTimeInterface
    {
        return $this->dated;
    }

    public function setDated(\DateTimeInterface $dated): self
    {
        $this->dated = $dated;

        return $this;
    }

    public function getAerord(): ?string
    {
        return $this->aerord;
    }

    public function setAerord(string $aerord): self
    {
        $this->aerord = $aerord;

        return $this;
    }

    public function getAerora(): ?string
    {
        return $this->aerora;
    }

    public function setAerora(string $aerora): self
    {
        $this->aerora = $aerora;

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

    public function getParamsa(): ?string
    {
        return $this->paramsa;
    }

    public function setParamsa(string $paramsa): self
    {
        $this->paramsa = $paramsa;

        return $this;
    }

    public function getParamsr(): ?string
    {
        return $this->paramsr;
    }

    public function setParamsr(string $paramsr): self
    {
        $this->paramsr = $paramsr;

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


}
