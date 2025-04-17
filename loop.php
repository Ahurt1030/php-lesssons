<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>My Web Page</title>
<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include('includes/header.php') ; ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>