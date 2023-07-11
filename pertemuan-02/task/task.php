<!-- Buat function untuk menghitung pembagian dari 2 parameter: nilai 1 dan nilai 2 -->

<?php
function Pembagian($nilai1, $nilai2)
{
    $hasil = $nilai1 / $nilai2;
    return round($hasil, 2);
}

echo "Hasil pembagian dari 10 dan 3 adalah : " . Pembagian(10, 3);
