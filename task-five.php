<!-- Write a PHP function to find the second largest number in an array of numbers. -->

<?php

function secondLargestNum($arr)
{
    usort($arr, function ($num1, $num2) {
        return $num2 - $num1;
    });
    return $arr[1];
}

$sample_array = [24, 56, 764, 432, 76, 975, 43, 41, 877, 453, 24, 95, 101, 666, 521];

echo (secondLargestNum($sample_array));
