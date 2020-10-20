<?php

$array = [1, 9, 4.5, 6.6, 5.7, -4.5];

function selectionSort($arr) {
    for($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for($j = $i + 1; $j < count($arr); $j++) {
            if($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

print_r(selectionSort($array));