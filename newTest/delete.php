<?php
require("config.php");

$delfile=$_GET['id'];
$sql="DELETE FROM `imag` WHERE `sn` LIKE '$delfile'";
$result=mysqli_query($db,$sql);

if(($result)>0){
    header ("Location: http://localhost/itnclass/newTest/index.php");

}else
{	echo "failed";
}
?>