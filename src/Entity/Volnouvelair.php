<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Volnouvelair
 *
 * @ORM\Table(name="VolNouvelAir")
 * @ORM\Entity
 */
class Volnouvelair
{
    /**
     * @var int
     *
     * @ORM\Column(name="SeqVolNouvelAir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqvolnouvelair;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleD", type="string", length=3, nullable=false)
     */
    private $villed;

    /**
     * @var string
     *
     * @ORM\Column(name="VilleA", type="string", length=3, nullable=false)
     */
    private $villea;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateVol", type="datetime", nullable=false)
     */
    private $datevol;

    /**
     * @var string
     *
     * @ORM\Column(name="NVol", type="string", length=8, nullable=false)
     */
    private $nvol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HeureD", type="string", length=4, nullable=false)
     */
    private $heured = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HeureA", type="string", length=4, nullable=false)
     */
    private $heurea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Prix", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Taxe", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="KG", type="integer", nullable=false)
     */
    private $kg = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateVolR", type="datetime", nullable=false)
     */
    private $datevolr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NVolR", type="string", length=8, nullable=false)
     */
    private $nvolr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HeureRD", type="string", length=4, nullable=false)
     */
    private $heurerd = '';

    /**
     * @var string
     *
     * @ORM\Column(name="HeureRA", type="string", length=4, nullable=false)
     */
    private $heurera = '';

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

    /**
     * @var int
     *
     * @ORM\Column(name="SeqVolD", type="integer", nullable=false)
     */
    private $seqvold = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="SeqVolR", type="integer", nullable=false)
     */
    private $seqvolr = '0';

    public function getSeqvolnouvelair(): ?int
    {
        return $this->seqvolnouvelair;
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

    public function getDatevol(): ?\DateTimeInterface
    {
        return $this->datevol;
    }

    public function setDatevol(\DateTimeInterface $datevol): self
    {
        $this->datevol = $datevol;

        return $this;
    }

    public function getNvol(): ?string
    {
        return $this->nvol;
    }

    public function setNvol(string $nvol): self
    {
        $this->nvol = $nvol;

        return $this;
    }

    public function getHeured(): ?string
    {
        return $this->heured;
    }

    public function setHeured(string $heured): self
    {
        $this->heured = $heured;

        return $this;
    }

    public function getHeurea(): ?string
    {
        return $this->heurea;
    }

    public function setHeurea(string $heurea): self
    {
        $this->heurea = $heurea;

        return $this;
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

    public function getKg(): ?int
    {
        return $this->kg;
    }

    public function setKg(int $kg): self
    {
        $this->kg = $kg;

        return $this;
    }

    public function getDatevolr(): ?\DateTimeInterface
    {
        return $this->datevolr;
    }

    public function setDatevolr(\DateTimeInterface $datevolr): self
    {
        $this->datevolr = $datevolr;

        return $this;
    }

    public function getNvolr(): ?string
    {
        return $this->nvolr;
    }

    public function setNvolr(string $nvolr): self
    {
        $this->nvolr = $nvolr;

        return $this;
    }

    public function getHeurerd(): ?string
    {
        return $this->heurerd;
    }

    public function setHeurerd(string $heurerd): self
    {
        $this->heurerd = $heurerd;

        return $this;
    }

    public function getHeurera(): ?string
    {
        return $this->heurera;
    }

    public function setHeurera(string $heurera): self
    {
        $this->heurera = $heurera;

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

    public function getSeqvold(): ?int
    {
        return $this->seqvold;
    }

    public function setSeqvold(int $seqvold): self
    {
        $this->seqvold = $seqvold;

        return $this;
    }

    public function getSeqvolr(): ?int
    {
        return $this->seqvolr;
    }

    public function setSeqvolr(int $seqvolr): self
    {
        $this->seqvolr = $seqvolr;

        return $this;
    }


}
