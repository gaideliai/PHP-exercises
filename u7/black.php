<?php

require __DIR__ . '/bootstrap.php';

_d($_GET);

$color = 'black';
if(!empty($_GET)) {
    if($_GET['color'] == 1) {
        $color = 'red';
    }
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
    <a href=<?=$URL.'black.php'?> style="color: #fff;">Black</a><br>
    <a href=<?=$URL.'black.php?color=1'?> style="color: #fff;">Red</a><br>
</body>
</html>