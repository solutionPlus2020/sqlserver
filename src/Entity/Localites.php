<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Localites
 *
 * @ORM\Table(name="LOCALITES")
 * @ORM\Entity
 */
class Localites
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdLocalite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlocalite;

    /**
     * @var int
     *
     * @ORM\Column(name="IdParent", type="integer", nullable=false)
     */
    private $idparent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="IdTypeLocalite", type="integer", nullable=false)
     */
    private $idtypelocalite;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=5, nullable=false)
     */
    private $code = '';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vente", mappedBy="idlocalite")
     */
    private $seqvente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seqvente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdlocalite(): ?int
    {
        return $this->idlocalite;
    }

    public function getIdparent(): ?int
    {
        return $this->idparent;
    }

    public function setIdparent(int $idparent): self
    {
        $this->idparent = $idparent;

        return $this;
    }

    public function getIdtypelocalite(): ?int
    {
        return $this->idtypelocalite;
    }

    public function setIdtypelocalite(int $idtypelocalite): self
    {
        $this->idtypelocalite = $idtypelocalite;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection|Vente[]
     */
    public function getSeqvente(): Collection
    {
        return $this->seqvente;
    }

    public function addSeqvente(Vente $seqvente): self
    {
        if (!$this->seqvente->contains($seqvente)) {
            $this->seqvente[] = $seqvente;
            $seqvente->addIdlocalite($this);
        }

        return $this;
    }

    public function removeSeqvente(Vente $seqvente): self
    {
        if ($this->seqvente->contains($seqvente)) {
            $this->seqvente->removeElement($seqvente);
            $seqvente->removeIdlocalite($this);
        }

        return $this;
    }

}
