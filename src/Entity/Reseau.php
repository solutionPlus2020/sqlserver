<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reseau
 *
 * @ORM\Table(name="reseau")
 * @ORM\Entity
 */
class Reseau
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESEAU", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $seqreseau;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMRESEAU", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nomreseau = '';

    public function getSeqreseau(): ?string
    {
        return $this->seqreseau;
    }

    public function setSeqreseau(string $seqreseau): self
    {
        $this->seqreseau = $seqreseau;

        return $this;
    }

    public function getNomreseau(): ?string
    {
        return $this->nomreseau;
    }


}
