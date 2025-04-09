<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>My Web Page</title>
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
    </ul>
</nav>
<body>
    <?php
    

    //while loop
    $u = 1;
    while ($u <= 5) {
        echo "hi there<br>";
        $u++;
    }
    
    //do while loop
    $x = 1;
    do{
        echo "hi  there<br>";
        $x++;
    }
    while ($x <= 5);

    //for loop
    for ($y = 1; $y <= 10; $y++){
        echo "hi <br>";
    }

    //foreach loop
    $array = array("Franklin", "Austin", "Logan", "Chance", "Ryan");

    foreach ($array as $loopdata) {
        echo "my name is ".$loopdata."<br>";
    }
    ?>
</body>
</html>