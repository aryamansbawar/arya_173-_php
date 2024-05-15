<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
</head>
<body>

<h2>Kontak</h2>

<form action="simpan_kontak.php" method="POST">
  <div>
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br>
  </div>
  <div>
    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
    <input type="text" id="jkel" name="jkel" required>
  </div>
  <div>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
  </div>
  <div>
    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" required></textarea><br>
  </div>
  <div>
    <label for="kota">Kota:</label><br>
    <input type="text" id="kota" name="kota" required><br>
  </div>
  <div>
    <label for="pesan">Pesan:</label><br>
    <textarea id="pesan" name="pesan" required></textarea><br>
  </div>
  <div>
    <input type="submit" value="Kirim">
  </div>
</form>
<a href="../admin/cetak.php">Cetak</a>
</body>
</html>