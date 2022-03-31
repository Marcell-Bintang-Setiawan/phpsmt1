<?php
    // session_start();
    // if( !isset($_SESSION["login"]) ){

    //     header("location: login.php");
    //     exit;

    // }
require 'main/function.php';


//ambi data di url
$id = $_GET["id"];

// query data obat berdasarkan id
$spl = query("SELECT * FROM suplier WHERE id = $id")[0];


//tombol submit ditekan
if( isset($_POST ["submit"]) ){


    //cek data berhasil atau tidak
    if(editsuplier($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php?supplier';
            </script>
        ";
    }else{
        echo"            
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php?supplier';
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
        <h1>Ubah Data Suplier</h1>
        <form action="" method="POST">

            <input type="hidden" name="id" value="<?= $spl["id"]; ?>" >

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required value="<?= $spl["nama"]; ?>">
            </div>
            <div class="form-group">
                <label for="telepon">No. Telepon</label>
                <input type="text" name="telepon" id="telepon" class="form-control" required value="<?= $spl["telepon"]; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="5" class="form-control" required ><?= $spl["alamat"]; ?></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit" name="submit">Ubah Data</button>
        </form>
    </div>
</body>
</html>