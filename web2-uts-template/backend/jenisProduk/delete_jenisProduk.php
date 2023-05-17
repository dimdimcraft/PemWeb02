<?php

include '../../database/dbkoneksi.php';

$query = "DELETE FROM jenis_produk WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: tables_jenisProduk.php");