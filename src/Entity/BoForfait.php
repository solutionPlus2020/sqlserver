<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoForfait
 *
 * @ORM\Table(name="bo_forfait")
 * @ORM\Entity
 */
class BoForfait
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
     */
    private $code = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Introduction", type="text", length=16, nullable=false)
     */
    private $introduction = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=200, nullable=false)
     */
    private $image = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VilleDepart", type="string", length=200, nullable=false)
     */
    private $villedepart = '';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

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

    public function getVilledepart(): ?string
    {
        return $this->villedepart;
    }

    public function setVilledepart(string $villedepart): self
    {
        $this->villedepart = $villedepart;

        return $this;
    }


}
