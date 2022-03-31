<?php
session_start();

if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

    include "sidebar.php"
?>

<?php

if(isset($_GET ['home'])){
    include "main/home.php";
}
elseif (isset($_GET ['obat'])){
    include "main/obat.php";
}
elseif (isset($_GET ['data_pegawai'])){
    include "main/pegawai.php";
}
elseif (isset($_GET ['supplier'])){
    include "main/suplier.php";
}
else{
    include "main/home.php";
}


?>