<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConditionClient
 *
 * @ORM\Table(name="Condition_Client")
 * @ORM\Entity
 */
class ConditionClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="seqcondclient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqcondclient;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions1", type="string", length=80, nullable=false)
     */
    private $conditions1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions2", type="string", length=80, nullable=false)
     */
    private $conditions2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions3", type="string", length=80, nullable=false)
     */
    private $conditions3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions4", type="string", length=80, nullable=false)
     */
    private $conditions4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions5", type="string", length=80, nullable=false)
     */
    private $conditions5 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conditions6", type="string", length=80, nullable=false)
     */
    private $conditions6 = '';

    public function getSeqcondclient(): ?int
    {
        return $this->seqcondclient;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getConditions1(): ?string
    {
        return $this->conditions1;
    }

    public function setConditions1(string $conditions1): self
    {
        $this->conditions1 = $conditions1;

        return $this;
    }

    public function getConditions2(): ?string
    {
        return $this->conditions2;
    }

    public function setConditions2(string $conditions2): self
    {
        $this->conditions2 = $conditions2;

        return $this;
    }

    public function getConditions3(): ?string
    {
        return $this->conditions3;
    }

    public function setConditions3(string $conditions3): self
    {
        $this->conditions3 = $conditions3;

        return $this;
    }

    public function getConditions4(): ?string
    {
        return $this->conditions4;
    }

    public function setConditions4(string $conditions4): self
    {
        $this->conditions4 = $conditions4;

        return $this;
    }

    public function getConditions5(): ?string
    {
        return $this->conditions5;
    }

    public function setConditions5(string $conditions5): self
    {
        $this->conditions5 = $conditions5;

        return $this;
    }

    public function getConditions6(): ?string
    {
        return $this->conditions6;
    }

    public function setConditions6(string $conditions6): self
    {
        $this->conditions6 = $conditions6;

        return $this;
    }


}
