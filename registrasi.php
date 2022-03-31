<?php

require 'main/function.php';


if( isset($_POST["register"]) ){

    if( registrasi($_POST) > 0 ){

        echo "
            <script>
                alert('User baru berhasil ditambahkan');
                document.location.href = 'tambah.php';
            </script>
        ";

    } else{
        echo mysqli_error($conn);
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <h1 style="text-align: center;" >Sistem Informasi APOTEK BINA SEHAT</h1>

    <form action="" method="POST">

    <div class="kotak_login">
        <img src="main/img/apotek.png" alt="">
        <p class="tulisan_login"> <b> REGISTRASI AKUN BARU </b> </p>

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form_login" placeholder="Username .." required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"class="form_login" placeholder="Password .." required>

        <label for="password2">Konfirmasi Password</label>
        <input type="password" name="password2" id="password2"class="form_login" placeholder="Konfirmasi Password .." required>

        <button type="submit" name="register"class="tombol_login">Register</button>
        <a href="login.php" style="margin-right: 20%;">punya akun ?</a>
    </form>

    
    </div>
</body>
</html>