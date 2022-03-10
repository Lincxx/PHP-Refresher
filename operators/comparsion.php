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
$x = 10;
$y = 15;

if($x === $y){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if($x === 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if($x < 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if($x > 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if($x <= 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if($x >= 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if($x !== 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";

if($x !== $y){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";

// spaceship
// In PHP 7, a new feature, spaceship operator has been introduced. It is used to compare two expressions. It returns -1, 0 or 1 when first expression is respectively less than, equal to, or greater than second expression.
if($x <=> $y){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
if(10 <=> 10){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";

if($y <=> $x){
    echo "This is true";
} else {
    echo "This is false";
}
echo "<br>";
?>
</body>
</html>