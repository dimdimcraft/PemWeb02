<?php
    require_once 'dbkoneksi.php';

    if(isset($_GET['idedit'])){
        $id = $_GET['idedit'];
        $sql = "SELECT * FROM pelanggan WHERE id = $id";
        $rs = $dbh->query($sql);
        $row = $rs->fetch();
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga_jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];

        $sql = "UPDATE produk SET kode = '$kode', nama = '$nama', harga_jual = $harga_jual, stok = $stok WHERE id = $id";
        $dbh->exec($sql);

        header('Location: list_produk.php');
        exit();
    }
?>

<form method="post" action="">
    <input type="hidden" name="id" value="<?=$row['id']?>">

    <div class="form-group">
        <label for="kode">Kode:</label>
        <input type="text" class="form-control" id="kode" name="kode" value="<?=$row['kode']?>">
    </div>

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?=$row['nama']?>">
    </div>

    <div class="form-group">
        <label for="harga_jual">Harga Jual:</label>
        <input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?=$row['harga_jual']?>">
    </div>

    <div class="form-group">
        <label for="stok">Qty:</label>
        <input type="number" class="form-control" id="stok" name="stok" value="<?=$row['stok']?>">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
