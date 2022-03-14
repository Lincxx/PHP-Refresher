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
  //SESSION 
  // good to use for sensitive data 
  // session exists as long as the broswer is open
  session_start();

  // Storing information
  $_SESSION["Name"] = "Jeremy";
  $_SESSION["Age"] = 25;
  echo "Hello " . $_SESSION["Name"];

  session_destroy(); // will destroy session when the browser is closed
  echo "Hello " . $_SESSION["Name"];
  ?>
</body>
</html>