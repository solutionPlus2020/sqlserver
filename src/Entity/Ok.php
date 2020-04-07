<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ok
 *
 * @ORM\Table(name="ok")
 * @ORM\Entity
 */
class Ok
{
    /**
     * @var string
     *
     * @ORM\Column(name="seqresa", type="decimal", precision=7, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="seqclt", type="string", length=6, nullable=false)
     */
    private $seqclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10, nullable=false)
     */
    private $etat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="recuperer", type="string", length=3, nullable=false)
     */
    private $recuperer = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_insertion", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateInsertion = 'CURRENT_TIMESTAMP';

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function setSeqclt(string $seqclt): self
    {
        $this->seqclt = $seqclt;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getRecuperer(): ?string
    {
        return $this->recuperer;
    }

    public function setRecuperer(string $recuperer): self
    {
        $this->recuperer = $recuperer;

        return $this;
    }

    public function getDateInsertion(): ?\DateTimeInterface
    {
        return $this->dateInsertion;
    }

    public function setDateInsertion(\DateTimeInterface $dateInsertion): self
    {
        $this->dateInsertion = $dateInsertion;

        return $this;
    }


}
