<?php

class Koneksi
{
  public function connect($username, $password, $host = "localHost", $port = 3300)
  {
    //logic Koneksi
  }
}

$koneksi = new Koneksi();
$koneksi->connect('root', '');

?>