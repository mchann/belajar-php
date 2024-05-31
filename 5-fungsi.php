<?php

function penjumlahan ($a, $b){
    $hasil = $a + $b;

    return $hasil;
}

$nilai1 = 20;
$nilai2 = 30;
$hasilPenjumlahan = penjumlahan($nilai, $nilai2);

echo "<br>";
echo "<br>";

$teks = "Hello, World";
echo $teks . "<br>";
$panjang = strlen($teks);

echo "Panjang string diatas adalah: " . $panjang;
?>