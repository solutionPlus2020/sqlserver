<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affreteur
 *
 * @ORM\Table(name="AFFRETEUR")
 * @ORM\Entity
 */
class Affreteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQAFFRET", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqaffret;

    /**
     * @var string
     *
     * @ORM\Column(name="CODAFFRET", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codaffret = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBAFFRET", type="string", length=20, nullable=false)
     */
    private $libaffret = '';

    public function getSeqaffret(): ?string
    {
        return $this->seqaffret;
    }

    public function setSeqaffret(string $seqaffret): self
    {
        $this->seqaffret = $seqaffret;

        return $this;
    }

    public function getCodaffret(): ?string
    {
        return $this->codaffret;
    }

    public function getLibaffret(): ?string
    {
        return $this->libaffret;
    }

    public function setLibaffret(string $libaffret): self
    {
        $this->libaffret = $libaffret;

        return $this;
    }


}
