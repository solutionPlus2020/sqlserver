<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefvolResa
 *
 * @ORM\Table(name="REFVOL_RESA")
 * @ORM\Entity
 */
class RefvolResa
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEQRESA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqresa;

    /**
     * @var string
     *
     * @ORM\Column(name="REFVOLD", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $refvold = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REFVOLR", type="string", length=10, nullable=false, options={"fixed"=true})
     */
    private $refvolr = '';

    public function getSeqresa(): ?int
    {
        return $this->seqresa;
    }

    public function getRefvold(): ?string
    {
        return $this->refvold;
    }

    public function setRefvold(string $refvold): self
    {
        $this->refvold = $refvold;

        return $this;
    }

    public function getRefvolr(): ?string
    {
        return $this->refvolr;
    }

    public function setRefvolr(string $refvolr): self
    {
        $this->refvolr = $refvolr;

        return $this;
    }


}
