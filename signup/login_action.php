<?php
session_start();

if (isset($_SESSION['username'])|| isset($_COOKIE['user'])) {
    header('Location: welcome.php?alreadyLoggedIn');
    die;
}

if (!empty($_POST)) {
    $login_name = $_POST['name_login'];
    $login_pass = $_POST['pass_login'];
    $login_check = $login_name . "=username&password=" . $login_pass . "\n";

    $handle = fopen('user_pass.txt', 'r');
    $user_pass = file('user_pass.txt');

    if ($handle) {
        $i = 0;
        while ($i < count($user_pass)) {
            if ($login_check == $user_pass[$i]) {
                if (!isset($_POST['remember'])) {
                    $_SESSION['username'] = $login_name;
                    $_SESSION['password'] = $login_pass;
                    header('Location: welcome.php?loginSession');
                    die;
                } else {
                    setcookie('user', $login_name, time() + 86400);
                    setcookie('pass', $login_pass, time() + 86400);
                    header('Location: welcome.php?loginCookie');
                    die;
                }
            }
            $i++;
        }
        header('Location: login.php?failedToLogin');
        setcookie('message', 'Incorrect login info.', time() + 1);
    }
} else {
    header('Location: login.php?redirectedToLogin');
}
?>
