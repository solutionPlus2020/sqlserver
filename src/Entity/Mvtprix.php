<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mvtprix
 *
 * @ORM\Table(name="MVTPRIX")
 * @ORM\Entity
 */
class Mvtprix
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQMVTPRIX", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqmvtprix;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVENTE", type="decimal", precision=6, scale=0, nullable=false)
     */
    private $seqvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE1", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixvente1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE2", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixvente2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false)
     */
    private $seqclt = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEMODIF", type="datetime", nullable=false)
     */
    private $datemodif = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="string", length=100, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VENDU", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $vendu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="promo_envoye", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $promoEnvoye = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFIEPAR", type="string", length=50, nullable=false)
     */
    private $modifiepar = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MODIFIERPAR", type="string", length=50, nullable=false)
     */
    private $modifierpar = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXNET", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixnet = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXEVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxevente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXEACHAT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxeachat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COM_CLIENT", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $comClient = '0';

    public function getSeqmvtprix(): ?string
    {
        return $this->seqmvtprix;
    }

    public function getSeqvente(): ?string
    {
        return $this->seqvente;
    }

    public function setSeqvente(string $seqvente): self
    {
        $this->seqvente = $seqvente;

        return $this;
    }

    public function getPrixvente1(): ?string
    {
        return $this->prixvente1;
    }

    public function setPrixvente1(string $prixvente1): self
    {
        $this->prixvente1 = $prixvente1;

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

    public function getSeqclt(): ?string
    {
        return $this->seqclt;
    }

    public function setSeqclt(string $seqclt): self
    {
        $this->seqclt = $seqclt;

        return $this;
    }

    public function getDatemodif(): ?\DateTimeInterface
    {
        return $this->datemodif;
    }

    public function setDatemodif(\DateTimeInterface $datemodif): self
    {
        $this->datemodif = $datemodif;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getVendu(): ?string
    {
        return $this->vendu;
    }

    public function setVendu(string $vendu): self
    {
        $this->vendu = $vendu;

        return $this;
    }

    public function getPromoEnvoye(): ?string
    {
        return $this->promoEnvoye;
    }

    public function setPromoEnvoye(string $promoEnvoye): self
    {
        $this->promoEnvoye = $promoEnvoye;

        return $this;
    }

    public function getModifiepar(): ?string
    {
        return $this->modifiepar;
    }

    public function setModifiepar(string $modifiepar): self
    {
        $this->modifiepar = $modifiepar;

        return $this;
    }

    public function getModifierpar(): ?string
    {
        return $this->modifierpar;
    }

    public function setModifierpar(string $modifierpar): self
    {
        $this->modifierpar = $modifierpar;

        return $this;
    }

    public function getPrixnet(): ?string
    {
        return $this->prixnet;
    }

    public function setPrixnet(string $prixnet): self
    {
        $this->prixnet = $prixnet;

        return $this;
    }

    public function getTaxevente(): ?string
    {
        return $this->taxevente;
    }

    public function setTaxevente(string $taxevente): self
    {
        $this->taxevente = $taxevente;

        return $this;
    }

    public function getTaxe(): ?string
    {
        return $this->taxe;
    }

    public function setTaxe(string $taxe): self
    {
        $this->taxe = $taxe;

        return $this;
    }

    public function getTaxeachat(): ?string
    {
        return $this->taxeachat;
    }

    public function setTaxeachat(string $taxeachat): self
    {
        $this->taxeachat = $taxeachat;

        return $this;
    }

    public function getComClient(): ?string
    {
        return $this->comClient;
    }

    public function setComClient(string $comClient): self
    {
        $this->comClient = $comClient;

        return $this;
    }


}
