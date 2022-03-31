<?php
require 'function.php';
$obat = query("SELECT * FROM obat");


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
    <link rel="stylesheet" href="style.css">
    <title>Daftar Nama Obat</title>
</head>
<body style="margin-left: 190px;">
    
<div class="container">
    <h1 style="margin-top: 20px;" >Daftar Data Obat</h1>
    <a href="tambahobat.php" style="margin-left: 35%;" class="btn btn-link" >[+] Tambah Data</a>
    <table class="table table-bordered table-sm" id="tabel" border="1" cellpadding="10" cellspacing= "0">
    <thead>
        <br>
        <tr >
            <th>No</th>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Produsen</th>
            <th>Posisi</th>
            <th>Harga</th>
            <th>Jenis</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php $nomor = 1; ?>
        <?php  foreach( $obat as $row ): ?>
            <td><?= $nomor; ?></td>
            <td><?= $row ["kode"];?></td>
            <td><?= $row ["nama"];?></td>
            <td><?= $row ["produsen"];?></td>
            <td><?= $row ["posisi"];?></td>
            <td><?= $row ["harga"];?></td>
            <td><?= $row ["jenis"];?></td>
            <td>
                <a href="editobat.php?id=<?= $row ["id"]; ?>" class="btn btn-warning" role="button">Edit</a> |
                <a href="hapusobat.php?id=<?= $row ["id"]; ?>" class="btn btn-danger" role="button" onclick=" return confirm('Apakah anda yakin untuk menghapus data ini ?'); " >Hapus</a>
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