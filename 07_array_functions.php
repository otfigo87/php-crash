<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ["apple", "orange", "pear", "Mango"];
//! Length
// echo count($fruits);
//! Search
// var_dump( in_array('apple', $fruits) );
//!Add
$fruits[] = "banana";
//or
array_push($fruits, "grape");
array_unshift($fruits, "cherry"); 
// print_r($fruits);
//! Remove
array_pop($fruits);
array_shift($fruits);
//remove specific element by index
unset($fruits[2]);
// print_r($fruits);

//!concat
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//!combine
$a = [1,2,3, "4"];
$b = ["a", "b", "c", "d"];
$c = array_combine($a, $b);
// print_r($c);

//!Map
$numbers = range(1,10); //array[1...10]
// print_r($numbers);
$newNumbers = array_map(function($num){
  return "Number $num";
}, $numbers);
// print_r($newNumbers);

//! Filter
$lessThan10 = array_filter($numbers, fn($el) => $el <= 5);
// print_r($lessThan10);

//! Reducer
$sum = array_reduce($numbers, fn($acc, $num) => $acc + $num);
print_r($sum);



