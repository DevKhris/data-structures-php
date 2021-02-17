<?php
// Example values
// $channels = ['red','green','blue','alpha'];
// $value = 15;

// Constant time O(1)
// printText("Value is $value");

// // Lineal time O(n)
// for ($i = 0; $i < $value; $i++) {
//     printText("Value is $value");
//     $value--;
// }

// // Quadra time O(n^2)
// foreach ($channels as $channel) {
//      printText("Channel is $channel");
//     for ($i = 0; $i < $value; $i++) {
//         printText("Value is $value");
//         $value--;
//     }
// }

function printText($input)
{
    print $input . PHP_EOL ;
}

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
