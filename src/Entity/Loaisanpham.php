<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoaisanphamRepository")
 */
class Loaisanpham
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tenloai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTenloai(): ?string
    {
        return $this->tenloai;
    }

    public function setTenloai(string $tenloai): self
    {
        $this->tenloai = $tenloai;

        return $this;
    }
}
