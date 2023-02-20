<!-- Write a PHP function to check if a string contains only letters and whitespace. -->

<?php

function checkString($str)
{
    return preg_match('/^[A-Za-z\s]+$/', $str);
}

$str1 = 'This is a string containing only letter and whitespace';
$str2 = 'This is string 2 containing only letter, whitespace, number and exclamation!!';

// if (checkString($str1)) {
//     echo "nothing except letter and whitespace!";
// } else {
//     echo "contains more character!";
// }

if (checkString($str2)) {
    echo "nothing except letter and whitespace!";
} else {
    echo "contains more character!";
}
