<?php
session_start();

if (isset($_SESSION['username'])|| isset($_COOKIE['user'])) {
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
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="login">
    <form class ="loginform" action="login_action.php" method="post">
        <input name="name_login" type="text" placeholder="Username"><br>
        <input name="pass_login" type="password" placeholder="password"><br><br>
        <input name="remember" type="checkbox" style="margin-left:-70px" checked><i>Stay Signed in</i><br><br>
        <a href="register.php">Sign up Here</a><br>
        <button type="submit">Login</button>
    </form>

    <?php
    if(isset($_COOKIE['message'])) {
        echo "<a class=\"red\">{$_COOKIE['message']}</a>";
    }elseif (isset($_COOKIE['register_success'])){
        echo "<a class=\"red\">{$_COOKIE['register_success']}</a>";
    }
    ?>
</div>
</body>
</html>
