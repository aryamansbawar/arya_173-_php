<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <link rel= "stylesheet" href="style2.css">
</head>
<body>
    <div class="container">
        <h1 class="h1">Biodata</h1>
        <form action="#" method="post">
            <p>Nama <br><input class= "inputbox" type="text" id="nama" name="nama" placeholder="Nama Anda"></p>
            <p>Email <br><input class= "inputbox" type="text" id="email" name="email" placeholder="Email"></p>
            <label for="bio">Bio <br></label>
            <textarea class="inputarea" type = "text" id="bio" name="bio" rows="4" cols="50" placeholder="Biodata Anda"></textarea>
            <br>
            <input type="submit" class="submit" value="Simpan">
        </form> 
        <?php
        $nama = 'Nama Anda';
        $email = 'Email';
        $bio = 'Biodata Anda';
        $submit = false;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nama  = $_POST['nama'];
            $email = $_POST['email'];
            $bio = $_POST['bio'];
            $submit = true;
        }
        ?>
    </div>
    <div class="output">
        <p class="biodata">Biodata Anda<br><span id="biodata" name="biodata"></span></p>
        <p class="nama">Nama: <?php echo $nama; ?></p>
        <p class="email">Email: <?php echo $email; ?></p>
        <p class="bio">Biodata: <?php echo $bio; ?></p>
    </div>
</body>
</html>