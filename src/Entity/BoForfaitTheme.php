<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoForfaitTheme
 *
 * @ORM\Table(name="bo_forfait_theme")
 * @ORM\Entity
 */
class BoForfaitTheme
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idforfait", type="integer", nullable=false)
     */
    private $idforfait;

    /**
     * @var int
     *
     * @ORM\Column(name="idtheme", type="integer", nullable=false)
     */
    private $idtheme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdforfait(): ?int
    {
        return $this->idforfait;
    }

    public function setIdforfait(int $idforfait): self
    {
        $this->idforfait = $idforfait;

        return $this;
    }

    public function getIdtheme(): ?int
    {
        return $this->idtheme;
    }

    public function setIdtheme(int $idtheme): self
    {
        $this->idtheme = $idtheme;

        return $this;
    }


}
