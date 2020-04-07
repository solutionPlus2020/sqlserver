<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObsConvo
 *
 * @ORM\Table(name="OBS_CONVO", uniqueConstraints={@ORM\UniqueConstraint(name="IX_OBS_CONVO", columns={"AERO"})})
 * @ORM\Entity
 */
class ObsConvo
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQOBSCONVO", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqobsconvo;

    /**
     * @var string
     *
     * @ORM\Column(name="AERO", type="string", length=3, nullable=false)
     */
    private $aero = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODAFFRET1", type="string", length=3, nullable=false, options={"comment"="CODE DE LA COMPAGNIE AERIENNE"})
     */
    private $codaffret1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OBS", type="string", length=200, nullable=false)
     */
    private $obs = '';

    public function getSeqobsconvo(): ?string
    {
        return $this->seqobsconvo;
    }

    public function getAero(): ?string
    {
        return $this->aero;
    }

    public function setAero(string $aero): self
    {
        $this->aero = $aero;

        return $this;
    }

    public function getCodaffret1(): ?string
    {
        return $this->codaffret1;
    }

    public function setCodaffret1(string $codaffret1): self
    {
        $this->codaffret1 = $codaffret1;

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


}
