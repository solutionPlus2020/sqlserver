<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="categ", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categ = '';

    /**
     * @var string
     *
     * @ORM\Column(name="seqcategorie", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $seqcategorie;

    public function getCateg(): ?string
    {
        return $this->categ;
    }

    public function getSeqcategorie(): ?string
    {
        return $this->seqcategorie;
    }

    public function setSeqcategorie(string $seqcategorie): self
    {
        $this->seqcategorie = $seqcategorie;

        return $this;
    }


}
