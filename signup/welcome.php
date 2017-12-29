<?php
session_start();
//print_r($_SESSION);
if (!(isset($_SESSION['username']) && isset($_SESSION['password']))) {
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
    <h3>Welcome! <?= $_SESSION['username']; ?></h3>
</div>
<form method="post" action="logout.php">
    <button class="logout " type="submit" onclick="return confirm('Are you sure?')">Logout</button>
</form>

<?php
echo "<pre>";
//$handle = fopen('user_pass.txt','r');
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
        for ($i = 0; $i < count($all_admin);) {
            echo "<tr>";
            echo "<td >{$all_admin[$i]}</td ><td>{$all_admin[$i+1]}</td >";
            echo "</tr >";
            $i += 2;
        }
        ?>
    </table>
</div>
</body>
</html>
