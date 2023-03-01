<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktek form handling</title>
    <style>
        .btn-kirim{
            background:green;
            color: white;
            padding: 5px;
            border:0;
            border-radius: 10px;
        }
        .btn-reset{
            background:red;
            color: white;
            padding: 5px;
            border:0;
            border-radius: 10px;
        }
        .btn-kirim:hover{
            background:blue;
        }
        .btn-reset:hover{
            background:yellow;
        }
    </style>
</head>
<body>
    <form action="belajar_post.php" method="POST">
        <h1>form pendaftaran mahasiswa</h1>
        <!-- ini tipe text -->
        <label for="nama">Nama mahasiswa</label><br>
            <input type="text" name="nama"><br><br>
        <!-- tipe radio -->
        <label for="">Jenis kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="laki-laki"><label for="">laki-laki</label><br>
            <input type="radio" name="jenis_kelamin" value="perempuan"><label for="">perempuan</label><br><br>
        <!-- tipe checkbox -->
        <label for="">mata kuliah</label><br>
            <input type="checkbox" name="matkul" value="pemrograman web"><label for="">Pemrograman web</label><br>
            <input type="checkbox" name="matkul" value="matematika komputer"><label for="">Matematika komputer</label><br><br>
        <!-- tipe number     -->
        <label for="nomor_telepon">Nomor Telepon</label><br>
            <input type="number" name="nomor_telpon"><br><br>
        <!-- buttton -->
        <button type="submit" class="btn-kirim">Kirim</button>
        <button type="reset" class="btn-reset">Hapus</button>
    </form>
</body>
</html>