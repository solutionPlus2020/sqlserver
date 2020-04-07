<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligresaprod
 *
 * @ORM\Table(name="LIGRESAPROD")
 * @ORM\Entity
 */
class Ligresaprod
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQLIGRESAPROD", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqligresaprod;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQRESA", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="decimal", precision=7, scale=0, nullable=false)
     */
    private $seqfact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ARRIVEE", type="datetime", nullable=false)
     */
    private $arrivee = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DEPART", type="datetime", nullable=false)
     */
    private $depart = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SG", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $sg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DB", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $db = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TPL", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $tpl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="QUAD", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $quad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST", type="string", length=80, nullable=false)
     */
    private $libprest = '';

    public function getSeqligresaprod(): ?string
    {
        return $this->seqligresaprod;
    }

    public function getSeqresa(): ?string
    {
        return $this->seqresa;
    }

    public function setSeqresa(string $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getSeqfact(): ?string
    {
        return $this->seqfact;
    }

    public function setSeqfact(string $seqfact): self
    {
        $this->seqfact = $seqfact;

        return $this;
    }

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function setCodeprod(string $codeprod): self
    {
        $this->codeprod = $codeprod;

        return $this;
    }

    public function getArrivee(): ?\DateTimeInterface
    {
        return $this->arrivee;
    }

    public function setArrivee(\DateTimeInterface $arrivee): self
    {
        $this->arrivee = $arrivee;

        return $this;
    }

    public function getDepart(): ?\DateTimeInterface
    {
        return $this->depart;
    }

    public function setDepart(\DateTimeInterface $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getSg(): ?string
    {
        return $this->sg;
    }

    public function setSg(string $sg): self
    {
        $this->sg = $sg;

        return $this;
    }

    public function getDb(): ?string
    {
        return $this->db;
    }

    public function setDb(string $db): self
    {
        $this->db = $db;

        return $this;
    }

    public function getTpl(): ?string
    {
        return $this->tpl;
    }

    public function setTpl(string $tpl): self
    {
        $this->tpl = $tpl;

        return $this;
    }

    public function getQuad(): ?string
    {
        return $this->quad;
    }

    public function setQuad(string $quad): self
    {
        $this->quad = $quad;

        return $this;
    }

    public function getLibprest(): ?string
    {
        return $this->libprest;
    }

    public function setLibprest(string $libprest): self
    {
        $this->libprest = $libprest;

        return $this;
    }


}
