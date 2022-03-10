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
    $num1 = 10;
    $num2 = 10;
    function add($num1, $num2){
      return $num1 + $num2;
    }
  
    echo add(3,4);

    // pass by reference
    $x = 10;
    function addByValue($x){
      $x += 5;
    }

    // we can the var
    function addByReference(&$x){
      $x +=10;
    }


    addByValue($x);
    echo $x . "<br>";
    addByReference($x);
    echo $x . "<br>";

  ?>
</body>
</html>