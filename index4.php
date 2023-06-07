<?php
require 'vendor/autoload.php';

//$arr = [1,2,3,4,5];
//$desired = 5;
//$i = 0;
//$index = 0;
//
//$start = 0;
//$end = count($arr) - 1;
//
//while ($start <= $end) {
//    $i++;
//    $middle = intval(count($arr) / 2);
//
//    if ($desired < $arr[$middle]) {
//        $arr = array_slice($arr,0, $middle);
//        $end = $middle - 1;
//    } elseif($desired > $arr[$middle]) {
//        $arr = array_slice($arr, $middle);
//        $start = $middle + 1;
//    }else{
//        $index = $middle;
//        break;
//    }
//}
//dump($index);
//dump($i);

//start 1 этирация -
//start 2 etiracia -
//start 3 etiracia -

//$arr = [2, 5, 6, 1, 3, 8, 7, 4, 9];

//for ($i = 0; $i < count($arr); $i++) {
//    for ($j = $i + 1; $j < count($arr); $j++) {
//        if ($arr[$i] > $arr[$j]) {
//            $item = $arr[$i];
//            $arr[$i] = $arr[$j];
//            $arr[$j] = $item;
//        }
//    }
//}
//dump($arr);

$arr = [2, 5, 6, 1, 3, 8, 7, 4, 9];

$left = 0;
$right = count($arr) - 1;

while ($left < $right) {
    for ($i = $left; $i < $right; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            $item = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $item;
        }
    }
    $right--;
    for ($i = $right; $i > $left; $i--) {
        if ($arr[$i] < $arr[$i - 1]) {
            $item = $arr[$i];
            $arr[$i] = $arr[$i - 1];
            $arr[$i - 1] = $item;
        }
    }
    $left++;
}
dump($arr);