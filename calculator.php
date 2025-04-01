<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Calculator</title>
</head>

<body>
<form>
    <input type="number" name="num1" placeholder="First Number" >
    <input type="number" name="num2" placeholder="Second Number">
    <select name="operator">
        <option>None</option>
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>
<?php
    if(isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "You need to select a method!";
            break;
            case "add":
                echo $result1 + $result2;
            break;
            case "subtract":
                echo  $result1 - $result2;
            break;
            case "multiply":
                echo $result1 * $result2;
            break;
            case "divide":
                echo $result1 / $result2;
            break;
        }
    }
?>
</body>
</html>