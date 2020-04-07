<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveau
 *
 * @ORM\Table(name="NIVEAU")
 * @ORM\Entity
 */
class Niveau
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQNIVEAU", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqniveau;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBNIVEAU", type="string", length=30, nullable=false)
     */
    private $libniveau = '';

    public function getSeqniveau(): ?string
    {
        return $this->seqniveau;
    }

    public function getLibniveau(): ?string
    {
        return $this->libniveau;
    }

    public function setLibniveau(string $libniveau): self
    {
        $this->libniveau = $libniveau;

        return $this;
    }


}
