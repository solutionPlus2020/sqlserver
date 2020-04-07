<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChambreVp
 *
 * @ORM\Table(name="Chambre_VP")
 * @ORM\Entity
 */
class ChambreVp
{
    /**
     * @var string
     *
     * @ORM\Column(name="CODEPROD", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="LIBPROD", type="string", length=80, nullable=false)
     */
    private $libprod = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_SG", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okSg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_DBL", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okDbl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_DBL1", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okDbl1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_DBL2", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okDbl2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_TPL", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okTpl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_TPL1", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okTpl1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_TPL2", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okTpl2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_QUAD", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okQuad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_QUAD1", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okQuad1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CODEHOTEL", type="string", length=10, nullable=false)
     */
    private $codehotel = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_family3", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okFamily3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OK_family4", type="decimal", precision=1, scale=0, nullable=false)
     */
    private $okFamily4 = '0';

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function getLibprod(): ?string
    {
        return $this->libprod;
    }

    public function setLibprod(string $libprod): self
    {
        $this->libprod = $libprod;

        return $this;
    }

    public function getOkSg(): ?string
    {
        return $this->okSg;
    }

    public function setOkSg(string $okSg): self
    {
        $this->okSg = $okSg;

        return $this;
    }

    public function getOkDbl(): ?string
    {
        return $this->okDbl;
    }

    public function setOkDbl(string $okDbl): self
    {
        $this->okDbl = $okDbl;

        return $this;
    }

    public function getOkDbl1(): ?string
    {
        return $this->okDbl1;
    }

    public function setOkDbl1(string $okDbl1): self
    {
        $this->okDbl1 = $okDbl1;

        return $this;
    }

    public function getOkDbl2(): ?string
    {
        return $this->okDbl2;
    }

    public function setOkDbl2(string $okDbl2): self
    {
        $this->okDbl2 = $okDbl2;

        return $this;
    }

    public function getOkTpl(): ?string
    {
        return $this->okTpl;
    }

    public function setOkTpl(string $okTpl): self
    {
        $this->okTpl = $okTpl;

        return $this;
    }

    public function getOkTpl1(): ?string
    {
        return $this->okTpl1;
    }

    public function setOkTpl1(string $okTpl1): self
    {
        $this->okTpl1 = $okTpl1;

        return $this;
    }

    public function getOkTpl2(): ?string
    {
        return $this->okTpl2;
    }

    public function setOkTpl2(string $okTpl2): self
    {
        $this->okTpl2 = $okTpl2;

        return $this;
    }

    public function getOkQuad(): ?string
    {
        return $this->okQuad;
    }

    public function setOkQuad(string $okQuad): self
    {
        $this->okQuad = $okQuad;

        return $this;
    }

    public function getOkQuad1(): ?string
    {
        return $this->okQuad1;
    }

    public function setOkQuad1(string $okQuad1): self
    {
        $this->okQuad1 = $okQuad1;

        return $this;
    }

    public function getCodehotel(): ?string
    {
        return $this->codehotel;
    }

    public function setCodehotel(string $codehotel): self
    {
        $this->codehotel = $codehotel;

        return $this;
    }

    public function getOkFamily3(): ?string
    {
        return $this->okFamily3;
    }

    public function setOkFamily3(string $okFamily3): self
    {
        $this->okFamily3 = $okFamily3;

        return $this;
    }

    public function getOkFamily4(): ?string
    {
        return $this->okFamily4;
    }

    public function setOkFamily4(string $okFamily4): self
    {
        $this->okFamily4 = $okFamily4;

        return $this;
    }


}
