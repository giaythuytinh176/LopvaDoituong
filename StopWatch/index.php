<?php

include_once "StopWatch.php";

//https://www.geeksforgeeks.org/selection-sort/
// https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-4.php
$stopwatch = new StopWatch();


function swap_positions($arr, $left, $right)
{
    $backup_arr_right = $arr[$right];
    $arr[$right] = $arr[$left];
    $arr[$left] = $backup_arr_right;
    return $arr;
} // asort;

function selection_sort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $arr = swap_positions($arr, $i, $min);
    }
    return $arr;
}

function mstoDate($ms)
{
    $date = [];
    $date['ms'] = $ms;
    $date['second'] = $ms / 1000;
    $date['minutes'] = $date['second'] / 60;
    $date['hour'] = $date['minutes'] / 3600;
    $date['day'] = $date['hour'] / 8600;
    return $date;
}

$stopwatch->start();

$time1 = $stopwatch->getElapsedTime();
echo $time1 . "<br>";

//$arr = array(3, 0, 2, 5, -1, 4, 1);

// 10k number
$arr = [];
for ($i = 0; $i <= 1000; $i++) {
    array_push($arr, $i);
}

$new_arr = selection_sort($arr);

$stopwatch->stop();

$time2 = $stopwatch->getElapsedTime();
echo $time2 . "<br>";


echo "Time from start to stop:" . print("<pre>" . print_r(mstoDate($time2 - $time1), true) . "</pre>");


print("<pre>" . print_r(selection_sort($arr), true) . "</pre>");