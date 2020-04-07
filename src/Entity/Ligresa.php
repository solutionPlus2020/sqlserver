<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ligresa
 *
 * @ORM\Table(name="LIGRESA", indexes={@ORM\Index(name="IDX_5B5BE81D52AFA663", columns={"SEQRESA"})})
 * @ORM\Entity
 */
class Ligresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQLIGRESA", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqligresa;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=4, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD", type="string", length=50, nullable=false)
     */
    private $libprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="QTE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $qte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ACTIVE", type="string", length=1, nullable=false)
     */
    private $active = '';

    /**
     * @var \Resa
     *
     * @ORM\ManyToOne(targetEntity="Resa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQRESA", referencedColumnName="SEQRESA")
     * })
     */
    private $seqresa;

    public function getSeqligresa(): ?string
    {
        return $this->seqligresa;
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

    public function getLibprod(): ?string
    {
        return $this->libprod;
    }

    public function setLibprod(string $libprod): self
    {
        $this->libprod = $libprod;

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

    public function getQte(): ?string
    {
        return $this->qte;
    }

    public function setQte(string $qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(string $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getSeqresa(): ?Resa
    {
        return $this->seqresa;
    }

    public function setSeqresa(?Resa $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }


}
