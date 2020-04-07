<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Confhotelresa
 *
 * @ORM\Table(name="CONFHOTELRESA")
 * @ORM\Entity
 */
class Confhotelresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCONFHOTELRESA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $seqconfhotelresa;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCONFHOTEL", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $seqconfhotel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=6, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CONFHOTEL", type="string", length=30, nullable=false)
     */
    private $confhotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATECONFHOT", type="string", length=50, nullable=false)
     */
    private $dateconfhot = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS4", type="string", length=200, nullable=false)
     */
    private $obs4 = '';

    public function getSeqconfhotelresa(): ?string
    {
        return $this->seqconfhotelresa;
    }

    public function setSeqconfhotelresa(string $seqconfhotelresa): self
    {
        $this->seqconfhotelresa = $seqconfhotelresa;

        return $this;
    }

    public function getSeqconfhotel(): ?string
    {
        return $this->seqconfhotel;
    }

    public function setSeqconfhotel(string $seqconfhotel): self
    {
        $this->seqconfhotel = $seqconfhotel;

        return $this;
    }

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function getConfhotel(): ?string
    {
        return $this->confhotel;
    }

    public function setConfhotel(string $confhotel): self
    {
        $this->confhotel = $confhotel;

        return $this;
    }

    public function getDateconfhot(): ?string
    {
        return $this->dateconfhot;
    }

    public function setDateconfhot(string $dateconfhot): self
    {
        $this->dateconfhot = $dateconfhot;

        return $this;
    }

    public function getObs4(): ?string
    {
        return $this->obs4;
    }

    public function setObs4(string $obs4): self
    {
        $this->obs4 = $obs4;

        return $this;
    }


}
