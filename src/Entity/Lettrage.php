<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lettrage
 *
 * @ORM\Table(name="LETTRAGE", indexes={@ORM\Index(name="IDX_FE7D3DFCAEDCB037", columns={"SEQREGLE"})})
 * @ORM\Entity
 */
class Lettrage
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQLETTRAGE", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqlettrage;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $seqfact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $montant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REGLE_GLOBAL", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $regleGlobal = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_lettrage", type="datetime", nullable=false)
     */
    private $dateLettrage = '';

    /**
     * @var \Reglement
     *
     * @ORM\ManyToOne(targetEntity="Reglement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQREGLE", referencedColumnName="SEQREGLE")
     * })
     */
    private $seqregle;

    public function getSeqlettrage(): ?string
    {
        return $this->seqlettrage;
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

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function setSeqresa(string $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getRegleGlobal(): ?string
    {
        return $this->regleGlobal;
    }

    public function setRegleGlobal(string $regleGlobal): self
    {
        $this->regleGlobal = $regleGlobal;

        return $this;
    }

    public function getDateLettrage(): ?\DateTimeInterface
    {
        return $this->dateLettrage;
    }

    public function setDateLettrage(\DateTimeInterface $dateLettrage): self
    {
        $this->dateLettrage = $dateLettrage;

        return $this;
    }

    public function getSeqregle(): ?Reglement
    {
        return $this->seqregle;
    }

    public function setSeqregle(?Reglement $seqregle): self
    {
        $this->seqregle = $seqregle;

        return $this;
    }


}
