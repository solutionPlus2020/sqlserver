<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestprod
 *
 * @ORM\Table(name="PRESTPROD")
 * @ORM\Entity
 */
class Prestprod
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQPRESTPROD", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqprestprod;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPRESTPROD", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeprestprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPRESTPROD", type="string", length=50, nullable=false)
     */
    private $libprestprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=20, nullable=false)
     */
    private $libpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXACHAT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixachat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIXVENTE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $prixvente = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PENSION", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $pension = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="PARAM", type="smallint", nullable=false, options={"comment"="indique si l'option s'applique à: 1: PAR PERSONNE 2: PAR DOSSIER 3: PAR CHAMBRE 4: PAR ADULTE 5: PAR ENfANT 6: PAR BEBE"})
     */
    private $param = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="voucher", type="integer", nullable=false)
     */
    private $voucher = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="demande_confirmation", type="integer", nullable=false)
     */
    private $demandeConfirmation = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="voucher_par_pax", type="integer", nullable=false)
     */
    private $voucherParPax = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=false)
     */
    private $datedebut = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFIN", type="datetime", nullable=false)
     */
    private $datefin = '';

    public function getSeqprestprod(): ?string
    {
        return $this->seqprestprod;
    }

    public function setSeqprestprod(string $seqprestprod): self
    {
        $this->seqprestprod = $seqprestprod;

        return $this;
    }

    public function getCodeprestprod(): ?string
    {
        return $this->codeprestprod;
    }

    public function getLibprestprod(): ?string
    {
        return $this->libprestprod;
    }

    public function setLibprestprod(string $libprestprod): self
    {
        $this->libprestprod = $libprestprod;

        return $this;
    }

    public function getLibpays(): ?string
    {
        return $this->libpays;
    }

    public function setLibpays(string $libpays): self
    {
        $this->libpays = $libpays;

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

    public function getPrixvente(): ?string
    {
        return $this->prixvente;
    }

    public function setPrixvente(string $prixvente): self
    {
        $this->prixvente = $prixvente;

        return $this;
    }

    public function getPension(): ?string
    {
        return $this->pension;
    }

    public function setPension(string $pension): self
    {
        $this->pension = $pension;

        return $this;
    }

    public function getParam(): ?int
    {
        return $this->param;
    }

    public function setParam(int $param): self
    {
        $this->param = $param;

        return $this;
    }

    public function getVoucher(): ?int
    {
        return $this->voucher;
    }

    public function setVoucher(int $voucher): self
    {
        $this->voucher = $voucher;

        return $this;
    }

    public function getDemandeConfirmation(): ?int
    {
        return $this->demandeConfirmation;
    }

    public function setDemandeConfirmation(int $demandeConfirmation): self
    {
        $this->demandeConfirmation = $demandeConfirmation;

        return $this;
    }

    public function getVoucherParPax(): ?int
    {
        return $this->voucherParPax;
    }

    public function setVoucherParPax(int $voucherParPax): self
    {
        $this->voucherParPax = $voucherParPax;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }


}
