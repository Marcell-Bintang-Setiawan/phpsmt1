<?php
//connect to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query){
    
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}




//fungsi tambah masing masing tabel
function tambahobat($data){

    global $conn;
        //ambil data dari masing masing form
        $kode = htmlspecialchars( $data["kode"] );
        $nama = htmlspecialchars( $data["nama"] );
        $produsen = htmlspecialchars( $data["produsen"] );
        $posisi = htmlspecialchars( $data["posisi"] );
        $harga = htmlspecialchars( $data["harga"] );
        $jenis = htmlspecialchars( $data["jenis"] );

        
    //insert data
    $query = "INSERT INTO obat
    VALUES
    ('', '$kode', '$nama', '$produsen', '$posisi', '$harga', '$jenis')    
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


//fungsi tambah suplier
function tambahsuplier($data){

    global $conn;
        //ambil data dari masing masing form
        $nama = htmlspecialchars( $data["nama"] );
        $telepon = htmlspecialchars( $data["telepon"] );
        $alamat = htmlspecialchars( $data["alamat"] );
        
    //insert data
    $query = "INSERT INTO suplier
    VALUES
    ('', '$nama', '$telepon', '$alamat')    
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi tambah pegawai
function tambahpegawai($data){

    global $conn;
        //ambil data dari masing masing form
        $nik = htmlspecialchars( $data["nik"] );
        $stra = htmlspecialchars( $data["sipa"] );
        $nama =  htmlspecialchars( $data["nama"] );
        $jk = htmlspecialchars( $data["jenis_kelamin"] );
        $telepon = htmlspecialchars( $data["telepon"] );
        
    //insert data
    $query = "INSERT INTO pegawai
    VALUES
    ('', '$nik', '$stra','$nama','$jk','$telepon')    
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


//fungsi hapus

//fungsi hapus pegawai
function hapuspegawai($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id");

return mysqli_affected_rows($conn);
}


//fungsi hapus pegawai
function hapusobat($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id = $id");

return mysqli_affected_rows($conn);

}



//fungsi hapus suplier
function hapussuplier($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM suplier WHERE id = $id");

return mysqli_affected_rows($conn);

}


//fungsi edit
//fungsi edit obat
function editobat($data){
    global $conn;
    //ambil data dari masing masing form
    $id = $data["id"];
    $kode = htmlspecialchars( $data["kode"] );
    $nama = htmlspecialchars( $data["nama"] );
    $produsen = htmlspecialchars( $data["produsen"] );
    $posisi = htmlspecialchars( $data["posisi"] );
    $harga = htmlspecialchars( $data["harga"] );
    $jenis = htmlspecialchars( $data["jenis"] );

//insert data
    $query = "UPDATE obat SET  

                kode = '$kode',
                nama = '$nama',
                produsen = '$produsen',
                posisi = '$posisi',
                harga = '$harga',
                jenis = '$jenis'
                WHERE id = $id 
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi edit pegawai
function editpegawai($data){

    global $conn;
        //ambil data dari masing masing form
        $id =$data["id"];
        $nik = htmlspecialchars( $data["nik"] );
        $stra = htmlspecialchars( $data["sipa"] );
        $nama =  htmlspecialchars( $data["nama"] );
        $jk = htmlspecialchars( $data["jenis_kelamin"] );
        $telepon = htmlspecialchars( $data["telepon"] );
        
    //insert data
    $query = " UPDATE pegawai SET
                nik = '$nik',
                sipa = '$stra',
                nama = '$nama',
                jenis_kelamin = '$jk',
                telepon = '$telepon'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


//fungsi edit suplier
function editsuplier($data){

    global $conn;
        //ambil data dari masing masing form
        $id = $data["id"];
        $nama = htmlspecialchars( $data["nama"] );
        $telepon = htmlspecialchars( $data["telepon"] );
        $alamat = htmlspecialchars( $data["alamat"] );
        
    //insert data
    $query = "UPDATE suplier SET
            nama = '$nama',
            telepon = '$telepon',
            alamat = '$alamat'
        WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




function registrasi($data){
        global $conn;

        $username = strtolower( stripslashes($data["username"]) );
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) {

        echo "
            <script>
                alert('username yang anda gunakan sudah terdaftar ! Gunakan username lain')
            </script>";

        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
            alert('Password tidak sesuai')
        </script>
        ";
        return false;
    }

        // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");


    return mysqli_affected_rows($conn);


}


?>