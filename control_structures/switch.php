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
        // Switch
    $role = "admin";
    switch ($role) {
        case 'vistor':
            echo "enjoy out stay";
            break;
        case 'admin':
            echo "I have the power";
        break;
        default:
            echo "You shall not pass";
            break;
    }
    ?>
</body>
</html>