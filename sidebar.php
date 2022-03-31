<?php




?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding: 10px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 22px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>
<body>

<div class="sidenav">  
  <img src="main/img/apotek.png" alt="" style="width: 100px; margin-left: 25px; margin-top: 10px; margin-bottom: 10px;">
  <br>
  <h5 style="color: white;" >Sistem Informasi</h5>
  <strong><p style="color: white;" >APOTIK BINA SEHAT</p></strong><br>
  <a href="?home">Home</a><br>
  <a href="?obat">Data Obat</a><br>
  <a href="?data_pegawai">Data Pegawai</a><br>
  <a href="?supplier">Data Suplier</a><br>
  <a href="logout.php" style="color: red;">Logout</a>
</div>


</body>
</html> 
