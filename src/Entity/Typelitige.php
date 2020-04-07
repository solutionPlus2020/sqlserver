<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typelitige
 *
 * @ORM\Table(name="TYPELITIGE", uniqueConstraints={@ORM\UniqueConstraint(name="IX_TYPELITIGE", columns={"LIBTYPELITIGE"})})
 * @ORM\Entity
 */
class Typelitige
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEQTYPELITIGE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqtypelitige;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBTYPELITIGE", type="string", length=50, nullable=false)
     */
    private $libtypelitige = '';

    public function getSeqtypelitige(): ?int
    {
        return $this->seqtypelitige;
    }

    public function getLibtypelitige(): ?string
    {
        return $this->libtypelitige;
    }

    public function setLibtypelitige(string $libtypelitige): self
    {
        $this->libtypelitige = $libtypelitige;

        return $this;
    }


}
