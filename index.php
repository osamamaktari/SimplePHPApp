
<?php 
//determine the current server time
date_default_timezone_set('UTC');
$CurrentServerTim = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimplePHPApp</title>
</head>


<body>
    <h2><?php echo "Current Server Time: " . $CurrentServerTim . "<br>"; ?></h2>
//we use post here to encode the data and make it more secure 
 <form action="result.php" method="POST">
        <label for="name">Enter Your Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label for="color">Enter Favorite Color:</label>
        <input type="text" id="color" name="color" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>

 <p><a href="greet.php">Go to Greeting Page</a></p>
</body>
</html>