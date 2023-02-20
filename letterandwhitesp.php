<?php
function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
}
$str1 = "Hello world";
$str2 = "Hello123";
$result1 = containsOnlyLettersAndWhitespace($str1);
$result2 = containsOnlyLettersAndWhitespace($str2);
var_dump($result1);
var_dump($result2);
