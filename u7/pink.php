<?php

require __DIR__ . '/bootstrap.php';

_d($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: pink;
        }
    </style>
</head>
<body>
    <form action=<?=$URL.'rose.php'?> method="post">
        <button type="submit" name="name" value="value">GO TO ROSE</button>
    </form>
</body>
</html>