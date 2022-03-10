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
    // Conditional statement
    // If statement
    $age = 17;
    if($age < 20){
        echo "You are to young";
    } 
    // else statement
    $age = 21;
    if($age < 20){
        echo "You are to young";
    } else {
        echo "Come on in";
    }
    // if/else statement
    $age = 17;
    if($age > 20){
        echo "Come on in";
    } elseif ($age === 17) {
        echo "4 more years";
    } else {
        echo "Nope go away";
    }
    ?>
</body>
</html>