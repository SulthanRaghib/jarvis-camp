<?php
class Kucing
{
    public $nama;
    public static $jumlah_kucing = 0;

    public function __construct($nama)
    {
        $this->nama = $nama;
        self::$jumlah_kucing++;
    }

    public static function getJumlahKucing()
    {
        echo "Jumlah kucing saat ini : " . self::$jumlah_kucing . "<br>";
    }
}

$oyen = new Kucing("Oyen");
Kucing::getJumlahKucing(); // menggunakan :: karena memanggil method static

$bleki = new Kucing("Bleki");
Kucing::getJumlahKucing();
