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