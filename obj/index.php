<?php

require __DIR__.'/Pinigine.php';
require __DIR__.'/Stikline.php';
require __DIR__.'/Grybas.php';

echo '<br><br>----1----<br>';
$pinigine1 = new Pinigine();

$pinigine1->ideti(1000);
$pinigine1->skaiciuoti();


echo '<br><br>----2----<br>';
$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1->ipilti(200);
echo $stikline1->ispilti();


$stikline2->ipilti($stikline1->ispilti());
echo $stikline2->ispilti();

$stikline3->ipilti($stikline2->ispilti());
echo $stikline3->ispilti();


echo '<br><br>----3----<br>';
$krepselis = new Krepsys;

while ($krepselis->svoris < 500) {
    $krepselis->grybauti();
}


echo '<br><br>----4----<br>';
$pinigine2 = new Pinigine();
$pinigine2->ideti(2)->ideti(1.74)->ideti(1);
$pinigine2->skaiciuoti();
echo $pinigine2->monetos();

$pinigine2->ideti(20)->ideti(3)->ideti(54);
$pinigine2->skaiciuoti();
echo $pinigine2->banknotai();