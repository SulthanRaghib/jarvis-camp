<?php
class Hero
{
    public $nama;
    public $attack;
    public $hp;

    public function __construct($nama, $attack, $hp)
    {
        $this->nama = $nama;
        $this->attack = $attack;
        $this->hp = $hp;
    }

    public function skill()
    {
        return "$this->nama menggunakan skill <br>";
    }
}

class Mage extends Hero
{
    public $mana;
    public $magic_attack;

    public function __construct($nama, $attack, $hp, $mana, $magic_attack)
    {
        parent::__construct($nama, $attack, $hp);
        $this->mana = $mana;
        $this->magic_attack = $magic_attack;
    }

    public function skill()
    {
        return "$this->nama menggunakan magic skill <br>";
    }
}

$kagura = new Mage("Kagura", 0, 3200, 1000, 400);
echo $kagura->skill();
