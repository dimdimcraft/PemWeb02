<?php

include '../../database/dbkoneksi.php';

$query = "DELETE FROM merk WHERE id=?";
$data = $dbh->prepare($query);
$data->execute(array($_GET['iddel']));

header("location: tables_merk.php");