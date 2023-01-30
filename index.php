<?php

// Fungsi diluar class
function addNumbers($a, $b) {
  return $a + $b;
}

// echo addNumbers(10, 20);

// Public function didalam class
class Math {
  public function addNumbers($a, $b) {
    return $a + $b;
  }
}

$math = new Math();
echo $math->addNumbers(10, 20);
echo addNumbers(10, 20);
?>