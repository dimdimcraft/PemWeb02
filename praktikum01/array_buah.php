<?php
//membuat array
$arrayBuah = ["jeruk","mangga","jambu","jambu monyet"];

//cara pertama memunculkan value array
print_r($arrayBuah);
echo "<br>";

//cara kedua
var_dump($arrayBuah);
echo "<br>";

//cara ketiga (cara yang lebih clean ketimbang cara di atas)
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}

