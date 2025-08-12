<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$name =isset($_POST['name']) ? trim($_POST['name']) :'Guest' ;
$color =isset($_POST['color']) ? trim($_POST['color']) :'green';

//redirect the page with header 
header("Location:result.php?name=" .urlencode($name) ."&color=" .urlencode($color),true,303);

exit();
}
//we use get here to retrieve the data from the url
$name =isset($_GET['name']) ? htmlspecialchars($_GET['name']) :'Guest';
$color =isset($_GET['color']) ? htmlspecialchars($_GET['color']) :'blue';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result page</title>
</head>
<body>
    <h1>Hello ,<?php  echo $name;  ?></h1>
       <p style="color: <?php echo $color; ?>;">this is your favorite color</p>
          <p><a href="index.php">Go Back</a></p>
</body>
</html>