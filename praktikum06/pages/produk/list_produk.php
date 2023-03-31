<?php 
    require_once '../../database/dbkoneksi.php';
    include_once '../template/head.php';
    include_once '../template/navbar.php';
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

<div class="container">
    <h2 class="text-center mb-3">List Produk</h2>
    <a class="btn btn-success mb-3" href="form_produk.php" role="button">Create Produk</a>
    <div class="table-responsive">
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Harga Jual</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1 ; foreach($rs as $row){ ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row['kode']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['harga_jual']?></td>
                    <td><?=$row['stok']?></td>
                    <td>
                        <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                        <a class="btn btn-primary" href="form_editProduk.php?idedit=<?=$row['id']?>">Edit</a>
                        <a class="btn btn-primary" href="../../process/produk/delete_produk.php?iddel=<?=$row['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}">Delete</a>
                    </td>
                </tr>
                <?php $nomor++; } ?>
            </tbody>
        </table>
    </div>
</div>