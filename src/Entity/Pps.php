<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pps
 *
 * @ORM\Table(name="PPS")
 * @ORM\Entity
 */
class Pps
{
    /**
     * @var int
     *
     * @ORM\Column(name="numQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="numTrans", type="string", length=10, nullable=false)
     */
    private $numtrans = '';

    /**
     * @var string
     *
     * @ORM\Column(name="numappel", type="string", length=10, nullable=false)
     */
    private $numappel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="autorisation", type="string", length=50, nullable=false)
     */
    private $autorisation = '';

    /**
     * @var string
     *
     * @ORM\Column(name="codeReponse", type="string", length=50, nullable=false)
     */
    private $codereponse = '';

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=150, nullable=false)
     */
    private $commentaire = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datepaiement = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer", nullable=false)
     */
    private $reference = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $montant = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="numcarte", type="string", length=150, nullable=false)
     */
    private $numcarte = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cvv", type="string", length=10, nullable=false)
     */
    private $cvv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dateexpire", type="string", length=80, nullable=false)
     */
    private $dateexpire = '';

    public function getNumquestion(): ?int
    {
        return $this->numquestion;
    }

    public function getNumtrans(): ?string
    {
        return $this->numtrans;
    }

    public function setNumtrans(string $numtrans): self
    {
        $this->numtrans = $numtrans;

        return $this;
    }

    public function getNumappel(): ?string
    {
        return $this->numappel;
    }

    public function setNumappel(string $numappel): self
    {
        $this->numappel = $numappel;

        return $this;
    }

    public function getAutorisation(): ?string
    {
        return $this->autorisation;
    }

    public function setAutorisation(string $autorisation): self
    {
        $this->autorisation = $autorisation;

        return $this;
    }

    public function getCodereponse(): ?string
    {
        return $this->codereponse;
    }

    public function setCodereponse(string $codereponse): self
    {
        $this->codereponse = $codereponse;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDatepaiement(): ?\DateTimeInterface
    {
        return $this->datepaiement;
    }

    public function setDatepaiement(\DateTimeInterface $datepaiement): self
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

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

    public function getNumcarte(): ?string
    {
        return $this->numcarte;
    }

    public function setNumcarte(string $numcarte): self
    {
        $this->numcarte = $numcarte;

        return $this;
    }

    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    public function setCvv(string $cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }

    public function getDateexpire(): ?string
    {
        return $this->dateexpire;
    }

    public function setDateexpire(string $dateexpire): self
    {
        $this->dateexpire = $dateexpire;

        return $this;
    }


}
