<?php

class Persegi{

    public $sisi;

    function __construct($sisi){
        $this->sisi = $sisi;
    }

    function hitungLuas(){
        return $this->sisi ** 2;
    }
}

$objek = new Persegi(7);
echo $objek->hitungLuas();