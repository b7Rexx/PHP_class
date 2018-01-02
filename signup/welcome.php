<?php
session_start();

//echo "<pre>";
//print_r($_SESSION);
//print_r($_COOKIE);
//die;
//echo "</pre>";

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
    <hr>
    <h3>Welcome! <?= (isset($_SESSION['username'])) ? $_SESSION['username'] : $_COOKIE['user']; ?></h3>
</div>
<form method="post" action="logout.php">
    <button class="logout " type="submit" onclick="return confirm('Are you sure?')">Logout</button>
</form>

<?php

/**
 * put admin by default when all account removed
 */

if (empty(file('user_pass.txt'))) {
    $handle = fopen('user_pass.txt', 'a');
    fwrite($handle, "admin=username&password=admin\n");
    fclose($handle);
}
$read_file = file('user_pass.txt');
$imp = implode('=username&password=', $read_file);
$all_admin = explode('=username&password=', $imp);
//print_r($all_admin);

?>
<div class="table">
    <h2 style="margin-top: 50px;">List of Admin</h2>
    <table class="admin_list">
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        /**
         * Table to show and remove username and password list
         */

        if (is_array($all_admin)) {
            for ($i = 0, $j = 0; $i < count($all_admin);) {
                echo "<tr>";
                echo "<td >{$all_admin[$i]}</td ><td>{$all_admin[$i+1]}</td >";
                echo "<td><a href=\"delete.php?id=" . $j . "\">&times</a></td>";
                echo "</tr >";
                $i += 2;
                $j++;
            }
        }
        ?>
    </table>
</div>
</body>
</html>
