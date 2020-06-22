<?php

echo '**1**<br><br>';
$name = 'Audrey';
$surname = 'Hepburn';
echo strlen($name)<=strlen($surname) ? $name : $surname;

echo '<br><br>**2**<br><br>';
$name = 'Audrey';
$surname = 'Hepburn';
echo strtoupper($name), ' ', strtolower($surname);

echo '<br><br>**3**<br><br>';
$name = 'Audrey';
$surname = 'Hepburn';
echo $initials = $name[0].$surname[0];

echo '<br><br>**4**<br><br>';
$name = 'Audrey';
$surname = 'Hepburn';
echo $new_name = substr($name, -3).substr($surname, -3);

echo '<br><br>**5**<br><br>';
$movie = 'An American in Paris';
//echo $star = str_replace('a', '*', strtolower($movie));
echo $star = str_ireplace('a', '*', $movie);

echo '<br><br>**6**<br><br>';
$movie = 'An American in Paris';
echo 'Count of a\'s: ' . $count = substr_count(strtolower($movie), 'a');

echo '<br><br>**7**<br><br>';
$movie = 'An American in Paris';
$movie1 = 'Breakfast at Tiffany\'s';
$movie2 = '2001: A Space Odyssey';
$movie3 = 'It\'s a Wonderful Life';

$vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
echo $movie = str_ireplace($vowels, '', $movie);
echo '<br>';
echo $movie1 = str_ireplace($vowels, '', $movie1);
echo '<br>';
echo $movie2 = str_ireplace($vowels, '', $movie2);
echo '<br>';
echo $movie3 = str_ireplace($vowels, '', $movie3);

echo '<br><br>**8**<br><br>';
echo $string = 'Star Wars: Episode '.str_repeat(' ', rand(0, 5)). rand(1, 9) . ' - A New Hope';
$string = str_replace(' ', '', $string);
$position = strpos($string, '-');
echo '<br>';
echo $string[$position-1];

echo '<br><br>**9**<br><br>';
$movie_name = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo $movie_name;
echo '<br>';
$words = explode(' ', $movie_name);
$count = 0;
for ($i=0; $i < count($words); $i++) { 
    if (strlen($words[$i]) <= 5) {
        $count++;
    }
}
echo $count;

$movie_name1 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
echo '<br>';
echo $movie_name1;
echo '<br>';
$words = explode(' ', str_replace(',', '', $movie_name1));
$count = 0;
for ($i=0; $i < count($words); $i++) { 
    if (mb_strlen($words[$i]) <= 5) {
        $count++;
    }
}
echo $count;

echo '<br><br>**10**<br><br>';
$aphabet = 'abcdefghijklmnopqrstuvwxyz';
$letter_count = 3;
$random_string = '';
for ($i=0; $i < $letter_count; $i++) { 
    $random_string .= $aphabet[rand(0, 25)];
}
echo $random_string;

echo '<br><br>**11**<br><br>';
$movie_name = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$movie_name1 = str_replace(',', '','Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale');
$words_string = $movie_name.' '.$movie_name1;
$words = explode(' ', $words_string);
$word_count = 10;
$random_string = '';
for ($i=0; $i < $word_count; $i++) {
    $word = $words[rand(0, count($words)-1)];    
    if ( strpos($random_string, $word) === false) {
        $random_string .= $word . ' ';
    } else $i--;
}
echo trim($random_string);