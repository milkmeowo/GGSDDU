<?php
/*
Kata: https://www.codewars.com/kata/56747fd5cb988479af000028/train/php
Kyu: 7
Details:
  You are going to be given a word. Your job is to return the middle character of
  the word. If the word's length is odd, return the middle character. If the word's
  length is even, return the middle 2 characters.
  Examples:
  Kata.getMiddle("test") should return "es"
  Kata.getMiddle("testing") should return "t"
  Kata.getMiddle("middle") should return "dd"
  Kata.getMiddle("A") should return "A"
  Input
  A word (string) of length 0 < str < 1000
  Output
  The middle character(s) of the word represented as a string.
*/

function getMiddle($text) {
    $len = strlen($text);
    $half = $len / 2; 
    return ($len % 2 == 0) ? substr($text, (floor($half) - 1), 2) : substr($text, $half, 1);
}