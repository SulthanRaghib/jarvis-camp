<?php
function penjumlahan($nilai1, $nilai2)
{
    $hasil = $nilai1 + $nilai2;
    return "$hasil<br>";
}

function perkalian($nilai1, $nilai2)
{
    $hasil = $nilai1 * $nilai2;
    return "$hasil<br>";
}

$penjumlahan1 = penjumlahan(5, 5);
$penjumlahan2 = penjumlahan(2, 3);

// mengkalikan hasil penjumlahan pertama dan kedua
echo perkalian($penjumlahan1, $penjumlahan2);
