<?php
function concatenateStrings($str1, $str2) {
    $str2Length = strlen($str2);
    if ($str2Length > strlen($str1)) {
        $str2 = substr($str2, $str2Length - strlen($str1));
    }
    return $str1 . strrev($str2);
}

$str1 = "Hello";
$str2 = "world!";
$result = concatenateStrings($str1, $str2);
echo $result;

?>