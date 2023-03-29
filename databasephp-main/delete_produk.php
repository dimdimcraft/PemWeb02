<?php

include 'dbkoneksi.php';

$query = "DELETE FROM produk WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: list_produk.php");