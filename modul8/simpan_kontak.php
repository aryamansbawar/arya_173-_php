<?php
include "../admin/koneksi.inc.php";
//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$conn = conn();
$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];
$sql="insert into kontak set Nama='$vnama',
jkel='$vjkel',
Email='$vemail',
Alamat='$valamat',
Kota='$vkota',
Pesan='$vpesan'";
mysqli_query($conn,$sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);
header("location:kontak.php");
?> 