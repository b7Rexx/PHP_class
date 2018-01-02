<?php
session_start();


if (isset($_SESSION['username'])|| isset($_COOKIE['user'])) {
    header('Location: welcome.php?alreadyLoggedIn');
    die;
}

if(!empty($_POST)){
$register_name = $_POST['name_register'];
$register_pass = $_POST['pass_register'];
$register_confirm = $_POST['confirm_register'];

if ($register_pass === $register_confirm) {

    $handle = fopen('user_pass.txt', 'a');
    fwrite($handle, "$register_name=username&password=$register_pass\n");
    fclose($handle);
    header('Location: login.php?successfulRegister');
    setcookie('register_success','Successfully Registered',time()+1);

} else {
    header('Location: register.php?failedToRegister');
    setcookie('register_failed','Password did not Match',time()+1);

}

}
else{
    header('Location: login.php?redirectedToLogin');
}
?>