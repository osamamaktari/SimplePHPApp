<?php

declare(strict_types=1);

// Determine the current server time
date_default_timezone_set('UTC');
$currentServerTime = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px 20px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #4cae4c;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>
        <?php echo 'Current Server Time: ' . $currentServerTime . '<br>'; ?>
    </h2>

    <!-- We use POST here to send the data more securely -->
    <form action="result.php" method="POST">
        <label for="name">Enter Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="color">Enter Favorite Color:</label>
        <input type="text" id="color" name="color" required>

        <button type="submit">Submit</button>
    </form>

    <p>
        <a href="greet.php">Go to Greeting Page</a>
    </p>
</body>
</html>
