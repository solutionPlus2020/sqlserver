<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoProduitLocalite
 *
 * @ORM\Table(name="bo_produit_localite")
 * @ORM\Entity
 */
class BoProduitLocalite
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
     * @var string
     *
     * @ORM\Column(name="codeprod", type="string", length=50, nullable=false)
     */
    private $codeprod;

    /**
     * @var int
     *
     * @ORM\Column(name="idlocalite", type="integer", nullable=false)
     */
    private $idlocalite;

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

    public function getIdlocalite(): ?int
    {
        return $this->idlocalite;
    }

    public function setIdlocalite(int $idlocalite): self
    {
        $this->idlocalite = $idlocalite;

        return $this;
    }


}
