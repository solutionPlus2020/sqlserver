<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoLocalite
 *
 * @ORM\Table(name="bo_localite")
 * @ORM\Entity
 */
class BoLocalite
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
     * @ORM\Column(name="IdParent", type="integer", nullable=false)
     */
    private $idparent;

    /**
     * @var int
     *
     * @ORM\Column(name="IdTypeLocalite", type="integer", nullable=false)
     */
    private $idtypelocalite;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=80, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=4000, nullable=false)
     */
    private $desc = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=400, nullable=false)
     */
    private $image = '';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     */
    private $code = '';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDesc(): ?string
    {
        return $this->desc;
    }

    public function setDesc(string $desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

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


}
