<?php
session_start();

//echo "<pre>";
//print_r($_SESSION);
//print_r($_COOKIE);
//die;
//echo "</pre>";
include "include/calculate_opeartion.php";

if (!(isset($_SESSION['username']) || isset($_COOKIE['user']))) {
    header('Location: login.php?loginFirst');
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
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="welcome">
    <h3>Welcome! <?= (isset($_SESSION['username'])) ? $_SESSION['username'] : $_COOKIE['user']; ?></h3>
</div>
<form method="post" action="logout.php">
    <button class="logout " type="submit" onclick="return confirm('Are you sure?')">Logout</button>
</form>

<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Admin')">Home</button>
    <button class="tablinks" onclick="openTab(event, 'Calculator')">Calculator</button>
</div>
<?php
//Admin list tab
include "include/firstTab.php";

//Calculator tab
include "include/secondTab.php";
$_SESSION['tab_block'] = 'none';
$_SESSION['tab_default'] = 'block';

?>


<script src="js/tab.js"></script>
</body>
</html>
