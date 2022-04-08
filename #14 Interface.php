<?php

interface InfoProduk
{
  public function getInfoProduk();
}
//class
abstract class Produk
{
  //property (Variabel)
  protected
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

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

  abstract public function getInfo();


  public function setJudul($judul)
  {
    // if (!is_string($judul)) {
    //   throw new Exception("Judul harus string");
    // }
    $this->judul = $judul;
  }
  public function getJudul()
  {
    return $this->judul;
  }

  public function setPenulis($penulis)
  {
    // if (!is_string($judul)) {
    //   throw new Exception("Judul harus string");
    // }
    $this->penulis = $penulis;
  }
  public function getPenulis()
  {
    return $this->penulis;
  }

  public function setPenerbit($penerbit)
  {
    // if (!is_string($judul)) {
    //   throw new Exception("Judul harus string");
    // }
    $this->penerbit = $penerbit;
  }
  public function getPenerbit()
  {
    return $this->penerbit;
  }

  public function setHarga($harga)
  {
    // if (!is_string($judul)) {
    //   throw new Exception("Judul harus string");
    // }
    $this->harga = $harga;
  }

  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function setDiskon($diskon)
  {
    return $this->diskon = $diskon;
  }
  public function getDiskon()
  {
    return $this->diskon;
  }
}

class Komik extends Produk implements InfoProduk
{
  public $halaman;
  public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $halaman);
    $this->halaman = $halaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . $this->getInfo() . " - {$this->halaman} Halaman.";
    return $str;
  }

  public function getInfo()
  {
    $str = "{$this->judul} {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class Game extends Produk implements InfoProduk
{
  public $jam;
  public function __construct($judul, $penulis, $penerbit, $harga, $jam)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga, $jam);
    $this->jam = $jam;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . $this->getInfo() . " - {$this->jam} Jam.";
    return $str;
  }

  public function getInfo()
  {
    $str = "{$this->judul} {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

class CetakInfoProduk
{
  public $daftarProduk = [];

  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "Daftar Produk : <br>";
    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}


//object

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Genshin Impact", "Hoyolab", "Mihoyo", "25000", 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
