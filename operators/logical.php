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
// Logical operators
// and ---Both X and Y are true
// &&  ---Both X and Y are true
// or  ---Both X or Y are true
// ||  ---Both X or Y are true
// xor ---Either X or Y are true, but not both
// !   --- Not
// 1 = True 0 = False

$x = 5;
$y = 10;

if ($x === $y && 1 === 1) {
    echo "true";
} else {
    echo "false";
}

if ($x === $y || 1 === 1) {
    echo "true";
} else {
    echo "false";
}

if ($x === $y xor 1 === 1) {
    echo "true";
} else {
    echo "false";
}


if ($x !== $y && 1 === 1) {
    echo "true";
} else {
    echo "false";
}
?> 
</body>
</html>