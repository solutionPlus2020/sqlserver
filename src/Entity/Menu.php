<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="MENU")
 * @ORM\Entity
 */
class Menu
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQMENU", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqmenu;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEMENU", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codemenu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBMENU", type="string", length=60, nullable=false)
     */
    private $libmenu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="COMMANDE", type="string", length=20, nullable=false)
     */
    private $commande = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CBAR", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cbar = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PROGRAMME", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $programme = '';

    public function getSeqmenu(): ?string
    {
        return $this->seqmenu;
    }

    public function setSeqmenu(string $seqmenu): self
    {
        $this->seqmenu = $seqmenu;

        return $this;
    }

    public function getCodemenu(): ?string
    {
        return $this->codemenu;
    }

    public function getLibmenu(): ?string
    {
        return $this->libmenu;
    }

    public function setLibmenu(string $libmenu): self
    {
        $this->libmenu = $libmenu;

        return $this;
    }

    public function getCommande(): ?string
    {
        return $this->commande;
    }

    public function setCommande(string $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getCbar(): ?string
    {
        return $this->cbar;
    }

    public function getProgramme(): ?string
    {
        return $this->programme;
    }


}
