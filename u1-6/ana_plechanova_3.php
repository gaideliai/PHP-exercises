<?php

echo '**1**<br><br>';
$asterisk = '<div style = "display: inline-block;float: left;max-width: 100vw;">';
foreach (range(0, 400) as $value) {
    $asterisk .= '<span style = "display: inline-block;">*</span>';
}
$asterisk .= '</div>';
echo $asterisk;

$asterisk = '';
for ($i=0; $i<400; $i++) {
    if($i%50 === 0){
        $asterisk .= '<br>';
    }
    $asterisk .= '*';
}
echo $asterisk;

echo '<br><br>**2**<br><br>';
$count = 0;
$max_value = 300;
$array_size = 300;
foreach (range(0, $array_size) as $value) {
    $value = rand(0, $max_value);
    if ($value > 275) {
        echo "<span style = 'color: red;'>$value </span>";
    } else {
        echo "$value ";
    }
    if ($value > 150) {
        $count++;
    }
}
echo '<br>';
echo "Didesnių už 150 yra $count";

echo '<br><br>**3**<br><br>';
$string = '';
$array_size = 3000;
foreach (range(0, $array_size) as $value) {
    if ($value % 77 === 0) {
        $string .= "$value, ";
    }
}
echo substr($string, 0, -2);

echo '<br><br>**4**<br><br>';
$asterisk_count = 100;
$square_asterisk = '<div style = "display: inline-block;">';
for ($i=0; $i<$asterisk_count; $i++) {
    if($i%10 === 0 && $i!==0){
        $square_asterisk .= '<br>';
    }
    $square_asterisk .= '<div style = "display: inline-block;float: left;width: 20px; height: 20px;line-height: 32px;font-size: 40px;">*</div>';
}
$square_asterisk .= '</div>';
echo $square_asterisk;

echo '<br><br>**5**<br><br>';
$square_side = 10;
$square_asterisk = '<div style = "display: inline-block;">';
for ($i=0; $i<$square_side; $i++) {
    for ($j=0; $j<$square_side; $j++) {
        if ($i == $j || $i + $j == 9) {
            $square_asterisk .= '<div style = "display: inline-block;float: left;width: 20px; height: 20px;line-height: 32px;font-size: 40px;color:red;">*</div>';
    
        } else {
            $square_asterisk .= '<div style = "display: inline-block;float: left;width: 20px; height: 20px;line-height: 32px;font-size: 40px;">*</div>';
        }        
    }
    $square_asterisk .= '<br>';
}
$square_asterisk .= '</div>';
echo $square_asterisk;

echo '<br><br>**6**<br><br>';
do {
    $random = rand(0, 1);
    echo $flip = ($random == 0) ? 'H' : 'S';    
} while ($flip !== 'H');

echo '<br>';

$count = 0;
while (true) {
    $random = rand(0, 1);
    echo $flip = ($random == 0) ? 'H' : 'S';
    if ($flip == 'H') {
        $count++;
        if ($count == 3) {
        break;
        }
    }    
}

echo '<br>';

$record = [];
while (true) {
    $random = rand(0, 1);
    echo $flip = ($random == 0) ? 'H' : 'S';
    array_push($record, $flip);
    $i = count($record);
    if ($i >= 3) {
        if ($record[$i-3] == 'H' && $record[$i-2] == 'H' && $record[$i-1] == 'H') {
            break;
        }
    }
}

echo '<br><br>**7**<br><br>';
$kazys = 0;
$petras = 0;
$win_score = 222;
do {
    $kazys += rand(5, 25);
    $petras += rand(10, 20);
} while ($kazys < $win_score && $petras < $win_score);
echo "Petras: $petras - Kazys: $kazys. ";
echo 'Partiją laimėjo: ', ($kazys >= $win_score) ? '​Kazys' : 'Petras';

echo '<br><br>**8**<br><br>';
$height = 21;
$rhombus = "<div style = 'display: inline block; max-width: 100vw;margin-left:120px'>";
for ($i=1; $i<=ceil($height/2); $i++) {    
    $margin = $i*-10;
    $line = "<div style = 'display: inline block; width: 100%;line-height: 20px;font-size: 40px;margin-left:$margin'>";
    foreach (range(1, $i) as $value) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        $line .= "<span style='color:$color;'>*</span>";
    }
    $line .= "</div>";
    $rhombus .= $line;
}
for ($i=floor($height/2); $i>=1; $i--) {
    $margin = $i*-10;
    $line = "<div style = 'display: inline block; width: 100%;line-height: 20px;font-size: 40px;margin-left:$margin'>";
    foreach (range(1, $i) as $value) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        $line .= "<span style='color:$color;'>*</span>";
    }
    $line .= "</div>";
    $rhombus .= $line;
}
$rhombus .= "</div>";
echo $rhombus;

echo '<br><br>**9**<br><br>';
$times = 1000000;
$start = microtime(true);
for ($i=0; $i < $times; $i++) { 
    $c = "10 bezdzioniu suvalge 20 bananu.";
}
$end = microtime(true);
$time1 = $end - $start;
echo "Dvigubos: $time1";
echo '<br>';

$start = microtime(true);
for ($i=0; $i < $times; $i++) { 
    $c = '10 bezdzioniu suvalge 20 bananu.';
}
$end = microtime(true);
$time2 = $end - $start;
echo "Viengubos: $time2";

$diff = $time1 - $time2;
echo '<br>';
echo "Skirtumas: $diff";

echo '<br><br>**10**<br><br>';
$length = 85;
$nails = [];
$nail_count = 5;

foreach (range(1, $nail_count) as $value) {
    array_push($nails, $length);
}

$total = 0;
foreach ($nails as &$val) {
    $count = 0;
    do {
        $val -= rand(5, 20);
        //echo $val, ' ';
        $count++;
    } while ($val > 0); 
    echo '<br>', "Vinį įkalėm $count smūgiais (-ių)", '<br>';
    $total += $count;   
}
echo '<br>', "Vinis įkalėm viso $total smūgiais (-ių)", '<br>';
unset($val);

echo '<br>';
$nails = [];

foreach (range(1, $nail_count) as $value) {
    array_push($nails, $length);
}

$total = 0;
foreach ($nails as &$val) {
    $count = 0;
    do {
        if (rand(0, 1)) {
            $val -= rand(20, 30);
        }
        //echo $val, ' ';
        $count++;
    } while ($val > 0);
    echo '<br>', "Vinį įkalėm $count smūgiais (-ių)", '<br>';
    $total += $count;
}
echo '<br>', "Vinis įkalėm viso $total smūgiais (-ių)", '<br>';
unset($val);

echo '<br><br>**11**<br><br>';
$numbers_string = '';
$array_size = 50;
$max_value = 200;
for ($i=0; $i < $array_size ; $i++) { 
    $num = strval(rand(1, $max_value));
    if (strpos($numbers_string, $num)==false) {
        $numbers_string .= $num.' ';
    } else $i--;    
}
$numbers_string = trim($numbers_string);
echo $numbers_string;

$string_to_array = explode(' ', $numbers_string);
$new_array = [];

foreach ($string_to_array as $value) {
    $value = intval($value);
    $prime = true;
    if($value === 1) {
        $prime = false;
    }
    for ($i=2; $i <= $value/2; $i++){ 
        if ($value % $i === 0) {
            $prime = false; 
            break; 
        }
    }
    if ($prime === true) {
        array_push($new_array, $value);
    }
}
sort($new_array);
$new_string = implode($new_array, ' ');
echo '<br>';
echo $new_string;