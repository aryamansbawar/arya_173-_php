<?php
function conn(){
    $host="localhost";
    $username="root";
    $password="";
    $conn = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
    mysqli_select_db($conn,"kontakdb") or die("Database tidak dapat dibuka"); 
    return $conn;
}

?>
