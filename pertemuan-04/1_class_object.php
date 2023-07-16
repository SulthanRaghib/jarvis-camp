<?php
class Mobil
{
    // public $merek;
    // public $warna;
    private $merek;
    private $warna;

    public function setMerek($merek)
    {
        $this->merek = "Mobil : $merek <br>";
    }

    public function setWarna($warna)
    {
        $this->warna = "Warna : $warna <br>";
    }

    public function getMerek()
    {
        echo $this->merek;
    }

    public function getWarna()
    {
        echo $this->warna;
    }

    public function hidupkanMesin()
    {
        echo "Mesin mobil dihidupkan <br>";
    }

    public function jalankanMobil()
    {
        echo "Mobil dijalankan <br>";
    }
}

$toyota = new Mobil();
// $toyota->merek = "Toyota";
// $toyota->warna = "Putih";
// $toyota->hidupkanMesin();
// $toyota->jalankanMobil();

$toyota->setMerek("Toyota");
$toyota->setWarna("Putih");
$toyota->getMerek();
$toyota->getWarna();
