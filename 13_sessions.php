<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
session_start();

if (isset($_POST['submit'])) {
$username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$password = $_POST['password'];

if($username == 'john' && $password == 'password') {
  $_SESSION['username'] = $username;
  header('Location: /php-crash/extras/dashboard.php');
} else {
  echo 'Incorrect Login';
}
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
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" />
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" />
    </div>
    <input type="submit" value="Submit" name="submit">
  </form>

</body>

</html>
