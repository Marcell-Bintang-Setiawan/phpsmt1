<?php

require 'function.php';
$obat = query("SELECT * FROM suplier");



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
    <title>Data Supllier</title>
</head>
<body style="margin-left: 190px; margin-top: 20px;">

<div class="container">
<h1>Data Supplier </h1>
<a href="tambahsuplier.php" style="margin-left: 40%; font-size: 18px;" >[+] Tambah Data</a>
<table id="tabel" class="table table-bordered table-sm" >
    <thead>
        <br>
        <tr >
            <th>No</th>
            <th>Nama</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php $nomor = 1; ?>
        <?php  foreach( $obat as $row ): ?>
            <td><?= $nomor; ?></td>
            <td><?= $row ["nama"];?></td>
            <td><?= $row ["telepon"];?></td>
            <td><?= $row ["alamat"];?></td>
            <td>
                <a href="editsuplier.php?id=<?= $row ["id"];?>" class="btn btn-warning" role="button">Ubah</a> |
                <a href="hapussuplier.php?id=<?= $row ["id"];?>" class="btn btn-danger" role="button" onclick=" return confirm('Apakah anda yakin untuk menghapus data ini ?'); " >Hapus</a>
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
