<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Web Page</title>
<link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>
    <?php include('includes/header.php') ; ?>
</form>
<?php
  function newCalc($x){
    $newnr = $x * 0.01;
    echo "Here is 1% of what you wrote" .$newnr;
  }
    $x = 8796;
    newCalc($x);
    echo "<br>";
    $a =56;
    newCalc($a);
?>

</body>
</html>