<?php
function removeFirstAndLast($arr) {
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$arr = array(1, 2, 3, 4, 5);
$newArr = removeFirstAndLast($arr);
print_r($newArr);
