<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
 $string = "hello world!";

echo strlen($string);//length
echo strpos($string, '!');//position(index)
echo strrpos($string, 'o');//last element
echo strrev($string);//reversed string
echo strtoupper($string);//strtolower
echo ucwords($string);
echo str_replace("world", "everyone",$string);
echo substr($string, 0, 5);//slice from 0 to 5
echo substr($string, 5);//from 0 to the end
//start with / end with
if(str_starts_with($string, 'hello')){
  echo "yes";
}
if(!str_ends_with($string, 'hello')){
  echo "No";
}
 

