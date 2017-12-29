<?php
/**
 * Calculator using form
 */

if (!empty($_POST)) {
    $num1 = $_POST['first'];
    $num2 = $_POST['second'];
    $operator = $_POST['operator'];

    /**
     * function to return operation between two numbers
     * @param $num1
     * @param $num2
     * @param $operator
     * @return float|int
     */
    function calc($num1, $num2, $operator)
    {
        switch ($operator) {
            case 'addition':
                return $num1 + $num2;
                break;
            case 'subtraction':
                return $num1 - $num2;
                break;
            case 'multiple':
                return $num1 * $num2;
                break;
            case 'quotient':
                return $num1 / $num2;
                break;
            default:
                echo 'unknown operator.please use: +,-,*,/';
        }
    }

    $output = calc($num1, $num2, $operator);
}
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
<body style="margin:50px;">
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
    echo "<hr>";
}
?>
</body>
</html>

