<?php
/*
Kata: https://www.codewars.com/kata/shortest-word/train/php
Kyu: 7
Details:
	x Simple, given a string of words, return the length of the shortest word(s).

	String will never be empty and you do not need to account for different data types.
*/

function findShort($str){
  $arr = explode(' ', $str);
  $shortest = strlen($arr[0]);
  foreach($arr as $k => $v){
    $vlen = strlen($v);
    if($vlen < $shortest){
      $shortest = $vlen;
    }
   }
   return $shortest;
}


function findShort($str){
    $filter = function ($item) {
        return strlen($item);
    };
    $arr = array_map($filter, explode(' ', $str));
    $ans = min($arr);
    return $ans;
}

// BEST
function findShort($str){
   return min(array_map('strlen', (explode(' ', $str))));

   // 
   /*$words = explode(" ", $str);
  
  	 $lengths = array_map('strlen', $words);
  
  	 return min($lengths);*/
}