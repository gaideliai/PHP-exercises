<?php

$random = rand(3, 10);
$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$checkbox = '';

for ($i=0; $i < $random; $i++) { 
    $letter = $letters[$i];
    $checkbox .= '<input type="checkbox" id="'.$letter.'" name="letter'.($i+1).'" value="'.$letter.'">
    <label style="color:orange;" for="'.$letter.'"> '.$letter.'</label><br>';
}

$color = 'black';
$count = count($_POST) - 1;


if (isset($_POST['checked'])) {     
    $color = 'white';
    $body = "sugeneruota:". $_POST['checked']. ", pažymėta: $count";    
}
else {
    $body = 
    '<form action="" method="post">'       
        .$checkbox.
        '<button type="submit" name="checked" value ="'
        .$random.
        '">Checked</button>
    </form>';
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
    <?php 
    echo $body;
    ?>
</body>
</html>