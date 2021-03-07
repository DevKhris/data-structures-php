<?php

function merge_sort(array $array)
{
    $size = count($array);
    $half = $size / 2;
    $chunks = array_chunk($array, $half);

    $left = $chunks[0];
    $right = $chunks[1];
    print_r($left);
    print_r($right);
    for ($i = 0; $i < $size; $i++) {
        print_r($chunk[$i]);
        // if ($chunk[$i - 1] > $chunk[$i]) {
        // }
    }

    return $array;
}