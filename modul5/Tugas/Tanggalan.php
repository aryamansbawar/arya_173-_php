<!DOCTYPE html>
<html>
<head>
    <title>Tanggalan</title>
</head>
<body>
<?php
//Contoh 1: tgl dan hari saat ini
$tgl1 = date("Y-m-D");
echo $tgl1;
echo "<br>";
//Contoh 2: jam, menit, detik sekarang
$tgl2 = date("g:i:s");
echo $tgl2;
echo "<br>";

//Contoh 3: hari(2 digit), nama bulan, hari dalam digit (0-6)
$tgl3 = date("d-F-w");
echo $tgl3;
echo "<br>";

//Contoh 4: menampilkan jumlah hari berlalu ditahun ini, hari, dan bulan.
$tgl4 = date("z-D-M");
echo $tgl4;

?>
</body>
</html>