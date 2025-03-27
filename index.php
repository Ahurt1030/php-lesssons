<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>My Web Page</title>
</head>

<body>
<form method="GET">
    <input type="text" name="person">
    <button>Submit</button>
</form>
<?php
    $name = $_GET['person'];
    echo $name. " can spell input
    !";
?>

</body>
</html>