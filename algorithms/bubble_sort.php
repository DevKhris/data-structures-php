<?php

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
