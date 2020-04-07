<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogWs
 *
 * @ORM\Table(name="LOG_WS")
 * @ORM\Entity
 */
class LogWs
{
    /**
     * @var int
     *
     * @ORM\Column(name="logid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timestamp = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="microtime", type="string", length=50, nullable=false)
     */
    private $microtime;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=16, nullable=false, options={"default"="LOG"})
     */
    private $class = 'LOG';

    /**
     * @var string
     *
     * @ORM\Column(name="phase", type="string", length=50, nullable=false)
     */
    private $phase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="string", length=1000, nullable=true)
     */
    private $message;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodeErr", type="string", length=50, nullable=true)
     */
    private $codeerr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=true)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xml", type="text", length=16, nullable=true)
     */
    private $xml;

    /**
     * @var string|null
     *
     * @ORM\Column(name="processingusec", type="string", length=50, nullable=true)
     */
    private $processingusec;

    /**
     * @var string
     *
     * @ORM\Column(name="seqclt", type="string", length=6, nullable=false)
     */
    private $seqclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="refnet", type="string", length=50, nullable=false)
     */
    private $refnet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=50, nullable=false)
     */
    private $duree = '';

    /**
     * @var string
     *
     * @ORM\Column(name="passager", type="string", length=50, nullable=false)
     */
    private $passager = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut = '';

    /**
     * @var int
     *
     * @ORM\Column(name="seqvente", type="integer", nullable=false)
     */
    private $seqvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="villed", type="string", length=50, nullable=false)
     */
    private $villed = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nuitee", type="string", length=50, nullable=false)
     */
    private $nuitee = '';

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=10, nullable=false, options={"default"="B2C"})
     */
    private $group = 'B2C';

    /**
     * @var int
     *
     * @ORM\Column(name="seqresa", type="integer", nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateRetour", type="date", nullable=false)
     */
    private $dateretour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VilleA", type="string", length=50, nullable=false)
     */
    private $villea = '';

    public function getLogid(): ?int
    {
        return $this->logid;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getMicrotime(): ?string
    {
        return $this->microtime;
    }

    public function setMicrotime(string $microtime): self
    {
        $this->microtime = $microtime;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(string $phase): self
    {
        $this->phase = $phase;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(?int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getCodeerr(): ?string
    {
        return $this->codeerr;
    }

    public function setCodeerr(?string $codeerr): self
    {
        $this->codeerr = $codeerr;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getXml(): ?string
    {
        return $this->xml;
    }

    public function setXml(?string $xml): self
    {
        $this->xml = $xml;

        return $this;
    }

    public function getProcessingusec(): ?string
    {
        return $this->processingusec;
    }

    public function setProcessingusec(?string $processingusec): self
    {
        $this->processingusec = $processingusec;

        return $this;
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

    public function getRefnet(): ?string
    {
        return $this->refnet;
    }

    public function setRefnet(string $refnet): self
    {
        $this->refnet = $refnet;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getPassager(): ?string
    {
        return $this->passager;
    }

    public function setPassager(string $passager): self
    {
        $this->passager = $passager;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getSeqvente(): ?int
    {
        return $this->seqvente;
    }

    public function setSeqvente(int $seqvente): self
    {
        $this->seqvente = $seqvente;

        return $this;
    }

    public function getVilled(): ?string
    {
        return $this->villed;
    }

    public function setVilled(string $villed): self
    {
        $this->villed = $villed;

        return $this;
    }

    public function getNuitee(): ?string
    {
        return $this->nuitee;
    }

    public function setNuitee(string $nuitee): self
    {
        $this->nuitee = $nuitee;

        return $this;
    }

    public function getGroup(): ?string
    {
        return $this->group;
    }

    public function setGroup(string $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getSeqresa(): ?int
    {
        return $this->seqresa;
    }

    public function setSeqresa(int $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getDateretour(): ?\DateTimeInterface
    {
        return $this->dateretour;
    }

    public function setDateretour(\DateTimeInterface $dateretour): self
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    public function getVillea(): ?string
    {
        return $this->villea;
    }

    public function setVillea(string $villea): self
    {
        $this->villea = $villea;

        return $this;
    }


}
