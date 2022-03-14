<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $name = $_FILES['file']['name']; // find file name
  $tmp_name = $_FILES['file']['tmp_name']; // find temp loc
  $size = $_FILES['file']['size']; // find file size
  $error = $_FILES['file']['error']; // find file errors



  // Explode from punctuation mark
  $tempExtension = explode('.', $name);

  $fileExtension= strtolower(end($tempExtension));

  // allowed extensions 
  $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

  if(in_array($fileExtension, $isAllowed)){
    echo "hi 1";
    if ($error === 0) {
      echo "hi 1";
      if ($size < 30000) {
        echo "hi 1";
        $newFileName = uniqid('', true) . "." .$fileExtension;
        $fileDestination = "uploads/". $newFileName;
        move_uploaded_file($tmp_name, $fileDestination);
        header("Location: files.php?uploadsuccess");
      } else {
        echo "Sorry your file size is to big";
      }
    } else {
      echo "Sorry, there was an error! Try is again";
    }
  }  else {
    echo "Sorry, your file type is not accepted";
  }
}

?>

