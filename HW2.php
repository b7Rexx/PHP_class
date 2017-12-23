<?php
//1
echo 'display 1-50 with odd and even tag <br> <pre> ';
$i = 1;
while ($i <= 50) {
    if (($i % 2) == 0) {
        echo $i . " even &#09;";
    } else {
        echo $i . " odd &#09;";
    }

    if (($i % 10) == 0) {
        echo '<br>';
    }
    $i++;
}
//2
echo '<hr> WHILE LOOP <br>';
$j = 5;
while ($j > 0) {
    $k = $j - 1;
    while ($k >= 0) {
        echo '* ';
        $k--;
    }
    echo '<br>';
    $j--;
}
//3
echo "<hr> FOR LOOP <br>";

for ($m = 0; $m < 4; $m++) {

    for ($n = 0; $n < $m + 1; $n++) {
        echo '* ';
    }
    echo '<br>';
}
//4
echo "<hr> LOOP ARRAY <br>";
$array=['a','apple','b','ball','c','cat','d','dog'];

echo '<pre>';
print_r($array);

for($a=0;$a<8;$a++){
    if(($a%2)==0) {
        echo "$array[$a]";
    }else{
        echo ": $array[$a]  ";
    }
}
