<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligfactc
 *
 * @ORM\Table(name="LIGFACTC")
 * @ORM\Entity
 */
class Ligfactc
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQLIGFACTC", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqligfactc;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $seqfact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCONTRAT", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqcontrat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOL", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $seqvol = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEVOL", type="datetime", nullable=false)
     */
    private $datevol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLED", type="string", length=3, nullable=false)
     */
    private $villed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VILLEA", type="string", length=3, nullable=false)
     */
    private $villea = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE", type="string", length=10, nullable=false)
     */
    private $libelle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SIEGE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $siege = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $total = '0';

    public function getSeqligfactc(): ?string
    {
        return $this->seqligfactc;
    }

    public function getSeqfact(): ?string
    {
        return $this->seqfact;
    }

    public function setSeqfact(string $seqfact): self
    {
        $this->seqfact = $seqfact;

        return $this;
    }

    public function getSeqcontrat(): ?string
    {
        return $this->seqcontrat;
    }

    public function setSeqcontrat(string $seqcontrat): self
    {
        $this->seqcontrat = $seqcontrat;

        return $this;
    }

    public function getSeqvol(): ?string
    {
        return $this->seqvol;
    }

    public function setSeqvol(string $seqvol): self
    {
        $this->seqvol = $seqvol;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getSiege(): ?string
    {
        return $this->siege;
    }

    public function setSiege(string $siege): self
    {
        $this->siege = $siege;

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

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }


}
