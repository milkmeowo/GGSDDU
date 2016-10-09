<?php
// https://www.codewars.com/kata/complementary-dna/train/php

function DNA_strand($dna) {
  // Your code here
  // 1.use preg_replace_callback
  $dnaPairs = [
     'A' => 'T',
     'T' => 'A',
     'C' => 'G',
     'G' => 'C'
  ];
  
  return preg_replace_callback(
     '/./',
     function($matchs) use ($dnaPairs) {
       return $dnaPairs[strtoupper($matchs[0])];
     },
     $dna
  );
  
}

// 2.use strtr
// 2.1
function DNA_strand($dna) {
  $dnaAndComplement = [
    'A' => 'T',
    'T' => 'A',
    'G' => 'C',
    'C' => 'G'
  ];

  return strtr($dna, $dnaAndComplement);
}

//2.2
function DNA_strand($dna) {
  return strtr($dna, 'ACGT', 'TGCA');
}
