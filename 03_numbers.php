<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo $a + $b.'<br/>';
echo $a + $b + $c.'<br/>';
echo $a + $b * $c.'<br/>';
echo ($a + $b) * $c.'<br/>';
echo $a - $b.'<br/>';
echo $a * $b.'<br/>';
echo $a / $b.'<br/>';
echo $a % $b.'<br/>';

echo '<br/>';

// Assignment with math operators

//$a = $a + $b;
//$a += $b; echo $a.'<br/>';
//$a -= $b; echo $a.'<br/>';
//$a *= $b; echo $a.'<br/>';
//$a /= $b; echo $a.'<br/>';
//$a %= $b; echo $a.'<br/>';

// Increment operator

echo $a++.'<br/>'; // prints 5
echo ++$a.'<br/>'; // prints 7

echo '<br/>';

// Decrement operator

echo $a--.'<br/>'; // prints 7
echo --$a.'<br/>'; // prints 5

echo '<br/>';

// Number checking functions

echo is_float(1.24).'<br/>'; // true is converted into 1
echo is_double(1.24).'<br/>'; // 1
echo is_int(5).'<br/>';
echo is_integer(5).'<br/>';
echo is_numeric("3.45").'<br/>'; // true
echo is_numeric("3g.45").'<br/>'; // false

echo '<br/>';

// Conversion

$strNumber = '12.34';
//$number = (float)$strNumber;
$number = floatval($strNumber);

echo var_dump($number).'<br/>';

echo '<br/>';

// Number functions

echo "abs(-15) = ".abs(-15).'<br/>';
echo "pow(2, 3) = ".pow(2, 3).'<br/>';
echo "sqrt(16) = ".sqrt(16).'<br/>';
echo "max(2, 3) = ".max(2, 3).'<br/>';
echo "min(2, 3) = ".min(2, 3).'<br/>';
echo "round(2.4) = ".round(2.4).'<br/>';
echo  "round(2.6) = ".round(2.6).'<br/>';
echo "floor(2.6) = ".floor(2.6).'<br/>';
echo "ceil(2.4) = ".ceil(2.4).'<br/>';

echo '<br/>';

// Formatting numbers

$number = 123456789.12345;

echo number_format($number, 2, ",", " ");

// https://www.php.net/manual/en/ref.math.php
