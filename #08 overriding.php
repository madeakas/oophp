<?php
//class
class Produk
{
  //property (Variabel)
  public
    $judul,
    $penulis,
    $penerbit,
    $harga;

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
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Komik extends Produk
{
  public $halaman;
  public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $halaman);
    $this->halaman = $halaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $jam;
  public function __construct($judul, $penulis, $penerbit, $harga, $jam)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $jam);
    $this->jam = $jam;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " - {$this->jam} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


//object

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Genshin Impact", "Hoyolab", "Mihoyo", "25000", 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
