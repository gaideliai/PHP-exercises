<?php

echo '**1**<br><br>';

function heading ($text) {
    return "<h1>$text</h1>";
}

echo '<br><br>**2**<br><br>';

function headingLevel($text, $level) {
    return "<h$level>$text</h$level>";
}

echo '<br><br>**3**<br><br>';
echo $string = md5(time());
echo '<br>';

$letters = ['a', 'b', 'c', 'd', 'e', 'f'];
$string = str_replace($letters, ' ', $string);
$array = explode(' ', $string);
foreach ($array as $key => $value) {
    echo heading($value);
}

echo '<br><br>**4**<br><br>';

function divisorsCount($arg) {
    if (!is_int($arg)) {
        return 'Argumentas turi būti sveikas skaičius.';
    }
    $count = 0;
    for ($i=2; $i <= $arg/2; $i++){ 
        if ($arg % $i === 0) {
            $count++;
        }
    }
    return $count;
}

//echo divisorsCount(10);

echo '<br><br>**5**<br><br>';
$array = range(1, 100);
foreach ($array as $key => $value) {
    $array[$key] = rand(33, 77);
}
echo '<pre>';
//print_r($array);

usort($array, function($a, $b){
    return  divisorsCount($a) <=> divisorsCount($b);
});

print_r($array);

echo '<br><br>**6**<br><br>';

$array = range(1, 100);
foreach ($array as $key => $value) {
    $array[$key] = rand(333, 777);
}
//print_r($array);

$prime_array = [];
foreach ($array as $key => $value) {
    if(divisorsCount($value) === 0) {
        $prime_array[] = $value;
    }
}
print_r($prime_array);

echo '<br><br>**7**<br><br>';

function generateArray($repeat) {
    $arr = [];
    $array_size = rand(10, 20);
    for ($i=0; $i < $array_size; $i++) {
        if ($i === $array_size-1 && $repeat > 0) {            
            array_push($arr, generateArray($repeat-1));
        } elseif ($i === $array_size-1 && $repeat === 0 ) {
            array_push($arr, 0);
        } else {
            array_push($arr, rand(0, 10));
        }            
    }
    return $arr;
}

$repeat_count = rand(10, 30);
print_r($my_array = generateArray($repeat_count));

echo '<br><br>**8**<br><br>';

function sumValues($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) $sum += sumValues($value);
        else  $sum += $value;
    }
    return $sum;
}

echo sumValues($my_array);

echo '<br><br>**9**<br><br>';

function isPrime($arr) {
    $count = 0;
    for ($i=1; $i <= 3; $i++) { 
        $arg = $arr[count($arr)-$i];
        //echo 'arg', $arg, '<br>';
        if ($arg === 1) {
            $count++;
        } 
        elseif ($arg > 1) {
            for ($j=2; $j <= $arg/2; $j++){ 
                if ($arg % $j === 0) {
                    $count++;
                    break;
                }
            }
        }
    }   
    return $count > 0;
}

$array = range(1, 3);
foreach ($array as $key => $value) {
    $array[$key] = rand(1, 33);
}
//print_r($array);

while(isPrime($array)) {
    array_push($array, rand(1, 33));
}

print_r($array);

echo '<br><br>**10**<br><br>';
function primeNumber($arg) {
    $prime = true;
    if($arg === 1) {
        $prime = false;
    }
    for ($i=2; $i <= $arg/2; $i++){ 
        if ($arg % $i === 0) {
            $prime = false; 
            break; 
        }
    }
    return $prime;
}

function primeAverage($arr) {
    $sum = 0;
    $count = 0;
    foreach ($arr as $key => $value) {
        foreach ($value as $number) {
            if (primeNumber($number)) {
                $sum += $number;
                $count++;    
            }
        }
    }
    $avg = $sum/$count;
    return $avg < 70;
}

function findMin($arr) {
    $min = $arr[0][0];
    foreach ($arr as $key => &$value) {
        foreach ($value as $key => &$number) {
            if ($number < $min) {
                $min = $number;
            }
        }
    }
    return $min;
}

$array = range(1, 10);
foreach ($array as $key => &$value) {
    $value = range(1, 10);
    foreach ($value as $key => &$number) {
        $number = rand(1, 100);
    }
}
unset($value);
unset($number);
//print_r($array);

while (primeAverage($array)) {
    $min_found = false;
    foreach ($array as $key => &$value) {
        foreach ($value as $key => &$number) {
            if ($number === findMin($array)) {
                $number += 3;
                $min_found = true;
                break;
            }
        }
        if($min_found) {
            break;
        }
    }
    // unset($value);
    // unset($number);
}
//print_r($array);