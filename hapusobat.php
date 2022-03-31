<?php
    // session_start();
    // if( !isset($_SESSION["login"]) ){

    //     header("location: login.php");
    //     exit;

    // }

require 'main/function.php';

$id = $_GET["id"];

if( hapusobat($id) > 0){
    echo "  
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php?obat';
    </script>
";
} else{
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'index.php?obat';
    </script>
";
}


?>