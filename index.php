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
    </ul>
</nav>
<body>
<form method="GET">
    <input type="text" name="person">
    <button>Submit</button>
</form>
<?php
    // Check if the form is submitted

    if (isset($_GET['person'])) {
        $name = $_GET['person'];
        echo $name . " can spell input!";
    }
?>

</body>
</html>