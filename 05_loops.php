<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for($i = 0; $i <= 10; $i++){
//   echo "Number $i </br>";
// }

/* ------------ While Loop ------------ */
// $x = 0;
// while ($x < 10) {
//   echo $x;
//   $x++;
// }
/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/
$array = ["first", "second", "third"];

for($i = 0; $i < count($array); $i++) {
  echo "$array[$i] </br>";
}

foreach($array as $el) {
  echo "$el </br>";
}

foreach ($array as $i => $el) {
  echo "$i - $el </br>";
}
