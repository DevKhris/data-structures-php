<?php

require_once '../index.php';

$unsorted = [
 125,
 35,
 48,
 32,
 78,
 12,
 65,
 54,
 31,
 546,
 2,
];

$sorted = insertion_sort($unsorted);

function insertion_sort(array $array) : array
{
    for ($i = 1; $i < count($array); $i++) {
        for ($j = $i; $j > 0 && $array[$j-1] > $array[$j]; $j--) {
            $array = swap($j-1, $j, $array);
        }
    }
    return $array;
}


print_r($sorted);
