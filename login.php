<?php
session_start();
require 'main/function.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE
                id = $id ");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }


}


if (isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}



if(isset($_POST["login"])){


    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query( $conn, "SELECT * FROM user WHERE username = '$username'");

    // cek usernaem

    if ( mysqli_num_rows( $result ) === 1 ){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify( $password, $row["password"]) ){

            //set session
            $_SESSION["login"] = true;

            // remember me
            if ( isset($_POST['remember']) ) {
                //buat cookie

                setcookie('id', $_row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }


            header("location: index.php");
            exit;
        }


    }

    $error = true;


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <link rel="stylesheet" href="styles.css">
    <title>Halaman Login</title>
</head>
<body>
<div class="container" style="background-color:  #a2f6ff;">
    <h1 style="text-align: center;" >Halaman Login</h1>
    <h1 style="text-align: center;" >Sistem Informasi APOTEK BINA SEHAT</h1>

    <div class="kotak_login">
        <img src="main/img/apotek.png" alt="">
        <p class="tulisan_login"> <b> LOGIN</b></p>

        <?php if(isset($error) ) : ?>
            <p style="color: red;">Username / Password anda salah !</p>
        <?php endif;?>
        
    <form action="" method="POST">

        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form_login" placeholder="Username .." required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form_login" placeholder="Password .." required>

        
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label> 
        <br>
        <br>

        <button type="submit" name="login" class="tombol_login" >Login</button><br>
        <a href="registrasi.php">Register</a><br>
        <a class="home" href="halaman_utama.php">Home</a>
    </form>
    

</div>
</div>
</body>
</html>