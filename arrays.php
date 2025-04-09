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
        <li><a href="arrays.php">Arrays</a></li>
        <li><a href="functions.php">Functions</a></li>
    </ul>
</nav>
<body>

<?php
   $array = array("Franklin", "Austin", "logan", "Harrison", "Ryan");
    echo $array[0];
?>

</body>
</html>