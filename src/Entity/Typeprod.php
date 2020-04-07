<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeprod
 *
 * @ORM\Table(name="TYPEPROD")
 * @ORM\Entity
 */
class Typeprod
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQTYPEPROD", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqtypeprod;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBTYPEPROD", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libtypeprod = '';

    public function getSeqtypeprod(): ?string
    {
        return $this->seqtypeprod;
    }

    public function setSeqtypeprod(string $seqtypeprod): self
    {
        $this->seqtypeprod = $seqtypeprod;

        return $this;
    }

    public function getLibtypeprod(): ?string
    {
        return $this->libtypeprod;
    }


}
