<?php
// membuat array asosiative
$profilArray = [
    "nama" => "Dimas Aji Nugroho", 
    "kelas" => "SI14"
];
print_r ($profilArray);
echo "<br>";

// membuat multiasosiative array
$profileMultiArray =[
    [
        "nama" => "siti",
        "kelas" => "XTKJ2"
    ], [
        "nama" => "dimas",
        "kelas" => "XITKJ3"
    ], [
        "nama" => "syahrul",
        "kelas" => "XIITKJ4"
    ]
];


foreach ($profileMultiArray as $profile){
    echo $profile["nama"] . "<br>";
}
