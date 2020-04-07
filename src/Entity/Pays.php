<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="PAYS")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPAYS", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpays;

    /**
     * @var string
     *
     * @ORM\Column(name="CODEPAYS", type="string", length=2, nullable=false)
     */
    private $codepays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPAYS", type="string", length=30, nullable=false)
     */
    private $libpays = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PLACE", type="string", length=8, nullable=false)
     */
    private $place = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ORDRE", type="decimal", precision=2, scale=0, nullable=false, options={"default"="99"})
     */
    private $ordre = '99';

    /**
     * @var string
     *
     * @ORM\Column(name="NATURE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $nature = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CONTINENT", type="string", length=10, nullable=false)
     */
    private $continent = '';

    public function getIdpays(): ?int
    {
        return $this->idpays;
    }

    public function getCodepays(): ?string
    {
        return $this->codepays;
    }

    public function setCodepays(string $codepays): self
    {
        $this->codepays = $codepays;

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

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getOrdre(): ?string
    {
        return $this->ordre;
    }

    public function setOrdre(string $ordre): self
    {
        $this->ordre = $ordre;

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

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(string $continent): self
    {
        $this->continent = $continent;

        return $this;
    }


}
