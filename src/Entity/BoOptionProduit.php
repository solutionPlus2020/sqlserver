<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoOptionProduit
 *
 * @ORM\Table(name="bo_option_produit")
 * @ORM\Entity
 */
class BoOptionProduit
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
     * @ORM\Column(name="Code", type="string", length=50, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="Lib", type="string", length=200, nullable=false)
     */
    private $lib;

    /**
     * @var string
     *
     * @ORM\Column(name="Prixvente", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixvente;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }

    public function getPrixvente(): ?string
    {
        return $this->prixvente;
    }

    public function setPrixvente(string $prixvente): self
    {
        $this->prixvente = $prixvente;

        return $this;
    }


}
