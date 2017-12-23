<?php


echo 'if(): else:  endif:';
echo '<br>';
$a = "apple";

if (is_string($a)):
    echo "yes";
else:
    echo "no";
endif;

echo "<hr>";
echo 'WHICH IS GREATER: A,B,C ';
echo '<br>';

$A = 60;
$B = 40;
$C = 30;

if ($A > $B) {
    if ($A > $C) {
        echo $A;
    } else {
        echo $C;
    }
} elseif ($B > $C) {
    echo $B;
} else {
    echo $C;
}
echo "<hr>";
echo 'ternary condition A,B,C?';
echo '<br>';

echo ($A > $B) ? (($A > $C) ? $A : $C) : (($B > $C) ? $B : $C);

echo "<hr>";

echo 'BREAK';
echo '<br>';

$b= 20;

switch($b){
    case 10:
        echo 'TEN';
        break;
    case 20:
        echo 'Twenty';
        break;
    case 30:
        echo 'Thirty';
        break;

    default:
        echo 'unknown';
}