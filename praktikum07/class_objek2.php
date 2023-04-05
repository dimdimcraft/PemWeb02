<?php
class Buah
{
    public $warnaBuah = "Oranye";
    public $namaBuah = "mangga";
    public $rasa = "kecut";

    function tumbuh(){
        return "$this->namaBuah itu bisa tumbuh";
    }

    function busuk(){
        return "$this->namaBuah itu bisa busuk";
    }
}

$objekBuah = new Buah;
$objekBuah->namaBuah = "semangka";
$objekBuah->warnaBuah = "hijau";
$objekBuah->rasa = "manis";
echo $objekBuah->tumbuh();
echo "<br>";
echo $objekBuah->busuk();