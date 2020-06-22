<?php

require __DIR__ . '/bootstrap.php';

_d($_POST);

if (!isset($_POST['name'])) {
    header("Location: $URL"."pink.php");
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
            background-color: #c02e4c;
        }
    </style>
</head>
<body>
    <!-- <form action="" method="post">
        <button type="submit" name="post-color" value="yellow">GO TO ROSE</button>
    </form> -->
</body>
</html>