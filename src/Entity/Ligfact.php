<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligfact
 *
 * @ORM\Table(name="LIGFACT", indexes={@ORM\Index(name="IDX_A43676B3ADC238CD", columns={"SEQFACT"})})
 * @ORM\Entity
 */
class Ligfact
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQLIGFACT", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqligfact;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD", type="string", length=60, nullable=false)
     */
    private $libprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $prix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="QTE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $qte = '0';

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQFACT", referencedColumnName="SEQFACT")
     * })
     */
    private $seqfact;

    public function getSeqligfact(): ?string
    {
        return $this->seqligfact;
    }

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function setCodeprod(string $codeprod): self
    {
        $this->codeprod = $codeprod;

        return $this;
    }

    public function getLibprod(): ?string
    {
        return $this->libprod;
    }

    public function setLibprod(string $libprod): self
    {
        $this->libprod = $libprod;

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

    public function getQte(): ?string
    {
        return $this->qte;
    }

    public function setQte(string $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getSeqfact(): ?Facture
    {
        return $this->seqfact;
    }

    public function setSeqfact(?Facture $seqfact): self
    {
        $this->seqfact = $seqfact;

        return $this;
    }


}
