<?php
//class
class Produk
{
  //property (Variabel)
  public
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  // constructor / Magic Function
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  //method (function)
  public function getLabel()
  {
    return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
  }
}

//object

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Genshin Impact", "Hoyolab", "Mihoyo", 25000);

echo "Komik = " . $produk1->getLabel();
echo "<br>";
echo "Game = " . $produk2->getLabel();
