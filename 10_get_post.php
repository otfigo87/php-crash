<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
if (isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
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

  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Adam&age=30">CLICK</a>

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