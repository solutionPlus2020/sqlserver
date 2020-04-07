<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeassur
 *
 * @ORM\Table(name="TYPEASSUR")
 * @ORM\Entity
 */
class Typeassur
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQTYPEASSUR", type="decimal", precision=3, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqtypeassur;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBTYPEASSUR", type="string", length=30, nullable=false)
     */
    private $libtypeassur = '';

    public function getSeqtypeassur(): ?string
    {
        return $this->seqtypeassur;
    }

    public function getLibtypeassur(): ?string
    {
        return $this->libtypeassur;
    }

    public function setLibtypeassur(string $libtypeassur): self
    {
        $this->libtypeassur = $libtypeassur;

        return $this;
    }


}
