<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age = 20;

if($age >= 18){
  echo "You can vote";
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
$post = ['first post', 'second post'];

echo !empty($post) ? $post[0] : 'No Posts';


/* -------- Switch Statements ------- */

$color = "blue";

switch($color){
  case 'red':
    echo "yaaaaay";
    break;
  case 'blue':
    echo "Nooooo";
    break;
  default:
  echo 'Your are not red';    
}
