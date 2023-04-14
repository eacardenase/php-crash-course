<?php

// Create simple string
$name = 'Edwin';
$string = 'Hello I am '.$name.'. I am 27.'; // . is used for concatenation
$string2 = "Hello I am $name. I am 27."; // evaluate $name as a variable within the string

echo $string.'<br/>';
echo  $string2.'<br/>';

echo '</br>';

// String concatenation

echo 'Hello'.' World'.' and PHP'.'</br>';

echo '</br>';

// String functions

$string = "    Hello World    ";

echo "1 - ".strlen($string).'</br>';
echo "2 - ".trim($string).'</br>';
echo "3 - ".ltrim($string).'</br>';
echo "4 - ".rtrim($string).'</br>';
echo "5 - ".str_word_count($string).'</br>';
echo "6 - ".strrev($string).'</br>';
echo "7 - ".strtoupper($string).'</br>';
echo "8 - ".strtolower($string).'</br>';
echo "9 - ".ucfirst("hello").'</br>';
echo "10 - ".lcfirst("HELLO").'</br>';
echo "11 - ".ucwords("hello world").'</br>';
echo "12 - ".strpos($string,'world').'</br>'; // search for word
echo "13 - ".stripos($string,'world').'</br>'; // search form word ignoring case
echo "14 - ".substr($string, 8).'</br>';
echo "15 - ".str_replace("World", "PHP", $string).'</br>';
echo "16 - ".str_ireplace("world", "PHP", $string).'</br>'; // ignore case

echo '</br>';

// Multiline text and line breaks

$longText = "
    Hello, my name is Edwin
    I am 27,
    I love my gf
";

echo $longText.'</br>';
echo nl2br($longText).'</br>'; // respect line breaks in a string

echo '</br>';

// Multiline text and reserve html tags

$longText = "
    Hello, my name is <b>Edwin</b>
    I am <b>27</b>,
    I love my gf
";

echo '1 - '.$longText.'</br>'; // treat strings tags as real tags
echo '2 - '.nl2br($longText).'</br>';
echo '3 - '.htmlentities($longText).'</br>'; // preserv html tags as strings
echo '4 - '.nl2br(htmlentities($longText)).'</br>';
echo '5 - '.html_entity_decode("Hello, my name is &lt;b&gt;Edwin&lt;/b&gt;").'</br>';

echo '</br>';

// https://www.php.net/manual/en/ref.strings.php