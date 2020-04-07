<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Litige
 *
 * @ORM\Table(name="LITIGE")
 * @ORM\Entity
 */
class Litige
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEQ_LITIGE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqLitige;

    /**
     * @var int
     *
     * @ORM\Column(name="SEQRESA", type="integer", nullable=false)
     */
    private $seqresa = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DAT_LITIGE", type="datetime", nullable=false)
     */
    private $datLitige = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="RETARD", type="boolean", nullable=false)
     */
    private $retard = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="PRESTATION", type="boolean", nullable=false)
     */
    private $prestation = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="TRANSFERT", type="boolean", nullable=false)
     */
    private $transfert = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ASSISTANCE", type="boolean", nullable=false)
     */
    private $assistance = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="SPA", type="boolean", nullable=false)
     */
    private $spa = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="EXCURSION", type="boolean", nullable=false)
     */
    private $excursion = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="DELOGEMENT", type="boolean", nullable=false)
     */
    private $delogement = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBJ_LITIGE", type="text", length=16, nullable=false)
     */
    private $objLitige = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REP_CLIENT", type="text", length=16, nullable=false)
     */
    private $repClient = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PROPOSITION", type="text", length=16, nullable=false)
     */
    private $proposition = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NAT_REPONSE", type="string", length=10, nullable=false)
     */
    private $natReponse = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DAT_REPONSE", type="datetime", nullable=false)
     */
    private $datReponse = '';

    /**
     * @var int
     *
     * @ORM\Column(name="REM_ACCEPTE", type="integer", nullable=false)
     */
    private $remAccepte = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MNT_REMBOURSEMENT", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $mntRemboursement = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DAT_CLOTURE", type="datetime", nullable=false)
     */
    private $datCloture = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DAT_TRANSMISSION", type="datetime", nullable=false)
     */
    private $datTransmission = '';

    /**
     * @var int
     *
     * @ORM\Column(name="STATUT", type="integer", nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FRAIS", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $frais = '0';

    public function getSeqLitige(): ?int
    {
        return $this->seqLitige;
    }

    public function getSeqresa(): ?int
    {
        return $this->seqresa;
    }

    public function setSeqresa(int $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }

    public function getDatLitige(): ?\DateTimeInterface
    {
        return $this->datLitige;
    }

    public function setDatLitige(\DateTimeInterface $datLitige): self
    {
        $this->datLitige = $datLitige;

        return $this;
    }

    public function getRetard(): ?bool
    {
        return $this->retard;
    }

    public function setRetard(bool $retard): self
    {
        $this->retard = $retard;

        return $this;
    }

    public function getPrestation(): ?bool
    {
        return $this->prestation;
    }

    public function setPrestation(bool $prestation): self
    {
        $this->prestation = $prestation;

        return $this;
    }

    public function getTransfert(): ?bool
    {
        return $this->transfert;
    }

    public function setTransfert(bool $transfert): self
    {
        $this->transfert = $transfert;

        return $this;
    }

    public function getAssistance(): ?bool
    {
        return $this->assistance;
    }

    public function setAssistance(bool $assistance): self
    {
        $this->assistance = $assistance;

        return $this;
    }

    public function getSpa(): ?bool
    {
        return $this->spa;
    }

    public function setSpa(bool $spa): self
    {
        $this->spa = $spa;

        return $this;
    }

    public function getExcursion(): ?bool
    {
        return $this->excursion;
    }

    public function setExcursion(bool $excursion): self
    {
        $this->excursion = $excursion;

        return $this;
    }

    public function getDelogement(): ?bool
    {
        return $this->delogement;
    }

    public function setDelogement(bool $delogement): self
    {
        $this->delogement = $delogement;

        return $this;
    }

    public function getObjLitige(): ?string
    {
        return $this->objLitige;
    }

    public function setObjLitige(string $objLitige): self
    {
        $this->objLitige = $objLitige;

        return $this;
    }

    public function getRepClient(): ?string
    {
        return $this->repClient;
    }

    public function setRepClient(string $repClient): self
    {
        $this->repClient = $repClient;

        return $this;
    }

    public function getProposition(): ?string
    {
        return $this->proposition;
    }

    public function setProposition(string $proposition): self
    {
        $this->proposition = $proposition;

        return $this;
    }

    public function getNatReponse(): ?string
    {
        return $this->natReponse;
    }

    public function setNatReponse(string $natReponse): self
    {
        $this->natReponse = $natReponse;

        return $this;
    }

    public function getDatReponse(): ?\DateTimeInterface
    {
        return $this->datReponse;
    }

    public function setDatReponse(\DateTimeInterface $datReponse): self
    {
        $this->datReponse = $datReponse;

        return $this;
    }

    public function getRemAccepte(): ?int
    {
        return $this->remAccepte;
    }

    public function setRemAccepte(int $remAccepte): self
    {
        $this->remAccepte = $remAccepte;

        return $this;
    }

    public function getMntRemboursement(): ?string
    {
        return $this->mntRemboursement;
    }

    public function setMntRemboursement(string $mntRemboursement): self
    {
        $this->mntRemboursement = $mntRemboursement;

        return $this;
    }

    public function getDatCloture(): ?\DateTimeInterface
    {
        return $this->datCloture;
    }

    public function setDatCloture(\DateTimeInterface $datCloture): self
    {
        $this->datCloture = $datCloture;

        return $this;
    }

    public function getDatTransmission(): ?\DateTimeInterface
    {
        return $this->datTransmission;
    }

    public function setDatTransmission(\DateTimeInterface $datTransmission): self
    {
        $this->datTransmission = $datTransmission;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getFrais(): ?string
    {
        return $this->frais;
    }

    public function setFrais(string $frais): self
    {
        $this->frais = $frais;

        return $this;
    }


}
