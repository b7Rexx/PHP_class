<?php

$str = '  __my name is brexx_';
echo $str . "<br> After trim :<br>";
echo trim($str, "_, ");
echo "<hr>";

//
$a = str_split($str);
print_r($a);
echo "<hr>";

//
echo getcwd();
echo "<hr>";

//
if (file_exists('newDir')) { //checks if file named newDir exists
    rmdir('newDir');    //removes file named newDir
    echo "file removed <br>";
} else {
    mkdir('newDir');    //creates file named newDir
    echo "file created <br>";
}

if (file_exists('NOTES/newDir')) { //checks if file named newDir exists inside NOTES
    rmdir('NOTES/newDir');    //removes file named newDir inside NOTES
    echo "file removed from NOTES";
} else {
    mkdir('NOTES/newDir');    //creates file named newDir inside NOTES
    echo "file created in NOTES";
}
echo "<hr>";

//
echo __FILE__;
echo '<br>';
echo dirname(__FILE__);
echo '<br>';
echo __DIR__;
echo '<br>';
echo __LINE__;
echo '<br>';
echo '<pre>';
$arr = scandir(__DIR__);
print_r($arr);
echo '<br>';
echo dirname(dirname(__FILE__));
echo "<hr>";

print_r(pathinfo(__FILE__));
echo '<br>';
print_r(pathinfo(__FILE__)['basename']);
echo '<br>';
print_r(pathinfo(__FILE__)['extension']);
echo '<br>';
print_r(pathinfo(__FILE__)['filename']);
echo '<br>';
print_r(pathinfo(__FILE__)['dirname']);
echo "<hr>";


