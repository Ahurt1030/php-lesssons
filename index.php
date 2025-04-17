

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Web Page</title>
<link rel="stylesheet" type="text/css" href="index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>