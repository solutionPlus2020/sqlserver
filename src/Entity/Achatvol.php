<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achatvol
 *
 * @ORM\Table(name="ACHATVOL")
 * @ORM\Entity
 */
class Achatvol
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQACHATVOL", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqachatvol;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqfact = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATESAISIE", type="datetime", nullable=false)
     */
    private $datesaisie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOL", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CONFIRMERPAR", type="string", length=30, nullable=false)
     */
    private $confirmerpar = '';

    /**
     * @var int
     *
     * @ORM\Column(name="SEQRESA", type="integer", nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $total = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="NBPAX", type="integer", nullable=false)
     */
    private $nbpax = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PNR", type="string", length=10, nullable=false)
     */
    private $pnr = '';

    public function getSeqachatvol(): ?string
    {
        return $this->seqachatvol;
    }

    public function setSeqachatvol(string $seqachatvol): self
    {
        $this->seqachatvol = $seqachatvol;

        return $this;
    }

    public function getSeqfact(): ?string
    {
        return $this->seqfact;
    }

    public function getDatesaisie(): ?\DateTimeInterface
    {
        return $this->datesaisie;
    }

    public function setDatesaisie(\DateTimeInterface $datesaisie): self
    {
        $this->datesaisie = $datesaisie;

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

    public function getConfirmerpar(): ?string
    {
        return $this->confirmerpar;
    }

    public function setConfirmerpar(string $confirmerpar): self
    {
        $this->confirmerpar = $confirmerpar;

        return $this;
    }

    public function getSeqresa(): ?int
    {
        return $this->seqresa;
    }

    public function setSeqresa(int $seqresa): self
    {
        $this->seqresa = $seqresa;

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

    public function getNbpax(): ?int
    {
        return $this->nbpax;
    }

    public function setNbpax(int $nbpax): self
    {
        $this->nbpax = $nbpax;

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

    public function getPnr(): ?string
    {
        return $this->pnr;
    }

    public function setPnr(string $pnr): self
    {
        $this->pnr = $pnr;

        return $this;
    }


}
