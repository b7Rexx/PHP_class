

<?php

session_start();
$num1 = $_POST['first'];
$num2 = $_POST['second'];
$operator = $_POST['operator'];

function calc($num1,$num2,$operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
        case '/':
            return $num1 / $num2;
            break;
        default:
            echo 'unknown operator.please use: +,-,*,/';
    }
}

$_SESSION['OK'] = calc($num1,$num2,$operator);
