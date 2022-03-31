<?php
    include "header.php";
?>

<?php

if(isset($_GET ['landing'])){
    include "landing.php";
}
elseif (isset($_GET ['artikel'])){
    include "artikel.php";
}
elseif (isset($_GET ['kontak'])){
    include "kontak.php";
}
elseif (isset($_GET ['tentang'])){
    include "tentang.php";
}
else{
    include "landing.php";
}


?>

<?php
    include "footer.php";
?>