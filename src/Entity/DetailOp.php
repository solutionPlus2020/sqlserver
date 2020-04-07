<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailOp
 *
 * @ORM\Table(name="DETAIL_OP")
 * @ORM\Entity
 */
class DetailOp
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQOP", type="decimal", precision=8, scale=0, nullable=false, options={"comment"="N° DE L'OPERATION SPECIALE"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqop;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVENTE", type="decimal", precision=7, scale=0, nullable=false, options={"comment"="SEQUENCE DE VENTE"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqclt = '';

    public function getSeqop(): ?string
    {
        return $this->seqop;
    }

    public function getSeqvente(): ?string
    {
        return $this->seqvente;
    }

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }


}
