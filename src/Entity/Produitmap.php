<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produitmap
 *
 * @ORM\Table(name="produitMap")
 * @ORM\Entity
 */
class Produitmap
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodeProd", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeprod;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=50, nullable=false)
     */
    private $latitude = '';

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=50, nullable=false)
     */
    private $longitude = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="Map", type="boolean", nullable=false)
     */
    private $map = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IdForfait", type="integer", nullable=false)
     */
    private $idforfait = '0';

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getMap(): ?bool
    {
        return $this->map;
    }

    public function setMap(bool $map): self
    {
        $this->map = $map;

        return $this;
    }

    public function getIdforfait(): ?int
    {
        return $this->idforfait;
    }

    public function setIdforfait(int $idforfait): self
    {
        $this->idforfait = $idforfait;

        return $this;
    }


}
