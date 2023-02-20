<?php
function stringcheck($checker)
{
    usort($checker, function ($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $checker;
}

$strings = array("chocolate", "apple", "tomato sauce", "banana", "pear", "orange");
$sorted = stringcheck($strings);
print_r($sorted);
