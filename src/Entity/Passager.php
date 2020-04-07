<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Passager
 *
 * @ORM\Table(name="PASSAGER", indexes={@ORM\Index(name="PASSAGER37", columns={"SEQRESA"}), @ORM\Index(name="PASSAGER16", columns={"SEQRESA", "SEQPASSAGER", "GENRE", "NOM", "ASSURE", "noshow"})})
 * @ORM\Entity
 */
class Passager
{
    /**
     * @var string
     *
     * @ORM\Column(name="SEQPASSAGER", type="decimal", precision=9, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $seqpassager;

    /**
     * @var string
     *
     * @ORM\Column(name="ORDRE", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $ordre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="GENRE", type="string", length=4, nullable=false)
     */
    private $genre = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=40, nullable=false)
     */
    private $nom = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATENAISS", type="datetime", nullable=false)
     */
    private $datenaiss = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPRESTPROD", type="string", length=50, nullable=false)
     */
    private $libprestprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ASSURE", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $assure = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="noshow", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $noshow = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CodeCure", type="string", length=5, nullable=false)
     */
    private $codecure = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LibCure", type="string", length=50, nullable=false)
     */
    private $libcure = '';

    /**
     * @var string
     *
     * @ORM\Column(name="SG", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $sg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DB", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $db = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TPL", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $tpl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="QUAD", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $quad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DEMIDB", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $demidb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AUTRE1", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $autre1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AUTRE2", type="decimal", precision=3, scale=0, nullable=false)
     */
    private $autre2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ETICKET", type="string", length=12, nullable=false)
     */
    private $eticket = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=80, nullable=false, options={"fixed"=true})
     */
    private $prenom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="typexft", type="string", length=50, nullable=false)
     */
    private $typexft = '';

    /**
     * @var int
     *
     * @ORM\Column(name="agexft", type="integer", nullable=false)
     */
    private $agexft = '0';

    /**
     * @var \Resa
     *
     * @ORM\ManyToOne(targetEntity="Resa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SEQRESA", referencedColumnName="SEQRESA")
     * })
     */
    private $seqresa;

    public function getSeqpassager(): ?string
    {
        return $this->seqpassager;
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

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;

        return $this;
    }

    public function getLibprestprod(): ?string
    {
        return $this->libprestprod;
    }

    public function setLibprestprod(string $libprestprod): self
    {
        $this->libprestprod = $libprestprod;

        return $this;
    }

    public function getAssure(): ?string
    {
        return $this->assure;
    }

    public function setAssure(string $assure): self
    {
        $this->assure = $assure;

        return $this;
    }

    public function getNoshow(): ?string
    {
        return $this->noshow;
    }

    public function setNoshow(string $noshow): self
    {
        $this->noshow = $noshow;

        return $this;
    }

    public function getCodecure(): ?string
    {
        return $this->codecure;
    }

    public function setCodecure(string $codecure): self
    {
        $this->codecure = $codecure;

        return $this;
    }

    public function getLibcure(): ?string
    {
        return $this->libcure;
    }

    public function setLibcure(string $libcure): self
    {
        $this->libcure = $libcure;

        return $this;
    }

    public function getSg(): ?string
    {
        return $this->sg;
    }

    public function setSg(string $sg): self
    {
        $this->sg = $sg;

        return $this;
    }

    public function getDb(): ?string
    {
        return $this->db;
    }

    public function setDb(string $db): self
    {
        $this->db = $db;

        return $this;
    }

    public function getTpl(): ?string
    {
        return $this->tpl;
    }

    public function setTpl(string $tpl): self
    {
        $this->tpl = $tpl;

        return $this;
    }

    public function getQuad(): ?string
    {
        return $this->quad;
    }

    public function setQuad(string $quad): self
    {
        $this->quad = $quad;

        return $this;
    }

    public function getDemidb(): ?string
    {
        return $this->demidb;
    }

    public function setDemidb(string $demidb): self
    {
        $this->demidb = $demidb;

        return $this;
    }

    public function getAutre1(): ?string
    {
        return $this->autre1;
    }

    public function setAutre1(string $autre1): self
    {
        $this->autre1 = $autre1;

        return $this;
    }

    public function getAutre2(): ?string
    {
        return $this->autre2;
    }

    public function setAutre2(string $autre2): self
    {
        $this->autre2 = $autre2;

        return $this;
    }

    public function getEticket(): ?string
    {
        return $this->eticket;
    }

    public function setEticket(string $eticket): self
    {
        $this->eticket = $eticket;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTypexft(): ?string
    {
        return $this->typexft;
    }

    public function setTypexft(string $typexft): self
    {
        $this->typexft = $typexft;

        return $this;
    }

    public function getAgexft(): ?int
    {
        return $this->agexft;
    }

    public function setAgexft(int $agexft): self
    {
        $this->agexft = $agexft;

        return $this;
    }

    public function getSeqresa(): ?Resa
    {
        return $this->seqresa;
    }

    public function setSeqresa(?Resa $seqresa): self
    {
        $this->seqresa = $seqresa;

        return $this;
    }


}
