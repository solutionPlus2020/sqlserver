<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationSpeciale
 *
 * @ORM\Table(name="OPERATION_SPECIALE")
 * @ORM\Entity
 */
class OperationSpeciale
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQOP", type="decimal", precision=8, scale=0, nullable=false)
     */
    private $seqop;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REFNET", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refnet = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUTOP", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datedebutop = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFINOP", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $datefinop = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATED1", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dated1 = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATED2", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dated2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="JOUR_OPERATION", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $jourOperation = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=50, nullable=false)
     */
    private $libpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBVENTE", type="string", length=100, nullable=false)
     */
    private $libvente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMENTAIRE", type="text", length=16, nullable=false)
     */
    private $commentaire = '';

    /**
     * @var string
     *
     * @ORM\Column(name="villed", type="string", length=3, nullable=false)
     */
    private $villed = '';

    public function getSeqop(): ?string
    {
        return $this->seqop;
    }

    public function setSeqop(string $seqop): self
    {
        $this->seqop = $seqop;

        return $this;
    }

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function getRefnet(): ?string
    {
        return $this->refnet;
    }

    public function getDatedebutop(): ?\DateTimeInterface
    {
        return $this->datedebutop;
    }

    public function getDatefinop(): ?\DateTimeInterface
    {
        return $this->datefinop;
    }

    public function getDated1(): ?\DateTimeInterface
    {
        return $this->dated1;
    }

    public function getDated2(): ?\DateTimeInterface
    {
        return $this->dated2;
    }

    public function getJourOperation(): ?string
    {
        return $this->jourOperation;
    }

    public function setJourOperation(string $jourOperation): self
    {
        $this->jourOperation = $jourOperation;

        return $this;
    }

    public function getLibpays(): ?string
    {
        return $this->libpays;
    }

    public function setLibpays(string $libpays): self
    {
        $this->libpays = $libpays;

        return $this;
    }

    public function getLibvente(): ?string
    {
        return $this->libvente;
    }

    public function setLibvente(string $libvente): self
    {
        $this->libvente = $libvente;

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

    public function getVilled(): ?string
    {
        return $this->villed;
    }

    public function setVilled(string $villed): self
    {
        $this->villed = $villed;

        return $this;
    }


}
