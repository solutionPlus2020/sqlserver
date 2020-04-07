<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraceRooming
 *
 * @ORM\Table(name="trace_rooming")
 * @ORM\Entity
 */
class TraceRooming
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="seqresa", type="integer", nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cure", type="boolean", nullable=false)
     */
    private $cure = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sendemail", type="boolean", nullable=false)
     */
    private $sendemail = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterooming", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $daterooming = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email = '';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCure(): ?bool
    {
        return $this->cure;
    }

    public function setCure(bool $cure): self
    {
        $this->cure = $cure;

        return $this;
    }

    public function getSendemail(): ?bool
    {
        return $this->sendemail;
    }

    public function setSendemail(bool $sendemail): self
    {
        $this->sendemail = $sendemail;

        return $this;
    }

    public function getDaterooming(): ?\DateTimeInterface
    {
        return $this->daterooming;
    }

    public function setDaterooming(\DateTimeInterface $daterooming): self
    {
        $this->daterooming = $daterooming;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


}
