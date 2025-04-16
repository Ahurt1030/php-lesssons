<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Operators</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
<?php include('includes/header.php') ; ?>

<?php
    //Arithmetic Operators
    echo 7**7;
?>

<?php    
    //assignment Operators
    $x = 1000;
    $x += 20;

    echo $x;
?>

<?php
    //Comparison Operators
    $a = 7;
    $b = 9;
    if($a == $b) {
        echo "True";
    }
    else {
        echo "False";
    }
?>

<?php
        //increment/Decrement Operators
        $f = 19;

        echo ++$f;
        echo $f;
?>

<?php
        //logical Operators
        $h = 40;
        $i = 40;
        if($h == $i xor 1 == 1) {
            echo "True";
        }
   
?>

</body>
</Html>