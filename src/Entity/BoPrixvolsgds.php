<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoPrixvolsgds
 *
 * @ORM\Table(name="bo_PrixVolsGDS")
 * @ORM\Entity
 */
class BoPrixvolsgds
{
    /**
     * @var int
     *
     * @ORM\Column(name="seqPrixVol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqprixvol;

    /**
     * @var int
     *
     * @ORM\Column(name="seqvold", type="integer", nullable=false)
     */
    private $seqvold;

    /**
     * @var int
     *
     * @ORM\Column(name="seqvolr", type="integer", nullable=false)
     */
    private $seqvolr;

    /**
     * @var string
     *
     * @ORM\Column(name="ville1d", type="string", length=3, nullable=false)
     */
    private $ville1d;

    /**
     * @var string
     *
     * @ORM\Column(name="ville1a", type="string", length=3, nullable=false)
     */
    private $ville1a;

    /**
     * @var string
     *
     * @ORM\Column(name="ville2d", type="string", length=3, nullable=false)
     */
    private $ville2d;

    /**
     * @var string
     *
     * @ORM\Column(name="ville2a", type="string", length=3, nullable=false)
     */
    private $ville2a;

    /**
     * @var string
     *
     * @ORM\Column(name="heure1d", type="string", length=4, nullable=false)
     */
    private $heure1d;

    /**
     * @var string
     *
     * @ORM\Column(name="heure1a", type="string", length=4, nullable=false)
     */
    private $heure1a;

    /**
     * @var string
     *
     * @ORM\Column(name="heure2d", type="string", length=4, nullable=false)
     */
    private $heure2d;

    /**
     * @var string
     *
     * @ORM\Column(name="heure2a", type="string", length=4, nullable=false)
     */
    private $heure2a;

    /**
     * @var string
     *
     * @ORM\Column(name="nvold", type="string", length=6, nullable=false)
     */
    private $nvold;

    /**
     * @var string
     *
     * @ORM\Column(name="nvolr", type="string", length=6, nullable=false)
     */
    private $nvolr;

    /**
     * @var string
     *
     * @ORM\Column(name="compagnie", type="string", length=2, nullable=false)
     */
    private $compagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prix;

    public function getSeqprixvol(): ?int
    {
        return $this->seqprixvol;
    }

    public function getSeqvold(): ?int
    {
        return $this->seqvold;
    }

    public function setSeqvold(int $seqvold): self
    {
        $this->seqvold = $seqvold;

        return $this;
    }

    public function getSeqvolr(): ?int
    {
        return $this->seqvolr;
    }

    public function setSeqvolr(int $seqvolr): self
    {
        $this->seqvolr = $seqvolr;

        return $this;
    }

    public function getVille1d(): ?string
    {
        return $this->ville1d;
    }

    public function setVille1d(string $ville1d): self
    {
        $this->ville1d = $ville1d;

        return $this;
    }

    public function getVille1a(): ?string
    {
        return $this->ville1a;
    }

    public function setVille1a(string $ville1a): self
    {
        $this->ville1a = $ville1a;

        return $this;
    }

    public function getVille2d(): ?string
    {
        return $this->ville2d;
    }

    public function setVille2d(string $ville2d): self
    {
        $this->ville2d = $ville2d;

        return $this;
    }

    public function getVille2a(): ?string
    {
        return $this->ville2a;
    }

    public function setVille2a(string $ville2a): self
    {
        $this->ville2a = $ville2a;

        return $this;
    }

    public function getHeure1d(): ?string
    {
        return $this->heure1d;
    }

    public function setHeure1d(string $heure1d): self
    {
        $this->heure1d = $heure1d;

        return $this;
    }

    public function getHeure1a(): ?string
    {
        return $this->heure1a;
    }

    public function setHeure1a(string $heure1a): self
    {
        $this->heure1a = $heure1a;

        return $this;
    }

    public function getHeure2d(): ?string
    {
        return $this->heure2d;
    }

    public function setHeure2d(string $heure2d): self
    {
        $this->heure2d = $heure2d;

        return $this;
    }

    public function getHeure2a(): ?string
    {
        return $this->heure2a;
    }

    public function setHeure2a(string $heure2a): self
    {
        $this->heure2a = $heure2a;

        return $this;
    }

    public function getNvold(): ?string
    {
        return $this->nvold;
    }

    public function setNvold(string $nvold): self
    {
        $this->nvold = $nvold;

        return $this;
    }

    public function getNvolr(): ?string
    {
        return $this->nvolr;
    }

    public function setNvolr(string $nvolr): self
    {
        $this->nvolr = $nvolr;

        return $this;
    }

    public function getCompagnie(): ?string
    {
        return $this->compagnie;
    }

    public function setCompagnie(string $compagnie): self
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }


}
