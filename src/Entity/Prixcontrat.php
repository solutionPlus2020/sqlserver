<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prixcontrat
 *
 * @ORM\Table(name="prixcontrat", indexes={@ORM\Index(name="SeqventeSeqclt", columns={"prixadulte", "seqvente", "seqclt"})})
 * @ORM\Entity
 */
class Prixcontrat
{
    /**
     * @var string
     *
     * @ORM\Column(name="seqclt", type="string", length=6, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqclt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="seqvente", type="decimal", precision=7, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqvente = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="seqprixcontrat", type="integer", nullable=false)
     */
    private $seqprixcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="prixadulte", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixadulte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pourcreduc", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $pourcreduc = '0';

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function getSeqvente(): ?string
    {
        return $this->seqvente;
    }

    public function getSeqprixcontrat(): ?int
    {
        return $this->seqprixcontrat;
    }

    public function setSeqprixcontrat(int $seqprixcontrat): self
    {
        $this->seqprixcontrat = $seqprixcontrat;

        return $this;
    }

    public function getPrixadulte(): ?string
    {
        return $this->prixadulte;
    }

    public function setPrixadulte(string $prixadulte): self
    {
        $this->prixadulte = $prixadulte;

        return $this;
    }

    public function getPourcreduc(): ?string
    {
        return $this->pourcreduc;
    }

    public function setPourcreduc(string $pourcreduc): self
    {
        $this->pourcreduc = $pourcreduc;

        return $this;
    }


}
