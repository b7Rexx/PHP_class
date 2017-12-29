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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="first">
    <input type="number" name="second">
    <select name="operator" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="submit" value="OK">
</form>
</body>
</html>
