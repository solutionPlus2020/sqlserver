<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoTrace
 *
 * @ORM\Table(name="bo_trace")
 * @ORM\Entity
 */
class BoTrace
{
    /**
     * @var int
     *
     * @ORM\Column(name="traceid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traceid;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd", type="string", length=50, nullable=false)
     */
    private $pwd = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datelogin", type="datetime", nullable=false)
     */
    private $datelogin;

    public function getTraceid(): ?int
    {
        return $this->traceid;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->pwd;
    }

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getDatelogin(): ?\DateTimeInterface
    {
        return $this->datelogin;
    }

    public function setDatelogin(\DateTimeInterface $datelogin): self
    {
        $this->datelogin = $datelogin;

        return $this;
    }


}
