<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resaprixnouvelair
 *
 * @ORM\Table(name="ResaPrixNouvelAir")
 * @ORM\Entity
 */
class Resaprixnouvelair
{
    /**
     * @var int
     *
     * @ORM\Column(name="Seqresa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqresa;

    /**
     * @var string
     *
     * @ORM\Column(name="prixAD", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $total = '0';

    public function getSeqresa(): ?int
    {
        return $this->seqresa;
    }

    public function getPrixad(): ?string
    {
        return $this->prixad;
    }

    public function setPrixad(string $prixad): self
    {
        $this->prixad = $prixad;

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
