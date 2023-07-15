<?php

$hari = "Sabtu";
$mood;

switch ($hari) {
    case "Senin":
        $mood = "Hari kerja";
        break;
    case "Selasa":
        $mood = "Hari kerja lagi";
        break;
    case "Rabu":
        $mood = "Hari kerja lagi dan lagi";
        break;
    case "Kamis":
        $mood = "Hari kerja lagi dan lagi dan lagi";
        break;
    case "Jumat":
        $mood = "Hari kerja lagi dan lagi dan lagi dan lagi";
        break;
    case "Sabtu":
        $mood = "Hari libur";
        break;
    case "Minggu":
        $mood = "Hari libur lagi";
        break;
    default:
        $mood = "Hari tidak dikenal";
        break;
}

echo "Hari ini adalah hari $hari. $mood";
