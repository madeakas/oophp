<?php
//class
class Produk
{
  //property (Variabel)
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  //method (function)
  public function getLabel()
  {
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
  }
}

//object

$produk1 = new Produk;
$produk1->judul = "Naruto";
$produk1->penulis = "Mashashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

$produk2 = new Produk;
$produk2->judul = "Genshin Impact";
$produk2->penulis = "Hoyolab";
$produk2->penerbit = "Mihoyo";
$produk2->harga = 25000;

echo "Komik = " . $produk1->getLabel();
echo "<br>";
echo "Game = " . $produk2->getLabel();
