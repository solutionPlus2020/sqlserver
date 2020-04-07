<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoCron
 *
 * @ORM\Table(name="bo_cron")
 * @ORM\Entity
 */
class BoCron
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="IdCron", type="smallint", nullable=false)
     */
    private $idcron = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateLancement", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $datelancement = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFinLancement", type="datetime", nullable=false)
     */
    private $datefinlancement = '';

    /**
     * @var int
     *
     * @ORM\Column(name="Statut", type="smallint", nullable=false)
     */
    private $statut = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcron(): ?int
    {
        return $this->idcron;
    }

    public function setIdcron(int $idcron): self
    {
        $this->idcron = $idcron;

        return $this;
    }

    public function getDatelancement(): ?\DateTimeInterface
    {
        return $this->datelancement;
    }

    public function setDatelancement(\DateTimeInterface $datelancement): self
    {
        $this->datelancement = $datelancement;

        return $this;
    }

    public function getDatefinlancement(): ?\DateTimeInterface
    {
        return $this->datefinlancement;
    }

    public function setDatefinlancement(\DateTimeInterface $datefinlancement): self
    {
        $this->datefinlancement = $datefinlancement;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
