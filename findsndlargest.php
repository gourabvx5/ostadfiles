<?php
function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } else if ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
            $secondLargest = $arr[$i];
        }
    }

    return $secondLargest;
}

$arr = array(1, 3, 5, 2, 7, 6, 4);
$secondLargest = findSecondLargest($arr);
echo $secondLargest;
