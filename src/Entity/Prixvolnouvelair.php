<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prixvolnouvelair
 *
 * @ORM\Table(name="PrixVolNouvelAir")
 * @ORM\Entity
 */
class Prixvolnouvelair
{
    /**
     * @var int
     *
     * @ORM\Column(name="SeqVolD", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqvold;

    /**
     * @var int
     *
     * @ORM\Column(name="SeqVolR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqvolr;

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="Taxe", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxe;

    /**
     * @var string
     *
     * @ORM\Column(name="KG", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $kg;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTransportAxeD", type="string", length=20, nullable=false)
     */
    private $codetransportaxed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTransportAxeR", type="string", length=20, nullable=false)
     */
    private $codetransportaxer = '';

    public function getSeqvold(): ?int
    {
        return $this->seqvold;
    }

    public function getSeqvolr(): ?int
    {
        return $this->seqvolr;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTaxe(): ?string
    {
        return $this->taxe;
    }

    public function setTaxe(string $taxe): self
    {
        $this->taxe = $taxe;

        return $this;
    }

    public function getKg(): ?string
    {
        return $this->kg;
    }

    public function setKg(string $kg): self
    {
        $this->kg = $kg;

        return $this;
    }

    public function getCodetransportaxed(): ?string
    {
        return $this->codetransportaxed;
    }

    public function setCodetransportaxed(string $codetransportaxed): self
    {
        $this->codetransportaxed = $codetransportaxed;

        return $this;
    }

    public function getCodetransportaxer(): ?string
    {
        return $this->codetransportaxer;
    }

    public function setCodetransportaxer(string $codetransportaxer): self
    {
        $this->codetransportaxer = $codetransportaxer;

        return $this;
    }


}
