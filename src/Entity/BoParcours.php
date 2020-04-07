<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoParcours
 *
 * @ORM\Table(name="bo_parcours")
 * @ORM\Entity
 */
class BoParcours
{
    /**
     * @var int
     *
     * @ORM\Column(name="seqparcours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqparcours;

    /**
     * @var string
     *
     * @ORM\Column(name="aerod", type="string", length=3, nullable=false)
     */
    private $aerod;

    /**
     * @var string
     *
     * @ORM\Column(name="aeroa", type="string", length=3, nullable=false)
     */
    private $aeroa;

    /**
     * @var string
     *
     * @ORM\Column(name="villed", type="string", length=80, nullable=false)
     */
    private $villed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="villea", type="string", length=80, nullable=false)
     */
    private $villea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="compagnie", type="string", length=2, nullable=false)
     */
    private $compagnie;

    public function getSeqparcours(): ?int
    {
        return $this->seqparcours;
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

    public function getVilled(): ?string
    {
        return $this->villed;
    }

    public function setVilled(string $villed): self
    {
        $this->villed = $villed;

        return $this;
    }

    public function getVillea(): ?string
    {
        return $this->villea;
    }

    public function setVillea(string $villea): self
    {
        $this->villea = $villea;

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
