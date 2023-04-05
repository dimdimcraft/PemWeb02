<?php
class Bola
{
    public $jariJari;

    function hitungVolume(){
        return 4/3 * 3.14 * ($this->jariJari ** 3);
    }
}

$objekBola = new Bola;
$objekBola->jariJari = 7;
echo $objekBola->hitungVolume();