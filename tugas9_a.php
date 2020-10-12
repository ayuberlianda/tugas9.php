<?php
function deret_fibonacci($jumlah)
{
  $angka_sebelumnya=0;
  $angka_sekarang=1;

  $hasil = $angka_sebelumnya." ".$angka_sekarang;
 
  for ($i=0; $i<$jumlah-2; $i++){
    $fibonacci = $angka_sekarang + $angka_sebelumnya;
    $hasil = $hasil." ".$fibonacci;
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $fibonacci;
  }
  return $hasil;
}

echo deret_fibonacci(22);
echo "<br>";

?>