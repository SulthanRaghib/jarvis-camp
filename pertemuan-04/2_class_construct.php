<?php
class Laptop
{
    public $merek;
    public $processor;
    public $memori;

    public function __construct($merek, $processor, $memori)
    {
        $this->merek = $merek;
        $this->processor = $processor;
        $this->memori = $memori;
    }

    public function deskripsi()
    {
        return "Merek laptop ini adalah $this->merek, 
         dengan processor $this->processor, 
         dan RAM $this->memori <br>";
    }
}

$lenovo = new Laptop("Lenovo", "Intel Core i12 gen 12", "32GB");
echo $lenovo->deskripsi();
