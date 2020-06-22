<?php

echo '**1**<br><br>';
$array_size = 30;
$minvalue = 5;
$maxvalue = 25;
$my_array = [];
for ($i=0; $i < $array_size ; $i++) { 
    array_push($my_array, rand($minvalue, $maxvalue));        
}
echo '<pre>';
print_r($my_array);

echo '<br><br>**2**<br><br>';
$count = 0;
foreach ($my_array as $value) {
    if ($value > 10) $count++;
}
echo 'a) Reikšmių, didesnių už 10: ', $count, '<br>';

echo 'b) Didžiausia reikšmė: ', max($my_array), '<br>';

echo 'c) Reikšmių suma: ', array_sum($my_array), '<br>';

$new_array = $my_array;
foreach ($new_array as $key => $value) {
    $new_array[$key] = $value - $key;
}
echo 'd)', '<br>';
print_r($new_array);

for ($i=0; $i < 10 ; $i++) { 
    array_push($my_array, rand($minvalue, $maxvalue));
}
echo 'e)', '<br>';
print_r($my_array);

echo 'f)', '<br>';
$odd_key_array = print_r(array_filter($my_array, function($k) {
    return $k % 2 == 1;
}, ARRAY_FILTER_USE_KEY
));

$even_key_array = (array_filter($my_array, function($k) {
    return $k % 2 == 0;
}, ARRAY_FILTER_USE_KEY
));
print_r($even_key_array);

foreach ($even_key_array as &$value) {
    if ($value > 15) {
        $value = 0;
    }
}
unset($value);
echo 'g)', '<br>';
print_r($even_key_array);

echo 'h)', '<br>';
foreach ($my_array as $key => $value) {
    if($value>10) {
        echo "Pirmas indeksas, kurio elemento reikšmė didesnė už 10: $key";
        break;
    }
}
echo '<br>';

echo 'i)', '<br>';
foreach ($my_array as $key => $value) {
    if ($key % 2 === 0) {
        unset($my_array[$key]);
    }
}
print_r($my_array);

echo '<br><br>**3**<br><br>';
$chars = range('A', 'D');
$array_size = 200;
$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
for ($i=0; $i < $array_size; $i++) { 
    $chars_array[$i] = $chars[rand(0, count($chars)-1)];
    if ($chars_array[$i] === 'A') {
        $countA++;
    } elseif ($chars_array[$i] === 'B') {
        $countB++;
    } elseif ($chars_array[$i] === 'C') {
        $countC++;
    } else $countD++;
}
print_r($chars_array);
echo 'A: ', $countA, ' B: ', $countB, ' C: ', $countC, ' D: ', $countD;

echo '<br><br>**4**<br><br>';
sort($chars_array);
print_r($chars_array);

echo '<br><br>**5**<br><br>';
$chars_array = [];
for ($i=0; $i < $array_size; $i++) { 
    $chars_array1[$i] = $chars[rand(0, count($chars)-1)];
    $chars_array2[$i] = $chars[rand(0, count($chars)-1)];
    $chars_array3[$i] = $chars[rand(0, count($chars)-1)];
    $chars_array[$i] = $chars_array1[$i].$chars_array2[$i].$chars_array3[$i];
}
//print_r($chars_array);
echo $unique_count = count(array_unique($chars_array));

echo '<br><br>**6**<br><br>';
$array_size = 100;
$random_value_array = [];
$random_value_array1 = [];
// do{
//     $value = rand(100, 999);
//     if(in_array($value, $random_value_array)===false) {
//         array_push($random_value_array, $value);
//     }
// } while (count($random_value_array) < $array_size);
// print_r($random_value_array);

for ($i=0; $i < $array_size; $i++) { 
    if(in_array($value = rand(100, 999), $random_value_array)===false) {
        $random_value_array[$i] = $value;
    } else $i--;
    if(in_array($value = rand(100, 999), $random_value_array1)===false) {
        $random_value_array1[$i] = $value;
    } else $i--;    
}
print_r($random_value_array);
print_r($random_value_array1);

echo '<br><br>**7**<br><br>';
$combined_array = [];
foreach ($random_value_array as $int) {
    if(in_array($int, $random_value_array1)===false) {
        array_push($combined_array, $int);
    }
}
print_r($combined_array);

echo '<br><br>**8**<br><br>';
$combined_array = [];
foreach ($random_value_array as $int) {
    if(in_array($int, $random_value_array1)) {
        array_push($combined_array, $int);
    }
}
print_r($combined_array);

echo '<br><br>**9**<br><br>';
$key_value_array = array_combine($random_value_array, $random_value_array1);
print_r($key_value_array);

echo '<br><br>**10**<br><br>';
for ($i=0; $i < 10; $i++) { 
    if ($i<2) {
        $array[$i] = rand(5, 25);
    } else {
        $array[$i] = $array[$i-2] + $array[$i-1];
    }
}
print_r($array);


echo '<br><br>**11**<br><br>';
$array = range(1, 101);
for ($i=0; $i < count($array); $i++) { 
    $value = rand(0, 300);
    if(in_array($value, $array)) $i--;
    else $array[$i] = $value;
}
print_r($array);

sort($array);

$temp1_array = [];
$temp2_array = [];
for ($i=0; $i < count($array); $i++) { 
    $value = $array[$i];
    $i % 2 === 0 ? array_push($temp1_array, $value) : array_push($temp2_array, $value);  
}

arsort($temp2_array);
// print_r($temp1_array);
// print_r($temp2_array);

$result = array_merge($temp1_array, $temp2_array);
print_r($result);

$max = array_pop($temp1_array);
echo 'Pirmos dalies suma: ', array_sum($temp1_array), '<br>';
echo 'Antros dalies suma: ', array_sum($temp2_array), '<br>';
echo 'Skirtumas: ', $diff = abs(array_sum($temp1_array) - array_sum($temp2_array)), '<br>';

$index = 0;
while ($diff >= 30) {
    $temp_val = $temp2_array[$index];
    $temp2_array[$index] = $temp1_array[$index];
    $temp1_array[$index] = $temp_val;
    $diff = abs(array_sum($temp1_array) - array_sum($temp2_array));
    $index++;
}
array_push($temp1_array, $max);
$result = array_merge($temp1_array, $temp2_array);
print_r($result);
echo 'Skirtumas: ', $diff, '<br>';