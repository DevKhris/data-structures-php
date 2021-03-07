<?php

function quick_sort(array $array, $left, $right)
{
    $size = count($array);
    if ($left < $right) {
        $origin = $left;
        $border = $right;

        $pivot = $array[$left];
        $right--;
        do {
            while ($left < $size && $array[$left] < $pivot) {
                $left++;
            }

            while ($right > 0 && $array[$right] > $pivot) {
                $right--;
            }

            if ($left <= $right) {
                $array = swap($left, $right, $array);
                $left++;
                $right--;
            }
        } while ($left <= $right && $left <> $right);

        $array = swap($left, $border, $array);
        quick_sort($array, $left, $border);
        quick_sort($array, $origin, $right);

        return $array;
    }
}