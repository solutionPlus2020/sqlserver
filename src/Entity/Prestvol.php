<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestvol
 *
 * @ORM\Table(name="PRESTVOL")
 * @ORM\Entity
 */
class Prestvol
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQPRESTVOL", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqprestvol;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPRESTVOL", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libprestvol = '';

    public function getSeqprestvol(): ?string
    {
        return $this->seqprestvol;
    }

    public function setSeqprestvol(string $seqprestvol): self
    {
        $this->seqprestvol = $seqprestvol;

        return $this;
    }

    public function getLibprestvol(): ?string
    {
        return $this->libprestvol;
    }


}
