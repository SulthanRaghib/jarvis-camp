<?php
// Tipe data integer
echo "Tipe data integer<br>";
$umur = 20;
var_dump($umur);

// Tipe data float
echo "<br><br> Tipe data float<br>";
$PHI = 3.14;
var_dump($PHI);

// Tipe data string
echo "<br><br> Tipe data string<br>";
$name = "Raghib";
var_dump($name);

// Tipe data boolean
echo "<br><br> Tipe data boolean<br>";
$isStudent = true;
var_dump($isStudent);

// Tipe data array: indexing
echo "<br><br> Tipe data array: indexing<br>";
$siswa = ["Raghib", 17, true];
echo "Haloo nama saya $siswa[0], umur saya adalah $siswa[1] tahun";

// Tipe data array: assosiatif
echo "<br><br> Tipe data array: assosiatif<br>";
$mahasiswa = [
    "nama" => "Raghib",
    "umur" => 17,
    "ipk" => 3.9
];
echo "Hai, saya $mahasiswa[nama], saya seorang mahasiswa dengan IPK $mahasiswa[ipk]";
