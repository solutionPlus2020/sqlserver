<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WsTransaction
 *
 * @ORM\Table(name="ws_transaction")
 * @ORM\Entity
 */
class WsTransaction
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CodeTransaction", type="string", length=50, nullable=false)
     */
    private $codetransaction = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodetransaction(): ?string
    {
        return $this->codetransaction;
    }

    public function setCodetransaction(string $codetransaction): self
    {
        $this->codetransaction = $codetransaction;

        return $this;
    }


}
