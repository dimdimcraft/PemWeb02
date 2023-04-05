<?php
class Balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function hitungVolume(){
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

$objekBalok = new Balok;
$objekBalok->panjang = 10;
$objekBalok->lebar = 7;
$objekBalok->tinggi = 8;
echo $objekBalok->hitungvolume();
