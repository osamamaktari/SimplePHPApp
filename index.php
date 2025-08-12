
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
</body>
</html>