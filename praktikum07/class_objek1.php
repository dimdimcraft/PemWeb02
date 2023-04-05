<?php
class Mamalia
{
    public $namaHewan;
    public $warnaHewan;
    public $habitat;
    public $makanan;

    function menyusui(){
        return "$this->namaHewan adalah hewan menyusui";
    }

    function beranak(){
        return "$this->namaHewan adalah hewan yang melahirkan";
    }

    function makan(){
        return "$this->namaHewan suka makan $makanan";
    }
}

$objek = new Mamalia();
$objek->namaHewan = "kucing";
$objek->warnaHewan = "coklat";
$objek->habitat = "sekitar manusia";
$objek->makanan = "whiskas";
echo $objek->menyusui();
