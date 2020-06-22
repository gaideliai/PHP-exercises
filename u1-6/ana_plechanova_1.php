<?php

echo '**1**<br><br>';
$vardas = 'Vardenis';
$pavarde = 'Pavardenis';
$gimimo_metai = 2000;
$einamieji_metai = 2020;
$amzius = $einamieji_metai - $gimimo_metai;
echo "„Aš esu $vardas $pavarde. Man yra $amzius metai(ų).“";

echo '<br><br>**2**<br><br>';
$pirmas = rand(0, 4);
$antras = rand(0, 4);
if ($pirmas > $antras && $antras !== 0) echo $rezultatas = round($pirmas/$antras, 2);
elseif ($antras > $pirmas && $pirmas !== 0) echo $rezultatas = round($antras/$pirmas, 2);
elseif ($antras === $pirmas) echo 'Reikšmės lygios';
else echo 'Dalyba iš nulio negalima';
echo '<br>';
echo "Pirmas: $pirmas", '<br>', "Antras: $antras";

echo '<br><br>**3**<br><br>';
$int1 = rand(0, 25);
$int2 = rand(0, 25);
$int3 = rand(0, 25);

if ($int1<$int2 && $int1<$int3 && $int2<$int3) echo $int2;
elseif ($int1<$int2 && $int1<$int3 && $int2>$int3) echo $int3;
elseif ($int2<$int1 && $int2<$int3 && $int1>$int3) echo $int3;
elseif ($int2<$int1 && $int2<$int3 && $int1<$int3) echo $int1;
elseif ($int3<$int1 && $int3<$int2 && $int1>$int2) echo $int2;
elseif ($int3<$int1 && $int3<$int2 && $int1<$int2) echo $int1;
else echo 'Bent dvi reikšmės yra lygios';
echo '<br>', $int1, ' ', $int2, ' ', $int3;

echo '<br><br>**4**<br><br>';
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
echo $a, ' ', $b, ' ', $c, '<br>';
if ($a>=$b && $a>=$c) {
    if ($b+$c > $a) {
        echo "Galima sudaryti trikampį, kurio kraštinių ilgiai: $a, $b, $c";
    }
    else echo 'Trikampio sudaryti negalima';
}
elseif ($b>=$a && $b>=$c) {
    if ($a+$c > $b) {
        echo "Galima sudaryti trikampį, kurio kraštinių ilgiai: $a, $b, $c";
    }
    else echo 'Trikampio sudaryti negalima';
}
elseif ($c>=$a && $c>=$b) {
    if ($a+$b > $c) {
        echo "Galima sudaryti trikampį, kurio kraštinių ilgiai: $a, $b, $c";
    }
    else echo 'Trikampio sudaryti negalima';
}

echo '<br><br>**5**<br><br>';
$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);
$nuliu_suma = 0;
$vienetu_suma = 0;
$dvejetu_suma = 0;

if ($a===0) $nuliu_suma++;
elseif ($a===1) $vienetu_suma++;
else $dvejetu_suma++;

if ($b===0) $nuliu_suma++;
elseif ($b===1) $vienetu_suma++;
else $dvejetu_suma++;

if ($c===0) $nuliu_suma++;
elseif ($c===1) $vienetu_suma++;
else $dvejetu_suma++;

if ($d===0) $nuliu_suma++;
elseif ($d===1) $vienetu_suma++;
else $dvejetu_suma++;

echo $a, ' ', $b, ' ', $c, ' ', $d, '<br>';
echo "Nulių suma: $nuliu_suma", '<br>';
echo "Vienetų suma: $vienetu_suma", '<br>';
echo "Dvejetų suma: $dvejetu_suma", '<br>';

echo '<br><br>**6**<br><br>';
$Atsitiktinis_skaicius = rand(1, 6);
echo '<h'.$Atsitiktinis_skaicius.'>'.$Atsitiktinis_skaicius.'</h'.$Atsitiktinis_skaicius.'>';

echo '<br><br>**7**<br><br>';
$int1 = rand(-10, 10);
$int2 = rand(-10, 10);
$int3 = rand(-10, 10);
if ($int1 < 0) echo "<p style='color: green;'>$int1</p>";
elseif ($int1 > 0) echo "<p style='color: blue;'>$int1</p>";
else echo "<p style='color: red;'>$int1</p>";
if ($int2 < 0) echo "<p style='color: green;'>$int2</p>";
elseif ($int2 > 0) echo "<p style='color: blue;'>$int2</p>";
else echo "<p style='color: red;'>$int2</p>";
if ($int3 < 0) echo "<p style='color: green;'>$int3</p>";
elseif ($int3 > 0) echo "<p style='color: blue;'>$int3</p>";
else echo "<p style='color: red;'>$int3</p>";

echo '<br><br>**8**<br><br>';
$zvakiu_kiekis = rand(5, 3000);
$vieneto_kaina = 1;
$saskaita = $vieneto_kaina*$zvakiu_kiekis;
echo "Kiekis: $zvakiu_kiekis; ";
if ($saskaita < 1000)
    echo 'Kaina: ' . number_format($saskaita, 2, ',', ' ') . ' EUR';
elseif ($saskaita>=1000 && $saskaita<2000) 
    echo 'Kaina: ' . number_format($saskaita*0.97, 2, ',', ' ') . ' EUR';
else echo 'Kaina: ' . number_format($saskaita*0.96, 2, ',', ' ') . ' EUR';

echo '<br><br>**9**<br><br>';
$int1 = rand(0, 100);
$int2 = rand(0, 100);
$int3 = rand(0, 100);
var_dump($int1, $int2, $int3);
echo '<br>';
echo $vidurkis = round(($int1 + $int2 + $int3)/3);
$suma = 0;
$kiekis = 0;
if($int1>=10 && $int1<=90) {
    $kiekis++;
    $suma += $int1;
}
if($int2>=10 && $int2<=90) {
    $kiekis++;
    $suma += $int2;
}
if($int3>=10 && $int3<=90) {
    $kiekis++;
    $suma += $int3;
}
echo '<br>';
if ($kiekis>0) echo $kitas_vidurkis = round($suma / $kiekis);
else echo 'Visi skaičiai didesni už 90 arba mažesni už 10.';



echo '<br><br>**10**<br><br>';
$hours = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);
echo ($hours>9) ? $hours.':' : '0'.$hours.':';
echo ($min>9) ? $min.':' : '0'.$min.':';
echo ($sec>9) ? $sec : '0'.$sec;

$number = rand(0, 300);
echo '<br>';
echo "Number between 0 and 300: $number";
echo '<br>';
//pridedam sekundes
if ($sec + ($number % 60) <= 59) {
    $sec += $number % 60;
}
else {
    $sec = ($sec + $number % 60) % 60;
    if ($min + 1 <= 59) {
        $min += 1;
    } 
    else {
        $min = 0;
        if ($hours + 1 <= 23) {
            $hours += 1;
        } 
        else {
            $hours = 0;            
        }
    }
}
//pridedam minutes
if ($min + floor($number / 60) <= 59) {
    $min += floor($number / 60);
}
else {  
    $min = $min + floor($number / 60) - 60;  
    if ($hours + 1 <= 23) {
        $hours += 1;
    } 
    else {
        $hours = 0;            
    }
}
echo ($hours>9) ? $hours.':' : '0'.$hours.':';
echo ($min>9) ? $min.':' : '0'.$min.':';
echo ($sec>9) ? $sec : '0'.$sec;