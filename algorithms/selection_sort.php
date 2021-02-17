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

$sorted = selection_sort($unsorted);

function selection_sort(array $array)
{
    $posx;
    $posy;
    for ($i = 0; $i < count($array); $i++) {
        $min = $array[$i];
        $original = $min;
        $posx = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            $cmp = $array[$j];

            if ($cmp < $min) {
                $min = $cmp;
                $posy = $j;
            }
        }
        if ($min != $original) {
            $array[$i] = $min;
            $array[$posy] = $original;
        }
    }

    return $array;
}

print_r($sorted);
