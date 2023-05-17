<?php 
require_once '../../database/dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_berat = $_POST['berat'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1
   $ar_data[]=$_stok; // ? 2
   $ar_data[]=$_harga;// 3
   $ar_data[]=$_berat;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (nama,stok,harga,berat) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama=?,stok=?,harga=?,berat=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: tables_produk.php');
?>