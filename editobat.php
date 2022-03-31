<?php
session_start();

if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
require 'main/function.php';

//ambi data di url
$id = $_GET["id"];

// query data obat berdasarkan id
$obt = query("SELECT * FROM obat WHERE id = $id")[0];




//tombol submit ditekan
if( isset($_POST ["submit"]) ){

    //cek data di ubah atau tidak
    if(editobat($_POST) > 0){
        echo "
        
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php?obat';
            </script>
        ";
    }else{
        echo"            
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php?obat';
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
        <h1>Ubah Data Obat</h1>
        <form action="" method="POST">

        <input type="hidden" name="id" value="<?=$obt["id"]; ?>" >

        <div class="form-group">
            <label for="kode">Kode Obat</label>
            <input type="text" name="kode" id="kode" class="form-control" required value="<?=$obt["kode"]; ?>">
        </div>

        <div class="form-group">
            <label for="nama">Nama Obat</label>
            <input type="text" name="nama" id="nama" class="form-control" required value="<?=$obt["nama"]; ?>">
        </div>
        <div class="form-group">
            <label for="produsen">Nama Produsen</label>
            <input type="text" name="produsen" id="produsen" class="form-control" required value="<?=$obt["produsen"]; ?>">
        </div>
        <div class="form-group">
            <label for="posisi">Posisi / Letak</label>
            <select name="posisi" class="custom-select mb-3">
                <option selected>Etalase 1</option>
                <option value="Etalase 2">Etalase 2</option>
                <option value="Etalase 3">Etalase 3</option>
                <option value="Etalase 4">Etalase 4</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="text" name="harga" id="harga" class="form-control" required value="<?=$obt["harga"]; ?>" >
        </div>
        <div class="form-group">
            <label for="jenis">Jenis obat</label>
            <select name="jenis" class="custom-select mb-3">
                <option selected>Jamu</option>
                <option value="Kaplet">Kaplet</option>
                <option value="Sirup">Sirup</option>
                <option value="Kapsul">Kapsul</option>
                <option value="Tablet">Tablet</option>
            </select>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Ubah Data</button>


        </form>
    </div>
</body>
</html>