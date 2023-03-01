<?php
$username = $_POST['username'];
$password = $_POST['password'];


if($username == 'dimdim' && $password == 'dimdimcraft'){
    echo 'login berhasil';
}else {
    echo 'login gagal !';
}

