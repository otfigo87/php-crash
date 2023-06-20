<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser($email){
  echo "User Registered with email: $email";
}

// registerUser("Aaa@gmail.com");

function sum($num1 = 0, $num2 = 0){
  return $num1 + $num2;
}

$total = sum();
echo $total;

$myVar = fn($a, $b) => 
  $a * $b;
echo $myVar(2, 4);


