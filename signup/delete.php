<?php

if(!empty($_GET)) {
//echo "<pre>";
    $delete = $_GET['id'];
    echo $delete;
    echo '<br>';
    $file = file("user_pass.txt");
    $file[$delete] = '';
//print_r($file);

    $handle = fopen('user_pass.txt', 'w');
    fwrite($handle, implode($file));

//$file1 = file("user_pass.txt");
//print_r($file1);
}

header('Location: welcome.php?accountRemoved');
die;

?>