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
    <h3>Welcome! <?= (isset($_SESSION['username'])) ? $_SESSION['username'] : $_COOKIE['user']; ?></h3>
</div>
<form method="post" action="logout.php">
    <button class="logout " type="submit" onclick="return confirm('Are you sure?')">Logout</button>
</form>

<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'Admin')">Home</button>
    <button class="tablinks" onclick="openTab(event, 'Calculator')">Calculator</button>
</div>

<!---->
<!--FIRST TAB (ADMIN TAB)-->
<!---->

<div id="Admin" class="tabcontent" style="display: block">
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
</div>
<!---->
<!--SECOND TAB-->
<!---->
<div id="Calculator" class="tabcontent">
    <form action="" method="post">
        <input type="text" name="first" placeholder="First Number"><br>
        <input type="text" name="second" placeholder="Second Number"><br>
        <select name="operator" id="">
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiple">*</option>
            <option value="quotient">/</option>
        </select>
        <input type="submit" value="    OK   " style="margin-left:30px ">
    </form>
    <br>
    <?php
    if(isset($output)){
        echo "The {$operator} of {$num1} and {$num2} is {$output}";
//    echo "<hr>";
    }
    ?>

</div>

<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
</body>
</html>
