<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header('Location: welcome.php?alreadyLoggedIn');
    die;
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
    <form class="loginform" action="register_action.php" method="post">
        <input name="name_register" type="text" placeholder="Username"><br>
        <input name="pass_register" type="password" placeholder="password"><br>
        <input name="confirm_register" type="password" placeholder="Confirm password"><br>
        <button type="submit">Register</button>
    </form>
    <?php
    if (isset($_COOKIE['register_failed'])) {
        echo $_COOKIE['register_failed'];
    }
    ?>
</div>
</body>
</html>