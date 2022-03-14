<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // Cookies
  // small a web server stores on the client computer

  // Args for cookies
  //Name
  //Value
  //Expire
  //Path
  //Domain
  //Security

  //If you do not include an expiration date, the cookie will only be stored for the current session
  $time = time() - 86400 * 30;
  setcookie("name", "jeremy", $time);
  print_r($_COOKIE);
  echo "<br>";
  print_r($_COOKIE);
  ?>
</body>
</html>