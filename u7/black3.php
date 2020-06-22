<?php

require __DIR__ . '/bootstrap.php';

_d($_GET);

$color = 'black';
if(!empty($_GET)) {
    $color = '#' . $_GET['color']; 
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
    <a href=<?=$URL.'black3.php'?> style="color: #fff;">Back to Black</a><br>
    <p style="color: #fff;">Įveskite RGB spalvos kodą, pvz.: 1234ff</p> 
    <form action="" method="get">
        <label for="" style="color: #fff;">Spalva:</label>
        <input type="text" name="color"><br>
        <button type="submit">Pakeisk spalvą</button>
    </form>
</html>