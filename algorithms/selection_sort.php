<?php

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
