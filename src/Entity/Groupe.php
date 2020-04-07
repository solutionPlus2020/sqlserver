<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="GROUPE")
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQGROUPE", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqgroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBGROUPE", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libgroupe = '';

    public function getSeqgroupe(): ?string
    {
        return $this->seqgroupe;
    }

    public function setSeqgroupe(string $seqgroupe): self
    {
        $this->seqgroupe = $seqgroupe;

        return $this;
    }

    public function getLibgroupe(): ?string
    {
        return $this->libgroupe;
    }


}
