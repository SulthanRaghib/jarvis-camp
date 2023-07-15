<?php

$nilai = 80;

if ($nilai >= 90) {
    echo "Selamat kamu lulus dengan grade A";
} elseif ($nilai >= 80) {
    echo "Selamat kamu lulus dengan grade B";
} elseif ($nilai >= 70) {
    echo "Selamat kamu lulus dengan grade C";
} elseif ($nilai >= 60) {
    echo "Selamat kamu lulus dengan grade D";
} else {
    echo "Maaf kamu tidak lulus";
}
