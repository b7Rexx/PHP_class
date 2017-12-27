<?php

echo "Create your own str_repeat function";
echo '<br>';
echo str_repeat('apple', '10');
echo "<br> Ans:";
if (!function_exists('myStrRepeat')) {
    /**
     * function to concatenate the string multiples times as given in argument
     * @param $item
     * @param $num
     * @return string
     */
    function myStrRepeat($item, $num)
    {
        $str = '';
        for ($i = 0; $i < $num; $i++) {
            $str .= $item;
        }
        return $str;
    }
}
echo '<br>';
echo myStrRepeat('apple', 15);

echo "<hr>";

echo "No repeated number in the list <br> <pre>";

if (!function_exists('unrepeatedArray')) {
    /**
     * function to create unique list of array
     * @param array ...$arr
     * @return array
     */
    function unrepeatedArray(...$arr)
    {
        print_r($arr);
        echo '<br> Ans: ';
        $out = [];
        $j = 0;
        for ($i = 0; $i < count($arr); $i++) {
            if (!in_array($arr[$i], $out)) {
                $out[$j] = $arr[$i];
                $j++;
            }
        }
        return $out;
    }
}

$arr = unrepeatedArray(1, 2, 3, 3, 4, 5, 3, 4, 5, 12, 3, 34, 23);
print_r($arr);

