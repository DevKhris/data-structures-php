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

function swap($after, $current, $array)
{
    $previousItem = $array[$after];
    $currentItem = $array[$current];

    $array[$after] = $previousItem;
    $array[$current] = $currentItem;

    printText("$array[$after] changed by $array[$current]");

    return $array;
}
