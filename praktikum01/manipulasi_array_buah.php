<?php
$arrayBuah = ["jeruk","mangga","jambu","jambu monyet"];

// mengurutkan value array
sort ($arrayBuah);

// menghilangkan value paling belakang pada array
array_pop ($arrayBuah);

// menghapus array sesuai dengan indeks yang di masukkan 
unset($arrayBuah[2]);

// menambahkan value pada array di paling belakang
array_push($arrayBuah, "durian");

// menghapus value paling depan pada array
array_shift($arrayBuah);

// menambahkan value pada array di paling depan
array_unshift($arrayBuah, "Buah Naga");

// mengubah value array sesuai dengan indeks yang dimasukkan
$arrayBuah[2] = "Pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}

