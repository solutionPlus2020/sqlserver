<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codepromo
 *
 * @ORM\Table(name="CODEPROMO", uniqueConstraints={@ORM\UniqueConstraint(name="IX_CODEPROMO", columns={"CODEPROMO"})})
 * @ORM\Entity
 */
class Codepromo
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEQCODEPROMO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqcodepromo;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROMO", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $codepromo = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=false)
     */
    private $datedebut = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFIN", type="datetime", nullable=false)
     */
    private $datefin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=6, nullable=false, options={"fixed"=true})
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false, options={"fixed"=true})
     */
    private $seqclt = '';

    /**
     * @var int
     *
     * @ORM\Column(name="TYPEPROMOTION", type="integer", nullable=false, options={"default"="1","comment"="type de remise: 1 = montant 2 = pourcentage"})
     */
    private $typepromotion = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="VALEUR", type="integer", nullable=false)
     */
    private $valeur = '0';

    public function getSeqcodepromo(): ?int
    {
        return $this->seqcodepromo;
    }

    public function getCodepromo(): ?string
    {
        return $this->codepromo;
    }

    public function setCodepromo(string $codepromo): self
    {
        $this->codepromo = $codepromo;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
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

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function setSeqclt(string $seqclt): self
    {
        $this->seqclt = $seqclt;

        return $this;
    }

    public function getTypepromotion(): ?int
    {
        return $this->typepromotion;
    }

    public function setTypepromotion(int $typepromotion): self
    {
        $this->typepromotion = $typepromotion;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }


}
