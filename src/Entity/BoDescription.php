<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoDescription
 *
 * @ORM\Table(name="bo_description")
 * @ORM\Entity
 */
class BoDescription
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
     * @ORM\Column(name="codeprod", type="string", length=50, nullable=false)
     */
    private $codeprod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="idfamille", type="integer", nullable=false)
     */
    private $idfamille = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=250, nullable=false)
     */
    private $titre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=16, nullable=false)
     */
    private $description = '';

    /**
     * @var int
     *
     * @ORM\Column(name="idforfait", type="integer", nullable=false)
     */
    private $idforfait = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ordre", type="integer", nullable=false)
     */
    private $ordre = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="URL", type="string", length=250, nullable=true)
     */
    private $url;

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

    public function getIdfamille(): ?int
    {
        return $this->idfamille;
    }

    public function setIdfamille(int $idfamille): self
    {
        $this->idfamille = $idfamille;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }


}
