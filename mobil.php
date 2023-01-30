<?php

class Mobil
{
  public $roda = 4; //Property
  public function jalan() //Method
  {
    echo "Mobil berjalan";
  }
}

//Instansiasi
$avanza = new Mobil();
$avanza->roda;

echo $avanza->jalan(); echo PHP_EOL;
echo $avanza->roda; echo PHP_EOL;

class Mobil1
{
  public $roda = 1; //Property
}

$avanza = new Mobil1();
echo $avanza->roda;
echo PHP_EOL;

class Mobil2
{
  public function jalan($arah = ' depan') //Method
  {
    echo "Mobil berjalan ke arah" . $arah;
  }
}

$avanza = new Mobil2();

echo $avanza->jalan();
echo PHP_EOL;
echo $avanza->jalan(' belakang');
echo PHP_EOL;

?>