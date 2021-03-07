<?php

require_once 'utils.php';
require_once 'algorithms/insertion_sort.php';
require_once 'algorithms/selection_sort.php';
require_once 'algorithms/bubble_sort.php';
require_once 'algorithms/merge_sort.php';
require_once 'algorithms/quick_sort.php';

// Example values
$channels = ['red', 'green', 'blue', 'alpha'];
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
    1,
    40,
];
$value = 15;

// // Constant time O(1)
// printText("Value is $value");

// // // Lineal time O(n)
// for ($i = 0; $i < $value; $i++) {
//     printText("Value is $value");
//     $value--;
// }

// // // Quadra time O(n^2)
// foreach ($channels as $channel) {
//      printText("Channel is $channel");
//     for ($i = 0; $i < $value; $i++) {
//         printText("Value is $value");
//         $value--;
//     }
// }

echo PHP_EOL;
printText("Insertion Sort");
print_r($sorted = insertion_sort($unsorted));
echo PHP_EOL;
printText("Selection Sort");
print_r($sorted = selection_sort($unsorted));
echo PHP_EOL;
printText("Bubble Sort");
print_r($sorted = bubble_sort($unsorted));
echo PHP_EOL;
// printText("Merge Sort");
// print_r($sorted = merge_sort($unsorted));
// echo PHP_EOL;
printText("Quick Sort");
$limit = count($unsorted) - 1;
print_r($sorted = quick_sort($unsorted, 0, $limit));
echo PHP_EOL;