<?php
session_start();
session_destroy();

setcookie('user','',1);
setcookie('pass','',1);

header('Location: login.php?logoutSuccess');

?>