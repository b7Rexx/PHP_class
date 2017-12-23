<?php

//Associative Array
//array values are referenced by key { 'key' => 'value'  }

$array = ['name' => 'ram',
    'email' => 'ram@gmail.com',
    'place' => 'kalimati'];
echo "<pre>";
print_r($array);
echo "<hr>";

echo "$array[email]";
echo "<hr>";

foreach ($array as $key => $value) {
    echo "$value <br>";
}
//
//Multi Dimensional
echo '<hr>';
$person = [
    'p1' => [
        'name' => 'john',
        'caste' => 'cena'
    ],
    'p2' => [
        'name' => 'chris',
        'caste' => 'jericho',
        'age' => '20'
    ]
];

print_r($person);
echo "<hr>";
foreach ($person as $key => $index) {
    echo "{$key} :<br>";
    foreach ($index as $id => $set) {
        if ($id == 'name') {
            echo "name :{$set} <br>";
        } elseif ($id == 'caste') {
            echo "caste:{$set} <br>";
        }
        else{
            echo "age: {$set}";
        }
    }
}