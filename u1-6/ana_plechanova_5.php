<?php

echo '<pre>';
echo '**1**<br><br>';

for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        $my_array[$i][$j] = rand(5, 25);
    }
}

print_r($my_array);

echo '<br><br>**2**<br><br>';
$count = 0;
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 5; $j++) { 
        if ($my_array[$i][$j] > 10) {
            $count++;
        }
    }
}
echo 'a) Reikšmių, didesnių už 10: ', $count, '<br>';

for ($i=0; $i < 10; $i++) { 
    $temp_array[$i] = max($my_array[$i]);
}
print_r($temp_array);
echo 'b) Didžiausia reikšmė: ', max($temp_array), '<br>';

echo 'c) <br>';
$count = 0;
for ($index=0; $index < 5; $index++) {
    $count = 0;
    foreach ($my_array as $key => $val) {
        $count += $my_array[$key][$index];
    }
    echo "Index $index reikšmių suma: $count", '<br>';
}
foreach ($my_array as $key => $value) {
    for ($i=0; $i <= 7-count($my_array[$key]) ; $i++) { 
        array_push($my_array[$key], rand(5, 25));
    }
}
echo 'd) <br>';
print_r($my_array);

echo 'e) <br>';
foreach ($my_array as $key => $value) { 
    $new_array[$key] = array_sum($my_array[$key]);    
}
print_r($new_array);

echo '<br><br>**3**<br><br>';
$char_array = range(1, 10);
$letters = range('A', 'Z');
foreach ($char_array as &$value) {
    $value = range(1, rand(2, 20));
    foreach ($value as &$char) {
        $char = $letters[rand(0, count($letters)-1)];
    }
}
unset($value);
unset($char);

foreach ($char_array as $key => $value) {
    sort($char_array[$key]);
}

print_r($char_array);

echo '<br><br>**4**<br><br>';
foreach ($char_array as $key => $value) {
    sort($char_array);
}
print_r($char_array);

echo '<br><br>**5**<br><br>';
$data_size = 30;
$user_ids = [];
for ($i=0; $i < $data_size; $i++) { 
    $user_id = rand(0, 1000000);
    if(in_array($user_id, $user_ids)) $i--;
    else $user_ids[$i] = $user_id;
}
// print_r($user_ids);

$row_numbers = [];
for ($i=0; $i < $data_size; $i++) { 
    $row_number = rand(0, 100);
    if(in_array($row_number, $row_numbers)) $i--;
    else $row_numbers[$i] = $row_number;
}
// print_r($row_numbers);

$users = range(1, $data_size);
for ($i=0; $i < $data_size; $i++) { 
    $users[$i] = ['user_id' => $user_ids[$i], 'place_in_row' => $row_numbers[$i]];    
}

print_r($users);

echo '<br><br>**6**<br><br>';

asort($users);
print_r($users);

function sort_by_key ($key) {
    return function ($a, $b) use ($key) {       
        return strnatcmp($b[$key], $a[$key]);
    };
}

usort($users, sort_by_key('place_in_row'));
print_r($users);

echo '<br><br>**7**<br><br>';
$letters = range('a', 'z');
foreach ($users as $key => $value) {
    $users[$key]['name'] = '';
    $users[$key]['surname'] = '';
    for ($i=0; $i < rand(5, 15); $i++) { 
        $users[$key]['name'] .= $letters[rand(0, count($letters)-1)];
    }
    for ($i=0; $i < rand(5, 15); $i++) { 
        $users[$key]['surname'] .= $letters[rand(0, count($letters)-1)];
    }
}
print_r($users);

echo '<br><br>**8**<br><br>';
$numbers_array = range(1, 10);

foreach ($numbers_array as &$value) {
    $random_number = rand(0, 5);
    //echo "$random_number ";
    if ($random_number > 0) {
        $value = range(1, $random_number);
        foreach ($value as &$number) {
            $number = rand(0, 10);
        }
    } 
    else {
        $value = rand(0, 10);
    }    
}
print_r($numbers_array);
unset($value);
unset($number);

echo '<br><br>**9**<br><br>';
$sum_values = 0;
foreach ($numbers_array as $key => $value) {
    if (is_array($numbers_array[$key])) {
        $sum_values += array_sum($numbers_array[$key]);
    }
    else {
        $sum_values += $value;
    }
}
echo '<br>';
echo $sum_values;
echo '<br>';

usort($numbers_array, 
    function($a, $b){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);
print_r($numbers_array);

echo '<br><br>**10**<br><br>';
$symbols = ['#', '%', '+', '*', '@', '%'];
$chars = range('a', 'f');
$color_array = range(1, 10);

foreach ($color_array as $key => &$value) {
    
    $value = range(1, 10);
    foreach ($value as &$symbol) {
        $color = '#';
        for ($i=0; $i < 6; $i++) { 
            $color .= rand(0, 1) ? rand(0, 9) : $chars[rand(0, count($chars)-1)];
        }
        $symbol = ['value' => $symbols[rand(0, count($symbols)-1)], 'color' => $color];
    }
}
unset($value);
//print_r($color_array);


$count = 0;
foreach ($color_array as $key => $value) {
    foreach ($value as $symbol) {
        echo "<span style='color:".$symbol['color'].";padding: 6px; text-align:center; font-size: 16px;'>"
            .$symbol['value'].
            "</span>";
        $count++;
        if ($count % 10 === 0) echo '<br>';
    }
}

echo '<br><br>**11**<br><br>';
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';

$sum = array_sum($c);
$count = count($c);
$sk1 = ($sum - $b * $count) / ($a - $b);
$sk2 = $count - $sk1;
echo "<h3>Skaičius $a yra pakartotas $sk1 kartų, o skaičius $b - $sk2 kartų.</h3>";