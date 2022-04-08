<?php
//class
class Produk
{
  //property (Variabel)
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $halaman,
    $jam,
    $tipe;

  // constructor / Magic Function
  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $halaman = 0, $jam = 0, $tipe = "tipe")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->jam = $jam;
    $this->tipe = $tipe;
  }

  //method (function)
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getProdukLengkap()
  {
    // komik : Naruto | Penulis, Judul (Harga) - halaman / jam
    $str = "{$this->tipe} : {$this->judul} {$this->getLabel()}(Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->halaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->jam} Jam.";
    }
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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Genshin Impact", "Hoyolab", "Mihoyo", 25000, 0, 50, "Game");

// echo "Komik = " . $produk1->getLabel();
// echo "<br>";
// echo "Game = " . $produk2->getLabel();
// echo "<br>";
// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

echo $produk1->getProdukLengkap();
echo "<br>";
echo $produk2->getProdukLengkap();
