<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR", indexes={@ORM\Index(name="MDP", columns={"MDP"}), @ORM\Index(name="IDX_901FF15B43ECD2D9", columns={"SEQNIVEAU"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQUTIL", type="decimal", precision=4, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sequtil;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     *
     * @ORM\Column(name="MAJ", type="datetime", nullable=false)
     */
    private $maj = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEUTIL", type="string", length=6, nullable=false, options={"default"=" "})
     */
    private $codeutil = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="NOMUTIL", type="string", length=30, nullable=false, options={"default"=" "})
     */
    private $nomutil = ' ';


    /**
     * @var string
     *
     * @ORM\Column(name="PROFILUTIL", type="string", length=25, nullable=false, options={"default"=" "})
     */
    private $profilutil = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="MDP", type="string", length=5, nullable=false, options={"default"=" "})
     */
    private $mdp = ' ';

    /**
     * @var string
     *
     * @ORM\Column(name="BADGE", type="string", length=4, nullable=false, options={"default"=" "})
     */
    private $badge = ' ';

    /**
     * @var bool
     *
     * @ORM\Column(name="FLAG1", type="boolean", nullable=false)
     */
    private $flag1 = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="FLAG2", type="boolean", nullable=false)
     */
    private $flag2 = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEDEB", type="datetime", nullable=false)
     */
    private $datedeb = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HEURED", type="datetime", nullable=false)
     */
    private $heured = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATEFIN", type="datetime", nullable=false)
     */
    private $datefin = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HEUREF", type="datetime", nullable=false)
     */
    private $heuref = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="ENCOURS", type="boolean", nullable=false)
     */
    private $encours = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="emailutil", type="string", length=50, nullable=false)
     */
    private $emailutil = '';

    /**
     * @var string
     *
     * @ORM\Column(name="WEBLOGIN", type="string", length=10, nullable=false)
     */
    private $weblogin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="WEBMDP", type="string", length=10, nullable=false)
     */
    private $webmdp = '';

    /**
     * @var \Niveau
     *
     * @ORM\ManyToOne(targetEntity="Niveau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQNIVEAU", referencedColumnName="SEQNIVEAU")
     * })
     */
    private $seqniveau;

    public function getSequtil(): ?string
    {
        return $this->sequtil;
    }

    public function getMaj(): ?\DateTimeInterface
    {
        return  $this->maj;
    }

    public function setMaj(\DateTimeInterface $maj): self
    {
        $this->maj = $maj;

        return $this;
    }

    public function getCodeutil(): ?string
    {
        return $this->codeutil;
    }

    public function setCodeutil(string $codeutil): self
    {
        $this->codeutil = $codeutil;

        return $this;
    }

    public function getNomutil(): ?string
    {
        return $this->nomutil;
    }

    public function setNomutil(string $nomutil): self
    {
        $this->nomutil = $nomutil;

        return $this;
    }

    public function getProfilutil(): ?string
    {
        return $this->profilutil;
    }

    public function setProfilutil(string $profilutil): self
    {
        $this->profilutil = $profilutil;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getBadge(): ?string
    {
        return $this->badge;
    }

    public function setBadge(string $badge): self
    {
        $this->badge = $badge;

        return $this;
    }

    public function getFlag1(): ?bool
    {
        return $this->flag1;
    }

    public function setFlag1(bool $flag1): self
    {
        $this->flag1 = $flag1;

        return $this;
    }

    public function getFlag2(): ?bool
    {
        return $this->flag2;
    }

    public function setFlag2(bool $flag2): self
    {
        $this->flag2 = $flag2;

        return $this;
    }

    public function getDatedeb(): ?\DateTimeInterface
    {
        return $this->datedeb;
    }

    public function setDatedeb(\DateTimeInterface $datedeb): self
    {
        $this->datedeb = $datedeb;

        return $this;
    }

    public function getHeured(): ?\DateTimeInterface
    {
        return $this->heured;
    }

    public function setHeured(\DateTimeInterface $heured): self
    {
        $this->heured = $heured;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getHeuref(): ?\DateTimeInterface
    {
        return $this->heuref;
    }

    public function setHeuref(\DateTimeInterface $heuref): self
    {
        $this->heuref = $heuref;

        return $this;
    }

    public function getEncours(): ?bool
    {
        return $this->encours;
    }

    public function setEncours(bool $encours): self
    {
        $this->encours = $encours;

        return $this;
    }

    public function getEmailutil(): ?string
    {
        return $this->emailutil;
    }

    public function setEmailutil(string $emailutil): self
    {
        $this->emailutil = $emailutil;

        return $this;
    }

    public function getWeblogin(): ?string
    {
        return $this->weblogin;
    }

    public function setWeblogin(string $weblogin): self
    {
        $this->weblogin = $weblogin;

        return $this;
    }

    public function getWebmdp(): ?string
    {
        return $this->webmdp;
    }

    public function setWebmdp(string $webmdp): self
    {
        $this->webmdp = $webmdp;

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
    public function getUsername(): string {
        return (string)$this->nomutil;
    }


    public function getPassword() {
        return $this->mdp;
    }

    public function eraseCredentials() {}
    public function getSalt() {}

    public function __toString()
    {
        return $this->nomutil;
    }

}
