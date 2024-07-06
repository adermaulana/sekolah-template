<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "sekolahku";

    $koneksi = mysqli_connect($server,$user,$pass,$database) or die(mysqli_error($koneksi));
?>