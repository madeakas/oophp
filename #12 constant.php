<?php
// const adalah indentifier untuk menyimpan nilai

//cara pertama, tidak bisa simpan didalam kelas
define('NAMA', 'Made Akas');
echo NAMA;

echo '<br>';

//cara kedua, bisa dimasukan ke kelas sehingga bisa untuk OOP
const UMUR = 32;
echo UMUR;
echo '<hr>';

//uji coba
class Coba
{
  const NAMA = 'Made Aka';
}

echo Coba::NAMA;
