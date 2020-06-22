<?php

require __DIR__ . '/bootstrap.php';

_d($_POST);
_d($_GET);

if(!empty($_GET)) {    
    $color = 'green';    
}
if(!empty($_POST)) {    
    $color = 'yellow';
    header("Location: $URL"."green7.php"); // GET
    die();    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $color?>;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <button type="submit" name="get-color" value="green">Green</button>
    </form><br>
    <form action="" method="post">
        <button type="submit" name="post-color" value="yellow">Yellow</button>
    </form>
</body>
</html>