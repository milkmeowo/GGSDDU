<?php
/*
Kata: https://www.codewars.com/kata/find-the-stray-number/train/php
Kyu: 7
Details:
    You are given an odd-length array of integers, in which all of them are the same, except for one single number.

    Implement the method stray which accepts such array, and returns that single different number.

    The input array will always be valid! (odd-length >= 3)

    Examples:

    [1, 1, 2] => 2

    [17, 17, 3, 17, 17, 17, 17] => 3
*/

function stray($arr)
{
    $answer = array_keys(array_count_values($arr),1);
    return $answer[0];
}
