<?php

class Coba
{
  public static $angka = 1;

  public static function halo()
  {
    return "Angka" . self::$angka++;
  }
}

echo Coba::halo();
echo "<br>";
echo Coba::halo();
echo "<hr>";

//atau

class Coba2
{
  public static $angka = 1;

  public function halo()
  {
    return "Angka" . self::$angka++;
  }
}

$objek1 = new Coba2;
echo $objek1->halo();
echo "<br>";
echo $objek1->halo();
