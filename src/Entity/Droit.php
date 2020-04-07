<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droit
 *
 * @ORM\Table(name="DROIT", indexes={@ORM\Index(name="IDX_3C2E65E143ECD2D9", columns={"SEQNIVEAU"})})
 * @ORM\Entity
 */
class Droit
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQDROIT", type="decimal", precision=9, scale=0, nullable=false)
     */
    private $seqdroit;

    /**
     * @var string
     *
     * @ORM\Column(name="SEQMENU", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seqmenu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UTILISE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $utilise = '0';

    /**
     * @var \Niveau
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQNIVEAU", referencedColumnName="SEQNIVEAU")
     * })
     */
    private $seqniveau;

    public function getSeqdroit(): ?string
    {
        return $this->seqdroit;
    }

    public function setSeqdroit(string $seqdroit): self
    {
        $this->seqdroit = $seqdroit;

        return $this;
    }

    public function getSeqmenu(): ?string
    {
        return $this->seqmenu;
    }

    public function getUtilise(): ?string
    {
        return $this->utilise;
    }

    public function setUtilise(string $utilise): self
    {
        $this->utilise = $utilise;

        return $this;
    }

    public function getSeqniveau(): ?Niveau
    {
        return $this->seqniveau;
    }

    public function setSeqniveau(?Niveau $seqniveau): self
    {
        $this->seqniveau = $seqniveau;

        return $this;
    }


}
