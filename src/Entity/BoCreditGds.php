<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoCreditGds
 *
 * @ORM\Table(name="bo_credit_gds", indexes={@ORM\Index(name="IX_bo_credit_gds", columns={"idSolde"}), @ORM\Index(name="IX_bo_credit_gds_1", columns={"idSolde"})})
 * @ORM\Entity
 */
class BoCreditGds
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSolde", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Montant", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="Compagnie", type="smallint", nullable=false)
     */
    private $compagnie;

    public function getIdsolde(): ?int
    {
        return $this->idsolde;
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
