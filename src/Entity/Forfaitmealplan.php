<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forfaitmealplan
 *
 * @ORM\Table(name="ForfaitMealPlan")
 * @ORM\Entity
 */
class Forfaitmealplan
{
    /**
     * @var string
     *
     * @ORM\Column(name="RefNet", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refnet;

    /**
     * @var int
     *
     * @ORM\Column(name="IdRepas", type="integer", nullable=false)
     */
    private $idrepas;

    /**
     * @var int
     *
     * @ORM\Column(name="NbEtoile", type="integer", nullable=false)
     */
    private $nbetoile;

    public function getRefnet(): ?string
    {
        return $this->refnet;
    }

    public function getIdrepas(): ?int
    {
        return $this->idrepas;
    }

    public function setIdrepas(int $idrepas): self
    {
        $this->idrepas = $idrepas;

        return $this;
    }

    public function getNbetoile(): ?int
    {
        return $this->nbetoile;
    }

    public function setNbetoile(int $nbetoile): self
    {
        $this->nbetoile = $nbetoile;

        return $this;
    }


}
