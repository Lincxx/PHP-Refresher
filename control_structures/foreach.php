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
  $names = ['jon','mike', 'tim'];
    // foreach loop - iterate over array  variables and object
    foreach($names as $name) {
      echo $name . "<br>";
    }
  $people = ["name" => "Dary", "age" => 30, "gender" => "male"];
  foreach($people as $key => $value) {
    echo "$key : $value <br>";
  }
  ?>
</body>
</html>