<?php
require 'function.php';


//jumlah data obat
$data_obat = mysqli_query($conn, "SELECT*FROM obat");
$jml_obat = mysqli_num_rows($data_obat);


//jumlah data pegawai
$data_pegawai = mysqli_query($conn, "SELECT * FROM pegawai"); 
$jml_pegawai = mysqli_num_rows($data_pegawai);

//jumlah data suplier
$data_suplier = mysqli_query($conn, "SELECT * FROM suplier");
$jml_suplier = mysqli_num_rows($data_suplier);


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
    <title>Home</title>

</head>
<body style="margin-left: 210px;">
<div class="container">

    <h1 style="margin-top: 20px;" >Selamat Datang di Halaman Admin</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, explicabo numquam unde debitis deleniti dignissimos dolorum nesciunt fugit nobis quibusdam magni temporibus placeat voluptatum laboriosam? Nam eligendi impedit excepturi reprehenderit.</p>    

    <br>
    <div class="card-group" style="width: 850px;">

    <div class="card" style="width:240px; margin-left: 30px;">
        <img class="card-img-top" src="main/img/obat.png" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Data Obat</h4>
            <p class="card-text">Klink link dibawah untuk menuju Data Obat </p>
            <p class="card-text">Jumlah Data Obat : <b><?php echo $jml_obat  ?>  </b>  </p>
            <a href="?obat" class="btn btn-primary stretched-link">Klik disini</a>
        </div>
    </div>
    <div class="card" style="width:240px; margin-left: 30px;">
        <img class="card-img-top" src="main/img/pegawai.png" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Data Pegawai</h4>
            <p class="card-text">Klink link dibawah untuk menuju Data Pegawai </p>
            <p class="card-text">Jumlah Data Pegawai : <b><?php echo $jml_pegawai ?></b></p>
            <a href="?data_pegawai" class="btn btn-primary stretched-link">Klik disini</a>
        </div>
    </div>

    <div class="card" style="width:240px; margin-left: 30px;">
        <img class="card-img-top" src="main/img/suplier.png" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">Data Suplier</h4>
            <p class="card-text">Klink link dibawah untuk menuju Data Suplier </p>
            <p class="card-text">Jumlah Data Supplier : <b><?php echo $jml_suplier ?></b></p>
            <a href="?supplier" class="btn btn-primary stretched-link">Klik disini</a>
        </div>
    </div>
    </div>
    </div>
</body>
</html>
