<?php
//user-defined function
//display minimum value from an array of numbers

if (!function_exists('minimum')) {

    /**
     * function returns minimum value from array of numbers
     * @param array ...$num
     * @return mixed
     */
    function minimum(...$num)
    {
        print_r($num);
        echo '<br> Ans: ';
        $min = $num[0];
        for ($i = 1; $i < count($num); $i++) {
            if ( $num[$i] < $min) {
                $min = $num[$i];
            }
        }
        return $min;
    }
}

$value = minimum(4, 5, 6, 2, 1, 4, -3, 11, 2, -1, 4, 7, 8, -8, 4, 3, 1, 12);

echo $value;