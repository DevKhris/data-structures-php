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

$sorted = bubble_sort($unsorted);

function bubble_sort(array $array)
{
    $swap = false;
    do {
        $swap = false;
        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i-1] > $array[$i]) {
                $swap = true;
                $array = swap($i, $i-1, $array);
            }
        }
    } while ($swap);

    return $array;
}

print_r($sorted);
