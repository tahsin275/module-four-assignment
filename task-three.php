<!-- Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
 -->

<?php

function removeFirstAndLast($arr)
{
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$sample_array = ["apple", "banana", "jackfruit", "oreo", "mango"];

print_r(removeFirstAndLast($sample_array));
