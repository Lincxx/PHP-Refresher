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
    // string functions
    // length
    $str = "Today is a sunny day";
     echo strlen($str);

    //  word count
    $firstName = "My first name is jeremy";
    echo "<br>";
    echo str_word_count($firstName);

    // How to find text within a string
    echo "<br>";
    $email = "info@mail.com";
    if(strpos($email,"@")){
      echo "This is valid email";
    } else {
      echo "This is an email input field!";
    }

    // ucwords = every first lettter of a word is uppercase
    echo "<br>";
    echo ucwords("What is your name? <br>");

     // strtoupper = all letter uppercase
     echo "<br>";
     echo strtoupper("What is your name? <br>");

     // strtolower = all letter uppercase
     echo "<br>";
     echo strtolower("What Is your name? <br>");
  ?>
</body>
</html>