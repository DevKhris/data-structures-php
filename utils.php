<?php
/**
 * Swap array values function
 *
 * @param int $previous previous item in array
 * @param int $current  current item in array
 * @param array $array  array to swap values
 *
 * @return array         return given array
 *
 */
function swap($previous, $current, $array)
{
    $previousItem = $array[$previous];
    $currentItem = $array[$current];

    $array[$previous] = $currentItem;
    $array[$current] = $previousItem;

    return $array;
}

function printText($input)
{
    echo $input . PHP_EOL;
}
