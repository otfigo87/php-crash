<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset($_POST['submit'])) {
//  $name = htmlspecialchars($_POST['name']);
//  $age = htmlspecialchars($_POST['age']);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, '', FILTER_SANITIZE_SPECIAL_CHARS);
 echo $name;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="" method="POST">
    <div>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" />
    </div>
    <div>
      <label for="age">Age:</label>
      <input type="text" name="age" id="age" />
    </div>
    <input type="submit" value="Submit" name="submit">
  </form>

</body>

</html>