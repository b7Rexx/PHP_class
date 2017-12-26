<?php
include "config.php";

$var = $_POST['name'];
$var1 = $_POST['image'];

$image = "img/". "$var1". ".jpg";

if(isset($var) && isset($image)) {
    $mysql_qry = "INSERT INTO `imag`(`sn`, `name`, `image`) VALUES ('','$var','$image');";
    $result = mysqli_query($db, $mysql_qry);
}
header ("Location: http://localhost/itnclass/newTest/index.php");

?>