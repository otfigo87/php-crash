<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/
$file = 'extras/users.txt';

if(file_exists($file)){
  // echo readFile($file);
  $handle = fopen($file, 'r');
  $content = fread($handle, filesize($file));
  fclose($handle);
  echo $content;
} else {
  $handle = fopen($file, 'w');
  $content = 'Brad' .PHP_EOL. 'Sara' .PHP_EOL. 'Adam';
  fwrite($handle, $content);
  fclose($handle);
}
