<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePromo
 *
 * @ORM\Table(name="TYPE_PROMO")
 * @ORM\Entity
 */
class TypePromo
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQ_TYPE_PROMO", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqTypePromo;

    /**
     * @var string
     *
     * @ORM\Column(name="LIB_TYPE_PROMO", type="string", length=50, nullable=false)
     */
    private $libTypePromo;

    public function getSeqTypePromo(): ?string
    {
        return $this->seqTypePromo;
    }

    public function getLibTypePromo(): ?string
    {
        return $this->libTypePromo;
    }

    public function setLibTypePromo(string $libTypePromo): self
    {
        $this->libTypePromo = $libTypePromo;

        return $this;
    }


}
