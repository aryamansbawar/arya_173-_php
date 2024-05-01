<!DOCTYPE html>
<html>
<head>
    <title>persegi panjang</title>
    <link rel= "stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hitung Luas Persegi Panjang</h1>
        <form action="#" method="post">
            <input class= "inputbox" type="number" id="panjang" name="panjang" placeholder="Panjang(cm)">
            <input class = "inputbox" type="number" id="lebar" name="lebar" placeholder="Lebar(cm)">
            <input type="submit" class="submit" value="Submit">
        </form> 
        <?php

        $luas = 0;

        if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $luas = $panjang * $lebar;
        }
        ?>
        <p class="luas">Luas:  <span id="luas" name="luas"><?php echo $luas . " cm"; ?></span></p>
    </div>
</body>
</html>