<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoTheme
 *
 * @ORM\Table(name="bo_theme")
 * @ORM\Entity
 */
class BoTheme
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
     * @var string|null
     *
     * @ORM\Column(name="theme", type="string", length=80, nullable=true)
     */
    private $theme = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }


}
