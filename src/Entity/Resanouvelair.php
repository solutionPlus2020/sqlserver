<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resanouvelair
 *
 * @ORM\Table(name="ResaNouvelAir")
 * @ORM\Entity
 */
class Resanouvelair
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
     * @ORM\Column(name="SeqResa", type="integer", nullable=false)
     */
    private $seqresa;

    /**
     * @var string
     *
     * @ORM\Column(name="DossierNouvelAir", type="string", length=50, nullable=false)
     */
    private $dossiernouvelair = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PasswordNouvelAir", type="string", length=50, nullable=false)
     */
    private $passwordnouvelair = '';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $total = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="compagnie", type="string", length=2, nullable=true, options={"default"="TO"})
     */
    private $compagnie = 'TO';

    /**
     * @var string|null
     *
     * @ORM\Column(name="HeureDD", type="string", length=4, nullable=true)
     */
    private $heuredd = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="HeureDA", type="string", length=4, nullable=true)
     */
    private $heureda = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumVolD", type="string", length=10, nullable=true)
     */
    private $numvold = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="HeureRD", type="string", length=4, nullable=true)
     */
    private $heurerd = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="HeureRA", type="string", length=4, nullable=true)
     */
    private $heurera = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumVolR", type="string", length=10, nullable=true)
     */
    private $numvolr = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VilleDD", type="string", length=3, nullable=true)
     */
    private $villedd = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VilleDA", type="string", length=3, nullable=true)
     */
    private $villeda;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VilleRD", type="string", length=3, nullable=true)
     */
    private $villerd = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="VilleRA", type="string", length=3, nullable=true)
     */
    private $villera = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateResa", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateresa = 'CURRENT_TIMESTAMP';

    /**
     * @var bool
     *
     * @ORM\Column(name="Option", type="boolean", nullable=false)
     */
    private $option = '0';

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

    public function getDossiernouvelair(): ?string
    {
        return $this->dossiernouvelair;
    }

    public function setDossiernouvelair(string $dossiernouvelair): self
    {
        $this->dossiernouvelair = $dossiernouvelair;

        return $this;
    }

    public function getPasswordnouvelair(): ?string
    {
        return $this->passwordnouvelair;
    }

    public function setPasswordnouvelair(string $passwordnouvelair): self
    {
        $this->passwordnouvelair = $passwordnouvelair;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getCompagnie(): ?string
    {
        return $this->compagnie;
    }

    public function setCompagnie(?string $compagnie): self
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    public function getHeuredd(): ?string
    {
        return $this->heuredd;
    }

    public function setHeuredd(?string $heuredd): self
    {
        $this->heuredd = $heuredd;

        return $this;
    }

    public function getHeureda(): ?string
    {
        return $this->heureda;
    }

    public function setHeureda(?string $heureda): self
    {
        $this->heureda = $heureda;

        return $this;
    }

    public function getNumvold(): ?string
    {
        return $this->numvold;
    }

    public function setNumvold(?string $numvold): self
    {
        $this->numvold = $numvold;

        return $this;
    }

    public function getHeurerd(): ?string
    {
        return $this->heurerd;
    }

    public function setHeurerd(?string $heurerd): self
    {
        $this->heurerd = $heurerd;

        return $this;
    }

    public function getHeurera(): ?string
    {
        return $this->heurera;
    }

    public function setHeurera(?string $heurera): self
    {
        $this->heurera = $heurera;

        return $this;
    }

    public function getNumvolr(): ?string
    {
        return $this->numvolr;
    }

    public function setNumvolr(?string $numvolr): self
    {
        $this->numvolr = $numvolr;

        return $this;
    }

    public function getVilledd(): ?string
    {
        return $this->villedd;
    }

    public function setVilledd(?string $villedd): self
    {
        $this->villedd = $villedd;

        return $this;
    }

    public function getVilleda(): ?string
    {
        return $this->villeda;
    }

    public function setVilleda(?string $villeda): self
    {
        $this->villeda = $villeda;

        return $this;
    }

    public function getVillerd(): ?string
    {
        return $this->villerd;
    }

    public function setVillerd(?string $villerd): self
    {
        $this->villerd = $villerd;

        return $this;
    }

    public function getVillera(): ?string
    {
        return $this->villera;
    }

    public function setVillera(?string $villera): self
    {
        $this->villera = $villera;

        return $this;
    }

    public function getDateresa(): ?\DateTimeInterface
    {
        return $this->dateresa;
    }

    public function setDateresa(\DateTimeInterface $dateresa): self
    {
        $this->dateresa = $dateresa;

        return $this;
    }

    public function getOption(): ?bool
    {
        return $this->option;
    }

    public function setOption(bool $option): self
    {
        $this->option = $option;

        return $this;
    }


}
