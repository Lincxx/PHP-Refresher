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
  
  // $_FILES
  //1. How to upload to the root
  //2. Directly to the database 
  

  // enctype="multipart/form-data" specifies how the form data should be encoded
  //    matches to   type="file" name="file"
  echo $name = $_FILES['file']['name'];
  echo "<br>";
  echo $type = $_FILES['file']['type'];
  echo "<br>";
  echo $tmp_location = $_FILES['file']['tmp_name'];
  echo "<br>";
  // zero means no error
  echo $error = $_FILES['file']['error'];

  ?>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>