<?php

$array = [
    ['A', 'A1', 'A2'],
    ['B', 'B1', 'B2'],
    ['C', 'C1', 'C2']];

$assoc_array = [
    'First' => ['zero' => 'A', 'one' => 'A1', 'two' => 'A2'],
    'Second' => ['zero' => 'B', 'one' => 'B1', 'two' => 'B2'],
    'Third' => ['zero' => 'C', 'one' => 'C1', 'two' => 'C2']];


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "{$array[$i][$j]} ";
    }
    echo '<br>';
}
echo "<hr>";
foreach ($assoc_array as $key1 => $index1) {
    echo $key1 . ": <br><div style=\"margin-left:20px\">";
    foreach ($index1 as $key2 => $index2) {
        echo "$index2" . " ";
    }
    echo '</div><br>';

}