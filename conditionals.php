<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Conditionals</title>
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
    </ul>
</nav>
<body>
    
    <?php
    $x = 1;

    if ($x == 1) {
        echo "Austin cant spell Input!";
    }
    elseif ($x == 2) {
        echo "Franklin can spell Input!";
    }
    elseif ($x == 3) {
        echo "Logan can spell Input!";
    }
    elseif ($x == 4){
        echo "Chance can spell Input!";
    }
    else {
        echo "Everyone can spell Input!";
    }
    ?>
<?php
    // The switch statement is another way to do conditionals
    $y = 1;

    switch ($y) {
        case 1:
            echo "Austin cant spell Input!";
            break;
        case 2:
            echo "Franklin can spell Input!";
            break;
        case 3:
            echo "Logan can spell Input!";
            break;
        case 4:
            echo "Chance can spell Input!";
            break;
        default:
            echo "Everyone can spell Input!";
    }
    ?>
    
</body>
</html>