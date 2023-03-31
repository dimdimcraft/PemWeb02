<?php

require_once '../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$query = "DELETE FROM produk WHERE id=?";
$data = $dbh->prepare($query);
$data->execute([$id]);

header("location: ../../pages/produk/list_produk.php");