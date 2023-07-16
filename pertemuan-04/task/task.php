<?php
class Kendaraan
{
    public $namaKendaraan;
    public $jenisKendaraan;

    public function __construct($namaKendaraan, $jenisKendaraan)
    {
        $this->namaKendaraan = $namaKendaraan;
        $this->jenisKendaraan = $jenisKendaraan;
    }

    public function getInfoKendaraan()
    {
        return "Nama Kendaraan : $this->namaKendaraan <br/> Jenis Kendaraan : $this->jenisKendaraan";
    }
}

class Mobil extends Kendaraan
{
    public $jumlahRoda;
    public $bahanBakar;

    public function __construct($namaKendaraan, $jenisKendaraan, $jumlahRoda, $bahanBakar)
    {
        parent::__construct($namaKendaraan, $jenisKendaraan);
        $this->jumlahRoda = $jumlahRoda;
        $this->bahanBakar = $bahanBakar;
    }

    public function getInfoKendaraan()
    {
        return "Nama Kendaraan : $this->namaKendaraan <br/> Jenis Kendaraan : $this->jenisKendaraan <br/> Jumlah Roda : $this->jumlahRoda <br/> Bahan Bakar : $this->bahanBakar";
    }
}

$formula = new Mobil("Formula 1", "Mobil Balap", 4, "Bensin");
echo $formula->getInfoKendaraan();
