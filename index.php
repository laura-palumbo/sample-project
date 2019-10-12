<?php

$a = 1;

  // number of elements in the unsorted array
  define("MAXN", 99999);
  define("RANG", 100);
  $arr1 = array();
  $arr2 = array();
  $arr3 = array();
  for ($i = 1; $i <= MAXN; $i ++)
  {
    // generate random numbers between [1, maxn], inclusive
    $arr1[$i] = rand(1, RANG);
    $arr2[$i] = $arr1[$i];
  }
  echo "Before: ".implode(',', $arr1)."
";
  $st = microtime();
  // build-in PHP sorting by values, keep index association.
  asort($arr1);
  $time1 = microtime() - $st;
  echo "After: ".implode(',', $arr1)."
";
  // index sorting
  $st = microtime();
  $cnt = array_fill(1, RANG, 0);
  foreach ($arr2 as $v)
  {
    $cnt[$v] ++;
  }  
  $time3 = round(microtime() - $st, 9);
  for ($i = 1; $i <= RANG; $i ++)
  {
    for ($j = 0; $j < $cnt[$i]; $j ++)
    {
      array_push($arr3, $i);
    }
  }  
  $time2 = microtime() - $st;
  echo "After: ".implode(',', $arr3)."
";
  $time1 = round($time1, 9);
  $time2 = round($time2, 9);
  echo "
Time1: $time1
";
  echo "Time2: $time2 ($time3)
";

?>
