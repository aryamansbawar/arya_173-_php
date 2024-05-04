<?php
date_default_timezone_set("Asia/Jakarta");
$name = '';
$email = '';
$password = '';
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['nama'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {
        $name = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $submitted = true;
    } else {
        header("Location: error.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if ($submitted):?>
    <span>Last Login</span>
    <span><?php echo $name;?> - <?php echo $email;?> - <?php  echo date("Y-m-d");?></span>
<?php endif; ?>
<form method="POST" action="#">
    <div class="container">
        <span class="login">Login</span><br>
        <label for="nama" class="user">Username</label><br>
        <input type="text" id="nama" name="nama" class="kotak_user"><br>
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" class="kotak_email"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" class="kotak_password"><br>
        <button type="submit" class="button">Login</button>
    </div>
</form>
</body>
</html>