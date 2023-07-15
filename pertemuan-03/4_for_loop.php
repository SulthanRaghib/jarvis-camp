<?php

for ($i = 1; $i <= 10; $i++) {
    echo "Angka ke-$i <br>";
}


$mood = ["Kerja", "Kerja Lagi", "Kerja Lagi dan Lagi", "Kerja Lagi dan Lagi dan Lagi", "Kerja Lagi dan Lagi dan Lagi dan Lagi", "Libur", "Libur Lagi"];
for ($i = 0; $i < count($mood); $i++) {
    echo "Hari ini adalah Hari $mood[$i] <br>";
}
