<?php
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
