<?php

function insertion_sort(array $array) : array
{
    for ($i = 1; $i < count($array); $i++) {
        for ($j = $i; $j > 0 && $array[$j-1] > $array[$j]; $j--) {
            $array = swap($j-1, $j, $array);
        }
    }
    return $array;
}
