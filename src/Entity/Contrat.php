<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="CONTRAT")
 * @ORM\Entity
 */
class Contrat
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQCONTRAT", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqcontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQCLT", type="string", length=6, nullable=false, options={"default"=" "})
     */
    private $seqclt = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMCLT", type="string", length=50, nullable=false)
     */
    private $nomclt = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEVOL", type="datetime", nullable=false)
     */
    private $datevol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOL", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $seqvol = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SIEGE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $siege = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIX", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $prix = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CLASSE", type="string", length=3, nullable=false)
     */
    private $classe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="INCLUSE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $incluse = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXE", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TAXECARBU", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $taxecarbu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DELAI", type="decimal", precision=2, scale=0, nullable=false)
     */
    private $delai = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REF", type="string", length=20, nullable=false, options={"default"=" "})
     */
    private $ref = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="MOTIF", type="string", length=50, nullable=false, options={"default"=" "})
     */
    private $motif = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NBFACT", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $nbfact = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ROTATION", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $rotation = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateretro", type="datetime", nullable=false)
     */
    private $dateretro = '';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $total = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="embarque", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $embarque = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $nature = '0';

    public function getSeqcontrat(): ?string
    {
        return $this->seqcontrat;
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

    public function getNomclt(): ?string
    {
        return $this->nomclt;
    }

    public function setNomclt(string $nomclt): self
    {
        $this->nomclt = $nomclt;

        return $this;
    }

    public function getDatevol(): ?\DateTimeInterface
    {
        return $this->datevol;
    }

    public function setDatevol(\DateTimeInterface $datevol): self
    {
        $this->datevol = $datevol;

        return $this;
    }

    public function getSeqvol(): ?string
    {
        return $this->seqvol;
    }

    public function setSeqvol(string $seqvol): self
    {
        $this->seqvol = $seqvol;

        return $this;
    }

    public function getSiege(): ?string
    {
        return $this->siege;
    }

    public function setSiege(string $siege): self
    {
        $this->siege = $siege;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getIncluse(): ?string
    {
        return $this->incluse;
    }

    public function setIncluse(string $incluse): self
    {
        $this->incluse = $incluse;

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

    public function getTaxecarbu(): ?string
    {
        return $this->taxecarbu;
    }

    public function setTaxecarbu(string $taxecarbu): self
    {
        $this->taxecarbu = $taxecarbu;

        return $this;
    }

    public function getDelai(): ?string
    {
        return $this->delai;
    }

    public function setDelai(string $delai): self
    {
        $this->delai = $delai;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): self
    {
        $this->motif = $motif;

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

    public function getNbfact(): ?string
    {
        return $this->nbfact;
    }

    public function setNbfact(string $nbfact): self
    {
        $this->nbfact = $nbfact;

        return $this;
    }

    public function getRotation(): ?string
    {
        return $this->rotation;
    }

    public function setRotation(string $rotation): self
    {
        $this->rotation = $rotation;

        return $this;
    }

    public function getDateretro(): ?\DateTimeInterface
    {
        return $this->dateretro;
    }

    public function setDateretro(\DateTimeInterface $dateretro): self
    {
        $this->dateretro = $dateretro;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getEmbarque(): ?string
    {
        return $this->embarque;
    }

    public function setEmbarque(string $embarque): self
    {
        $this->embarque = $embarque;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): self
    {
        $this->nature = $nature;

        return $this;
    }


}
