<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoPhoto
 *
 * @ORM\Table(name="bo_photo")
 * @ORM\Entity
 */
class BoPhoto
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codeprod", type="string", length=10, nullable=false)
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=100, nullable=false)
     */
    private $url = '';

    /**
     * @var int
     *
     * @ORM\Column(name="idforfait", type="integer", nullable=false)
     */
    private $idforfait = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getIdforfait(): ?int
    {
        return $this->idforfait;
    }

    public function setIdforfait(int $idforfait): self
    {
        $this->idforfait = $idforfait;

        return $this;
    }


}
