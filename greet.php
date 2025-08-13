<?php

declare(strict_types=1);

// We use GET here to retrieve the data passed in the URL query string,
// allowing us to display the user's name on this greeting page.
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <p><a href="index.php">Go Back</a></p>
</body>
</html>
