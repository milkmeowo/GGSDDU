<?php
/*
Kata: https://www.codewars.com/kata/backwards-read-primes/train/php
Kyu: 6
Details:
  Backwards Read Primes are primes that when read backwards in base 10 (from right to left) are a different prime. (This rules out primes which are palindromes.)

    Examples:
    13 17 31 37 71 73 are Backwards Read Primes
    13 is such because it's prime and read from right to left writes 31 which is prime too. Same for the others.

    Task

    Find all Backwards Read Primes between two positive given numbers (both inclusive), the second one being greater than the first one. The resulting array or the resulting string will be ordered following the natural order of the prime numbers.

    backwardsPrime(2, 100) => [13, 17, 31, 37, 71, 73, 79, 97] 
    backwardsPrime(9900, 10000) => [9923, 9931, 9941, 9967]
*/
function isPrime($num) 
{ 
 //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1)
        return false;

    //2 is prime (the only even number that is prime)
    if($num == 2)
        return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return false;
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
} 

function backwardsPrimeUseArray_fliter($start, $stop){
  $arr = array_filter(range($start, $stop), function ($item) {
    return !isPalindrom($item) && isPrime($item) && isPrime(strrev($item));
  });
  
  return array_values($arr);
}

function isPalindrom($item) {
  return $item == (int)strrev((string)$item);
}


function backwardsPrime($start, $stop){

    $backwards = [];
    
    for($i = $start;$i <= $stop; $i++){
    
      $reverse = (int)strrev((string)$i);
      
      if(isPrime($i) && isPrime($reverse) && $i != $reverse){
      
        $backwards[] = (int)$i;
        
      }
      
    }
    
    return $backwards;
}





