<!-- Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string. -->

<?php

function concatString($str1, $str2)
{
    $concatenated = $str1 . $str2;
    return $concatenated;
}

$str1 = "Hi I'm Tahsin";
$str2 = "Shahriar.";

echo (concatString($str1, $str2));
