<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Expiry Example</title>
</head>
<body>
    <h1>Cookie Expiry Example with PHP</h1>
    <p>
        <?php
        if (isset($_COOKIE[$cookie_name])) {
            echo "Cookie '{$cookie_name}' is set! Value: " . $_COOKIE[$cookie_name];
        } else {
            echo "Cookie '{$cookie_name}' has not been set yet. Please reload the page.";
        }
        ?>
    </p>
    <p>The cookie will expire in 2 days from now.</p>
</body>
</html>