<?php
/*
 *One Dimensional Array
 */


$array = [1, 2, 3, 4, 5, 6, 7];

foreach ($array as $key => $value) {
    if ($key == 1) {
        continue;
    } elseif ($key == 3) {
        break;
    }

    echo $value;
}

//////////////////Multi Dimensional Array///////////////////////////////
//Array inside array


$info = [
    ['ram', 'ram@gmail.com', 'kalanki'],
    ['shyam', 'shyam@gmail.com', 'balaju']
];


echo "<br> {$info[0][0]} and {$info[1][0]} are friends living in {$info[0][2]} and {$info[1][2]} respectively. ";
echo "<hr> <pre>";
for ($i = 0; $i<2; $i++) {
    for ($j = 0;$j < 3; $j++) {

    echo $info[$i][$j]."&#09;";

}
echo '<br>';
}


