<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foufact
 *
 * @ORM\Table(name="FOUFACT")
 * @ORM\Entity
 */
class Foufact
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQFOUFACT", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqfoufact;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFACT", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqfact = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFACT", type="datetime", nullable=false)
     */
    private $datefact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQFOUR", type="string", length=6, nullable=false)
     */
    private $seqfour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMFOUR", type="string", length=30, nullable=false)
     */
    private $nomfour = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $total = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REGLE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $regle = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LETTRE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $lettre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DEVISE", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $devise = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBMONNAIE", type="string", length=3, nullable=false)
     */
    private $libmonnaie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TAUX", type="decimal", precision=7, scale=4, nullable=false)
     */
    private $taux = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="COMPTA", type="datetime", nullable=false)
     */
    private $compta = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATED", type="datetime", nullable=false)
     */
    private $dated = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SEQVOLD", type="decimal", precision=5, scale=0, nullable=false)
     */
    private $seqvold = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PREVISION", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $prevision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="REGIME", type="string", length=10, nullable=false)
     */
    private $regime = '';

    /**
     * @var string
     *
     * @ORM\Column(name="RANGEE", type="string", length=30, nullable=false)
     */
    private $rangee = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="text", length=16, nullable=false)
     */
    private $obs = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATESAISIE", type="datetime", nullable=false)
     */
    private $datesaisie = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEPREVU", type="datetime", nullable=false)
     */
    private $dateprevu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TYPEFACT", type="string", length=30, nullable=false)
     */
    private $typefact = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MOIS", type="string", length=2, nullable=false)
     */
    private $mois = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ANNEE", type="string", length=4, nullable=false)
     */
    private $annee = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DONTTVA", type="decimal", precision=9, scale=2, nullable=false)
     */
    private $donttva = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="COMPTABILISATION", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $comptabilisation = '0';

    public function getSeqfoufact(): ?string
    {
        return $this->seqfoufact;
    }

    public function setSeqfoufact(string $seqfoufact): self
    {
        $this->seqfoufact = $seqfoufact;

        return $this;
    }

    public function getSeqfact(): ?string
    {
        return $this->seqfact;
    }

    public function getDatefact(): ?\DateTimeInterface
    {
        return $this->datefact;
    }

    public function setDatefact(\DateTimeInterface $datefact): self
    {
        $this->datefact = $datefact;

        return $this;
    }

    public function getSeqfour(): ?string
    {
        return $this->seqfour;
    }

    public function setSeqfour(string $seqfour): self
    {
        $this->seqfour = $seqfour;

        return $this;
    }

    public function getNomfour(): ?string
    {
        return $this->nomfour;
    }

    public function setNomfour(string $nomfour): self
    {
        $this->nomfour = $nomfour;

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

    public function getRegle(): ?string
    {
        return $this->regle;
    }

    public function setRegle(string $regle): self
    {
        $this->regle = $regle;

        return $this;
    }

    public function getLettre(): ?string
    {
        return $this->lettre;
    }

    public function setLettre(string $lettre): self
    {
        $this->lettre = $lettre;

        return $this;
    }

    public function getDevise(): ?string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): self
    {
        $this->devise = $devise;

        return $this;
    }

    public function getLibmonnaie(): ?string
    {
        return $this->libmonnaie;
    }

    public function setLibmonnaie(string $libmonnaie): self
    {
        $this->libmonnaie = $libmonnaie;

        return $this;
    }

    public function getTaux(): ?string
    {
        return $this->taux;
    }

    public function setTaux(string $taux): self
    {
        $this->taux = $taux;

        return $this;
    }

    public function getCompta(): ?\DateTimeInterface
    {
        return $this->compta;
    }

    public function setCompta(\DateTimeInterface $compta): self
    {
        $this->compta = $compta;

        return $this;
    }

    public function getDated(): ?\DateTimeInterface
    {
        return $this->dated;
    }

    public function setDated(\DateTimeInterface $dated): self
    {
        $this->dated = $dated;

        return $this;
    }

    public function getSeqvold(): ?string
    {
        return $this->seqvold;
    }

    public function setSeqvold(string $seqvold): self
    {
        $this->seqvold = $seqvold;

        return $this;
    }

    public function getPrevision(): ?string
    {
        return $this->prevision;
    }

    public function setPrevision(string $prevision): self
    {
        $this->prevision = $prevision;

        return $this;
    }

    public function getRegime(): ?string
    {
        return $this->regime;
    }

    public function setRegime(string $regime): self
    {
        $this->regime = $regime;

        return $this;
    }

    public function getRangee(): ?string
    {
        return $this->rangee;
    }

    public function setRangee(string $rangee): self
    {
        $this->rangee = $rangee;

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

    public function getDatesaisie(): ?\DateTimeInterface
    {
        return $this->datesaisie;
    }

    public function setDatesaisie(\DateTimeInterface $datesaisie): self
    {
        $this->datesaisie = $datesaisie;

        return $this;
    }

    public function getDateprevu(): ?\DateTimeInterface
    {
        return $this->dateprevu;
    }

    public function setDateprevu(\DateTimeInterface $dateprevu): self
    {
        $this->dateprevu = $dateprevu;

        return $this;
    }

    public function getTypefact(): ?string
    {
        return $this->typefact;
    }

    public function setTypefact(string $typefact): self
    {
        $this->typefact = $typefact;

        return $this;
    }

    public function getMois(): ?string
    {
        return $this->mois;
    }

    public function setMois(string $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getDonttva(): ?string
    {
        return $this->donttva;
    }

    public function setDonttva(string $donttva): self
    {
        $this->donttva = $donttva;

        return $this;
    }

    public function getComptabilisation(): ?string
    {
        return $this->comptabilisation;
    }

    public function setComptabilisation(string $comptabilisation): self
    {
        $this->comptabilisation = $comptabilisation;

        return $this;
    }


}
