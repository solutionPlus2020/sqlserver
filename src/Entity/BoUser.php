<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoUser
 *
 * @ORM\Table(name="bo_user")
 * @ORM\Entity
 */
class BoUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="applicationid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applicationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uid", type="string", length=50, nullable=true)
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pwd", type="string", length=50, nullable=true)
     */
    private $pwd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="active", type="string", length=1, nullable=true)
     */
    private $active;

    public function getApplicationid(): ?int
    {
        return $this->applicationid;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(?string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    public function setActive(?string $active): self
    {
        $this->active = $active;

        return $this;
    }


}
