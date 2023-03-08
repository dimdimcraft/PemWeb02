<?php
function hitungUmur($tahunLahir){
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2001);
echo '<br>';
hitungUmur(2005);
echo '<br>';
hitungUmur(2004);
echo '<br>';
hitungUmur(2008);
echo '<br>';

function welcome($nama = 'Dimas Aji Nugroho'){
    echo "hello selamat datang $nama !";
};

welcome();