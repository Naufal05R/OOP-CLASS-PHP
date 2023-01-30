<?php

$nissangtr = new Mobil();
class Mobil
{
  private $roda = 4;

  private function jalan()
  {
    echo "Mobil berjalan";
  }

  public function jumlahRoda()
  {
    echo $this->roda;
  }

  public function testMobil()
  {
    echo $this->jumlahRoda() . PHP_EOL;
    echo $this->jalan();
  }
}

/* echo $nissangtr->testMobil(); */

/* 
* * Protected method access example 
*/

class Car {
  protected $engine = 'V6';

  public function getEngine() {
    return $this->engine;
  }
}

class SportsCar extends Car {
  public function getEngineType() {
    return $this->engine;
  }
}

$sportsCar = new SportsCar();
echo $sportsCar->getEngineType(); 
// Output: V6


?>