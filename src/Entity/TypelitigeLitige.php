<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypelitigeLitige
 *
 * @ORM\Table(name="TYPELITIGE_LITIGE", uniqueConstraints={@ORM\UniqueConstraint(name="IX_TYPELITIGE_LITIGE", columns={"SEQ_LITIGE", "SEQTYPELITIGE"})})
 * @ORM\Entity
 */
class TypelitigeLitige
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEQTYPELITIGE_LITIGE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqtypelitigeLitige;

    /**
     * @var int
     *
     * @ORM\Column(name="SEQ_LITIGE", type="integer", nullable=false)
     */
    private $seqLitige = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="SEQTYPELITIGE", type="integer", nullable=false)
     */
    private $seqtypelitige = '0';

    public function getSeqtypelitigeLitige(): ?int
    {
        return $this->seqtypelitigeLitige;
    }

    public function getSeqLitige(): ?int
    {
        return $this->seqLitige;
    }

    public function setSeqLitige(int $seqLitige): self
    {
        $this->seqLitige = $seqLitige;

        return $this;
    }

    public function getSeqtypelitige(): ?int
    {
        return $this->seqtypelitige;
    }

    public function setSeqtypelitige(int $seqtypelitige): self
    {
        $this->seqtypelitige = $seqtypelitige;

        return $this;
    }


}
