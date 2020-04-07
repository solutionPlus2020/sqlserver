<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formalite
 *
 * @ORM\Table(name="FORMALITE")
 * @ORM\Entity
 */
class Formalite
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQFORMAL", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqformal;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBFORMAL", type="string", length=60, nullable=false)
     */
    private $libformal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBFORMAL1", type="string", length=60, nullable=false)
     */
    private $libformal1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="libpays", type="string", length=50, nullable=false)
     */
    private $libpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="formalite", type="text", length=16, nullable=false)
     */
    private $formalite = '';

    public function getSeqformal(): ?string
    {
        return $this->seqformal;
    }

    public function getLibformal(): ?string
    {
        return $this->libformal;
    }

    public function setLibformal(string $libformal): self
    {
        $this->libformal = $libformal;

        return $this;
    }

    public function getLibformal1(): ?string
    {
        return $this->libformal1;
    }

    public function setLibformal1(string $libformal1): self
    {
        $this->libformal1 = $libformal1;

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

    public function getFormalite(): ?string
    {
        return $this->formalite;
    }

    public function setFormalite(string $formalite): self
    {
        $this->formalite = $formalite;

        return $this;
    }


}
