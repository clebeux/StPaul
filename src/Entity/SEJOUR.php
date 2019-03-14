<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SejourRepository")
 */
class Sejour
{
  /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $SEJNO;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $sejintitule;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sejmontantmbi;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $sejdtedeb;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $sejduree;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSEJNO(): ?int
    {
        return $this->SEJNO;
    }

    public function setSEJNO(int $SEJNO): self
    {
        $this->SEJNO = $SEJNO;

        return $this;
    }

    public function getsejintitule(): ?string
    {
        return $this->sejintitule;
    }

    public function setsejintitule(?string $sejintitule): self
    {
        $this->sejintitule = $sejintitule;

        return $this;
    }

    public function getsejmontantmbi()
    {
        return $this->sejmontantmbi;
    }

    public function setsejmontantmbi($sejmontantmbi): self
    {
        $this->sejmontantmbi = $sejmontantmbi;

        return $this;
    }

    public function getsejdtedeb(): ?\DateTimeInterface
    {
        return $this->sejdtedeb;
    }

    public function setsejdtedeb(?\DateTimeInterface $sejdtedeb): self
    {
        $this->sejdtedeb = $sejdtedeb;

        return $this;
    }

    public function getsejduree(): ?int
    {
        return $this->sejduree;
    }

    public function setsejduree(?int $sejduree): self
    {
        $this->sejduree = $sejduree;

        return $this;
    }



    //method calcul
    public function PourcentReduc(int $valeur, int $pourcent)
    {
        $calcul = $valeur*($pourcent/100);
        return $calcul;
    }

    //Quotient Familial
    public function PourcentFamilial(int $valeur)
    {
        $pourcent = 10;
        $calcul = $valeur*($pourcent/100);
        return $calcul;
    }

    //2 enfants
    public function Pourcent2Enfants(int $valeur)
    {
        $pourcent = 20;
        $calcul = $valeur*($pourcent/100);
        return $calcul;
    }

    //3 enfants
    public function Pourcent3Enfants(int $valeur)
    {
        $pourcent = 40;
        $calcul = $valeur*($pourcent/100);
        return $calcul;
    }
}
