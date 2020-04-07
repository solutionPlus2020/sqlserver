<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assur
 *
 * @ORM\Table(name="ASSUR")
 * @ORM\Entity
 */
class Assur
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQASSUR", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqassur;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBASSUR", type="string", length=30, nullable=false)
     */
    private $libassur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $total1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $total2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEVALEUR", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $typevaleur = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="VALEUR", type="decimal", precision=7, scale=2, nullable=false, options={"default"="2"})
     */
    private $valeur = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="prixvente", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $prixvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prixvente2", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $prixvente2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prixachat2", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $prixachat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Prixachat", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $prixachat = '0';

    public function getSeqassur(): ?string
    {
        return $this->seqassur;
    }

    public function getLibassur(): ?string
    {
        return $this->libassur;
    }

    public function setLibassur(string $libassur): self
    {
        $this->libassur = $libassur;

        return $this;
    }

    public function getTotal1(): ?string
    {
        return $this->total1;
    }

    public function setTotal1(string $total1): self
    {
        $this->total1 = $total1;

        return $this;
    }

    public function getTotal2(): ?string
    {
        return $this->total2;
    }

    public function setTotal2(string $total2): self
    {
        $this->total2 = $total2;

        return $this;
    }

    public function getTypevaleur(): ?string
    {
        return $this->typevaleur;
    }

    public function setTypevaleur(string $typevaleur): self
    {
        $this->typevaleur = $typevaleur;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(string $valeur): self
    {
        $this->valeur = $valeur;

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

    public function getPrixvente2(): ?string
    {
        return $this->prixvente2;
    }

    public function setPrixvente2(string $prixvente2): self
    {
        $this->prixvente2 = $prixvente2;

        return $this;
    }

    public function getPrixachat2(): ?string
    {
        return $this->prixachat2;
    }

    public function setPrixachat2(string $prixachat2): self
    {
        $this->prixachat2 = $prixachat2;

        return $this;
    }

    public function getPrixachat(): ?string
    {
        return $this->prixachat;
    }

    public function setPrixachat(string $prixachat): self
    {
        $this->prixachat = $prixachat;

        return $this;
    }


}
