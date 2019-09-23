<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ten;

    /**
     * @ORM\Column(type="integer")
     */
    private $gia;

    /**
     * @ORM\Column(type="integer")
     */
    private $soluong;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $khuyenmai;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @var Loaisanpham
     *
     * @ORM\Column(type="integer")
     *
     *
     *
     */
    private $loai;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $giakhuyenmai;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTen(): ?string
    {
        return $this->ten;
    }

    public function setTen(string $ten): self
    {
        $this->ten = $ten;

        return $this;
    }

    public function getGia(): ?int
    {
        return $this->gia;
    }

    public function setGia(int $gia): self
    {
        $this->gia = $gia;

        return $this;
    }

    public function getSoluong(): ?int
    {
        return $this->soluong;
    }

    public function setSoluong(int $soluong): self
    {
        $this->soluong = $soluong;

        return $this;
    }

    public function getKhuyenmai(): ?int
    {
        return $this->khuyenmai;
    }

    public function setKhuyenmai(?int $khuyenmai): self
    {
        $this->khuyenmai = $khuyenmai;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLoai(): ?string
    {
        return $this->loai;
    }

    public function setLoai(string $loai): self
    {
        $this->loai = $loai;

        return $this;
    }

    public function getGiakhuyenmai(): ?int
    {
        return $this->giakhuyenmai;
    }

    public function setGiakhuyenmai(?int $giakhuyenmai): self
    {
        $this->giakhuyenmai = $giakhuyenmai;

        return $this;
    }
}
