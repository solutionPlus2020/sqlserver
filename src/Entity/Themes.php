<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Themes
 *
 * @ORM\Table(name="THEMES")
 * @ORM\Entity
 */
class Themes
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdTheme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtheme;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Vente", mappedBy="idtheme")
     */
    private $seqvente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->seqvente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdtheme(): ?int
    {
        return $this->idtheme;
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
            $seqvente->addIdtheme($this);
        }

        return $this;
    }

    public function removeSeqvente(Vente $seqvente): self
    {
        if ($this->seqvente->contains($seqvente)) {
            $this->seqvente->removeElement($seqvente);
            $seqvente->removeIdtheme($this);
        }

        return $this;
    }

}
