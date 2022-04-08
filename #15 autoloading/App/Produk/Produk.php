<?php 
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
