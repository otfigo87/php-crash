<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [89, 44,34,67, 99];
$fruits = ["apple", "banana", "orange"];
$veggies = array('tomatoes', 'onions');

// echo $veggies;
// print_r($numbers);
// var_dump($numbers);
// echo $fruits[2];

//Associative Array
$person = [
  'first_name' => 'Brad',
  'last_name' => 'Adam'
];

echo $person['first_name'];

var_dump(json_encode($person));
//json_encode to get Json format


