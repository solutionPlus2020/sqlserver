<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraismodif
 *
 * @ORM\Table(name="FRAISMODIF")
 * @ORM\Entity
 */
class Fraismodif
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQMODIF", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqmodif;

    /**
     * @var string
     *
     * @ORM\Column(name="JOUR1", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $jour1;

    /**
     * @var string
     *
     * @ORM\Column(name="JOUR2", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $jour2;

    /**
     * @var string
     *
     * @ORM\Column(name="FACTEUR", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $facteur;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEMODIF", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $typemodif;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBELLE", type="string", length=100, nullable=false)
     */
    private $libelle;

    public function getSeqmodif(): ?string
    {
        return $this->seqmodif;
    }

    public function getJour1(): ?string
    {
        return $this->jour1;
    }

    public function setJour1(string $jour1): self
    {
        $this->jour1 = $jour1;

        return $this;
    }

    public function getJour2(): ?string
    {
        return $this->jour2;
    }

    public function setJour2(string $jour2): self
    {
        $this->jour2 = $jour2;

        return $this;
    }

    public function getFacteur(): ?string
    {
        return $this->facteur;
    }

    public function setFacteur(string $facteur): self
    {
        $this->facteur = $facteur;

        return $this;
    }

    public function getTypemodif(): ?string
    {
        return $this->typemodif;
    }

    public function setTypemodif(string $typemodif): self
    {
        $this->typemodif = $typemodif;

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


}
