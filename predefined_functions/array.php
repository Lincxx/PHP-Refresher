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
  // Arrya Functions
  $personalInfo = array("name" => "jeremy", "age" => 45, "city" => "flint");


  $moreinfo = array("state" => "mi", "weight" => 230);

  //merge
  $personalInfo = array_merge($personalInfo, $moreinfo);
  
foreach ($personalInfo as $key => $value) {
  echo "$key: $value" . "<br>";
}

echo "<br>";
// print only keys
print_r(array_keys($personalInfo));

echo "<br>";
// print only values
print_r(array_values($personalInfo));

https://youtu.be/ymO2JEVWu30?t=235
  ?>
</body>
</html>