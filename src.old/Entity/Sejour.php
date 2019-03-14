<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sejour
 *
 * @ORM\Table(name="sejour")
 * @ORM\Entity(repositoryClass="App\Repository\SejourRepository")
 */
class Sejour
{
    /**
     * @var int
     *
     * @ORM\Column(name="SEJNO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sejno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SEJINTITULE", type="string", length=128, nullable=true)
     */
    private $sejintitule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SEJMONTANTMBI", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sejmontantmbi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="SEJDTEDEB", type="date", nullable=true)
     */
    private $sejdtedeb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SEJDUREE", type="smallint", nullable=true)
     */
    private $sejduree;

    public function getSejno(): ?int
    {
        return $this->sejno;
    }

    public function getSejintitule(): ?string
    {
        return $this->sejintitule;
    }

    public function setSejintitule(?string $sejintitule): self
    {
        $this->sejintitule = $sejintitule;

        return $this;
    }

    public function getSejmontantmbi()
    {
        return $this->sejmontantmbi;
    }

    public function setSejmontantmbi($sejmontantmbi): self
    {
        $this->sejmontantmbi = $sejmontantmbi;

        return $this;
    }

    public function getSejdtedeb(): ?\DateTimeInterface
    {
        return $this->sejdtedeb;
    }



    public function setSejdtedeb(?\DateTimeInterface $sejdtedeb): self
    {
        $this->sejdtedeb = $sejdtedeb;

        return $this;
    }

    public function getSejduree(): ?int
    {
        return $this->sejduree;
    }

    public function setSejduree(?int $sejduree): self
    {
        $this->sejduree = $sejduree;

        return $this;
    }

    public function getSejdtefin(): ?\DateTimeInterface
    {
        return $this->sejdtedeb->add(new \DateInterval('P'.$this->sejduree.'D'));
    }

    /**
     * Formatage jj-mm-aaaa 
     * @param $pDte : date � formater
     * @return mixed
     */
    public function getSejDteFormatFR($pDte)
    {
        return substr($pDte, 0,4).substr($pDte, 4);
    }


}
