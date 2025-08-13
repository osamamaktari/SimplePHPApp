<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : 'Guest';
    $color = isset($_POST['color']) ? trim($_POST['color']) : 'green';

    // Redirect the page with 303 status
    header(
        'Location: result.php?name=' . urlencode($name) . '&color=' . urlencode($color),
        true,
        303
    );

    exit();
}

// We use GET here to retrieve the data from the URL
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';
$color = isset($_GET['color']) ? htmlspecialchars($_GET['color']) : 'blue';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
</head>
<body>
    <h1>Hello, <?php echo $name; ?></h1>
    <p style="color: <?php echo $color; ?>;">This is your favorite color</p>
    <p><a href="index.php">Go Back</a></p>
</body>
</html>
