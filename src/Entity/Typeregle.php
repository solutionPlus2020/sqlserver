<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeregle
 *
 * @ORM\Table(name="TYPEREGLE")
 * @ORM\Entity
 */
class Typeregle
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQTYPEREGLE", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqtyperegle;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBTYPEREGLE", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libtyperegle = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTREPARTIE", type="string", length=8, nullable=false)
     */
    private $contrepartie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="JOURNAL", type="string", length=3, nullable=false)
     */
    private $journal = '';

    public function getSeqtyperegle(): ?string
    {
        return $this->seqtyperegle;
    }

    public function setSeqtyperegle(string $seqtyperegle): self
    {
        $this->seqtyperegle = $seqtyperegle;

        return $this;
    }

    public function getLibtyperegle(): ?string
    {
        return $this->libtyperegle;
    }

    public function getContrepartie(): ?string
    {
        return $this->contrepartie;
    }

    public function setContrepartie(string $contrepartie): self
    {
        $this->contrepartie = $contrepartie;

        return $this;
    }

    public function getJournal(): ?string
    {
        return $this->journal;
    }

    public function setJournal(string $journal): self
    {
        $this->journal = $journal;

        return $this;
    }


}
