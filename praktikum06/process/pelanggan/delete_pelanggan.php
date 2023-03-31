<?php

include 'dbkoneksi.php';

$query = "DELETE FROM pelanggan WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: list_pelanggan.php");