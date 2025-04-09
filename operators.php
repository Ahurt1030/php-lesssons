<Html>
<head>
<doctype html>
<meta charset="UTF-8">
<title>Operators</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<nav>
    <ul>
        <li><a href="calculator.php">Calculator</a></li>
        <li><a href="calender.php">Calendar</a></li>
        <li><a href="conditionals.php">Conditionals</a></li>
        <li><a href="datatypes.php">Data Types</a></li>
        <li><a href="operators.php">Operators</a></li>
        <li><a href="index.php">home</a></li>
        <li><a href="loop.php">Loop</a></li>
        <li><a href="arrays.php">Arrays</a></li>
        <li><a href="functions.php">Functions</a></li>
    </ul>
</nav>
<body>

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