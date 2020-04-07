<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convo
 *
 * @ORM\Table(name="CONVO")
 * @ORM\Entity
 */
class Convo
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCONVO", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqconvo;

    /**
     * @var string
     *
     * @ORM\Column(name="VILLED", type="string", length=3, nullable=false)
     */
    private $villed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIEUCONVO", type="string", length=30, nullable=false)
     */
    private $lieuconvo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTOIR", type="string", length=30, nullable=false)
     */
    private $comptoir = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PORTE", type="string", length=30, nullable=false)
     */
    private $porte = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AGENCE", type="string", length=30, nullable=false)
     */
    private $agence = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REMIS1", type="string", length=30, nullable=false)
     */
    private $remis1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REMIS2", type="string", length=30, nullable=false)
     */
    private $remis2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CARTERING", type="string", length=30, nullable=false)
     */
    private $cartering = '';

    public function getSeqconvo(): ?string
    {
        return $this->seqconvo;
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

    public function getLieuconvo(): ?string
    {
        return $this->lieuconvo;
    }

    public function setLieuconvo(string $lieuconvo): self
    {
        $this->lieuconvo = $lieuconvo;

        return $this;
    }

    public function getComptoir(): ?string
    {
        return $this->comptoir;
    }

    public function setComptoir(string $comptoir): self
    {
        $this->comptoir = $comptoir;

        return $this;
    }

    public function getPorte(): ?string
    {
        return $this->porte;
    }

    public function setPorte(string $porte): self
    {
        $this->porte = $porte;

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

    public function getRemis1(): ?string
    {
        return $this->remis1;
    }

    public function setRemis1(string $remis1): self
    {
        $this->remis1 = $remis1;

        return $this;
    }

    public function getRemis2(): ?string
    {
        return $this->remis2;
    }

    public function setRemis2(string $remis2): self
    {
        $this->remis2 = $remis2;

        return $this;
    }

    public function getCartering(): ?string
    {
        return $this->cartering;
    }

    public function setCartering(string $cartering): self
    {
        $this->cartering = $cartering;

        return $this;
    }


}
