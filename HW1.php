<?php

//variable to compare A,B,C
$A = 60;
$B = 40;
$C = 30;

//variable for age admission
$age = 25;

//switch case operator variables
$num1 = '10';
$num2 = '20';
$operator = '-';

echo 'WHICH IS GREATER: A,B,C '.'<br>'."Ans: ";
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

echo '<hr>'.'ternary condition A,B,C?'.'<br>'."Ans: ";
echo ($A > $B) ? (($A > $C) ? $A : $C) : (($B > $C) ? $B : $C);

echo '<hr>'.'admission for age 16-30'.'<br>'.'Ans:';
if ($age > 30) {
    echo $age . 'admission age exceeded';
} elseif ($age < 16) {
    echo $age . 'just a kid';
} else {
    echo $age . 'can be admitted';
}

echo '<hr>'.'switch case to operate arithmetics bwtween two value'.'<br>';
echo $num1 . $operator . $num2 . '  =  ';
switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
//        if ($num1 > $num2) {
//            echo $num1 - $num2;
//        } else {
//            echo $num2 - $num1;
//        }
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        echo $num1 / $num2;
        break;
    default:
        echo 'unknown operator.please use: +,-,*,/';
}