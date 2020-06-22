<?php
_d($_POST);
_d($_GET);

if(!empty($_GET)) {    
    $color = 'green';    
}
if(!empty($_POST)) {    
    $color = 'yellow';    
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
        <button type="submit" name="color" value="green">Green</button>
    </form><br>
    <form action="" method="post">
        <button type="submit" name="color" value="yellow">Yellow</button>
    </form>
</body>
</html>