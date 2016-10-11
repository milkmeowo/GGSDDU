<?php
/*
Kata: https://www.codewars.com/kata/55aa075506463dac6600010d/train/php
Kyu: 6
Details:
  	Divisors of 42 are : 1, 2, 3, 6, 7, 14, 21, 42. These divisors squared are: 1, 4, 9, 36, 49, 196, 441, 1764. The sum of the squared divisors is 2500 which is 50 * 50, a square!

	Given two integers m, n (1 <= m <= n) we want to find all integers between m and n whose sum of squared divisors is itself a square. 42 is such a number.

	The result will be an array of arrays, each subarray having two elements, first the number whose squared divisors is a square and then the sum of the squared divisors.
*/
function listSquared($m, $n) {

    $answer = [];
    
    for($i = $m; $i < $n; $i++)
    {
     
      	$sum = sumOfDivisorsSquares($i);
   		if(isSquare($sum))
     	$answer[] = [$i, $sum];

    }
    
    return $answer;
}

function isSquare($num) {
  $y = sqrt($num);
  return $y == (int)$y;
}


function sumOfDivisorsSquares($num){
  $sum = 0;
  
  for ($Divisor = 1; $Divisor <= round(sqrt($num)); $Divisor++)
  {
    if ($num % $Divisor == 0)
    {
      $sum += $Divisor * $Divisor;
      $secondDivisor = $num/$Divisor;
      if ($Divisor !== $secondDivisor) {
          $sum += $secondDivisor * $secondDivisor;
      }
    }
  }
  
  return $sum;
}