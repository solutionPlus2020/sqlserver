<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoMealplan
 *
 * @ORM\Table(name="bo_MealPlan")
 * @ORM\Entity
 */
class BoMealplan
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
     * @var string
     *
     * @ORM\Column(name="Lib", type="string", length=50, nullable=false)
     */
    private $lib;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLib(): ?string
    {
        return $this->lib;
    }

    public function setLib(string $lib): self
    {
        $this->lib = $lib;

        return $this;
    }


}
