<?php

include_once "StopWatch.php";

//https://www.geeksforgeeks.org/selection-sort/
// https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-4.php
$stopwatch = new StopWatch();



$stopwatch->start();
$time1 = $stopwatch->getElapsedTime();
echo $time1 . "<br>";
echo "Start time: " . $stopwatch->getStartTime()."<br>";

//$arr = array(3, 0, 2, 5, -1, 4, 1);

// 10k number
$arr = [];
for ($i = 0; $i <= 1000; $i++) {
    array_push($arr, $i);
}

$new_arr = $stopwatch->selection_sort($arr);

$stopwatch->stop();
$time2 = $stopwatch->getElapsedTime();
echo $time2 . "<br>";
echo "End time: " . $stopwatch->getEndTime();


 print("<pre>" . print_r($stopwatch->mstoDate($time2 - $time1), true) . "</pre>");


print("<pre>" . print_r($new_arr, true) . "</pre>");