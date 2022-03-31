<?php
require 'function.php';
$pegawai = query("SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Pegawai</title>
</head>

<body style="margin-left: 190px;"> 

<div class="container">
<h1 style="margin-top: 20px; ">Data Pegawai</h1>

<a href="tambahpegawai.php" style="margin-left: 35%;" >[+] Tambah Data</a>
<table class="table table-bordered table-sm" id="tabel"  cellpadding="10" cellspacing= "0">
    <thead> 
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>STRA</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Nomor Telepon</th>
        <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
    <tr>
    <?php $nomor = 1 ?>
    <?php  foreach( $pegawai as $row ): ?>
        <td><?= $nomor; ?></td>
        <td><?= $row ["nik"];?></td>
        <td><?= $row ["sipa"];?></td>
        <td><?= $row ["nama"];?></td>
        <td><?= $row ["jenis_kelamin"];?></td>
        <td><?= $row ["telepon"];?></td>
        <td>
            <a href="editpegawai.php?id=<?= $row ["id"]; ?>" class="btn btn-warning" role="button">Ubah</a> |
            <a href="hapuspegawai.php?id=<?= $row ["id"]; ?>" class="btn btn-danger" role="button" onclick=" return confirm('Apakah anda yakin untuk menghapus data ini ?'); " >Hapus</a>
        </td>
    </tr>
    <?php $nomor++;?>    
    <?php endforeach?>
    </tbody>
</table>
</div>


<script>
    $(document).ready(function() {
    $('#tabel').DataTable();
} );
</script>

</body>
</html>