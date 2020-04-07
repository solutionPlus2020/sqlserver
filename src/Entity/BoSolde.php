<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoSolde
 *
 * @ORM\Table(name="bo_solde")
 * @ORM\Entity
 */
class BoSolde
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTransacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtransacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $montant = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="compagnie", type="smallint", nullable=false, options={"default"="2"})
     */
    private $compagnie = '2';

    public function getIdtransacion(): ?int
    {
        return $this->idtransacion;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getCompagnie(): ?int
    {
        return $this->compagnie;
    }

    public function setCompagnie(int $compagnie): self
    {
        $this->compagnie = $compagnie;

        return $this;
    }


}
