<?php
session_start();
?>

<link rel="stylesheet" type="text/css" href="index.css">
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

<?php
$_SESSION['username'] = "Franklin";
echo $_SESSION['username'];

if (!isset($_SESSION['username'])) {
    echo "you are not logged in";
} else {
    echo "you are logged in. ";
}
?>