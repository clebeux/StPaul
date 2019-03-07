<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SEJOURRepository")
 */
class SEJOUR
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $essai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEssai(): ?string
    {
        return $this->essai;
    }

    public function setEssai(?string $essai): self
    {
        $this->essai = $essai;

        return $this;
    }
}
