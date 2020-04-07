<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prest
 *
 * @ORM\Table(name="PREST")
 * @ORM\Entity
 */
class Prest
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQPREST", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqprest;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPREST", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $libprest = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Categorie", type="string", length=30, nullable=false)
     */
    private $categorie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPREST", type="string", length=30, nullable=false, options={"fixed"=true})
     */
    private $codeprest = '';

    public function getSeqprest(): ?string
    {
        return $this->seqprest;
    }

    public function setSeqprest(string $seqprest): self
    {
        $this->seqprest = $seqprest;

        return $this;
    }

    public function getLibprest(): ?string
    {
        return $this->libprest;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getCodeprest(): ?string
    {
        return $this->codeprest;
    }

    public function setCodeprest(string $codeprest): self
    {
        $this->codeprest = $codeprest;

        return $this;
    }


}
