<?php
    // session_start();
    // if( !isset($_SESSION["login"]) ){

    //     header("location: login.php");
    //     exit;

    // }
require 'main/function.php';


//tombol submit ditekan
if( isset($_POST ["submit"]) ){


    //cek data berhasilatautidak
    if(tambahpegawai($_POST) > 0){
        echo "
        
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php?data_pegawai';
            </script>
        ";
    }else{
        echo"            
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php?data_pegawai';
        </script>
        ";
    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Tambah Data obat</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Obat</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nik">Nomor Induk Keluarga</label>
                <input type="text" name="nik" id="nik" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sipa">Surat Tanda Registrasi Apoteker</label>
                <input type="text" name="sipa" id="sipa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama </label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="posisi">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="custom-select mb-3">
                <option selected>Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>