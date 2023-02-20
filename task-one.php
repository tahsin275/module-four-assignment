<!-- Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.) -->

<?php

function sortString($arr)
{
    usort($arr, function ($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $arr;
}

$array_of_string = ["apple", "banana", "jackfruit", "oreo", "mango"];

print_r(sortString($array_of_string));
