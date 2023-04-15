<?php

$age = 0;
$salary = 300000;

// Sample if

if ($age === 20) {
    echo "1".'<br/>';
}

echo '<br/>';

// Without circle braces

if ($age === 20) echo "1".'<br/>';

echo '<br/>';

// Sample if-else

if ($age > 20) {
    echo '1'.'<br/>';
} else {
    echo  '2'.'<br/>';
}

echo '<br/>';

// Difference between == and ===
// == value
// === value and type

if ($age == 20) {
    echo '1'.'<br/>';
}

if ($age == '20') {
    echo '2'.'<br/>';
}

if ($age === '20') {
    echo '3'.'<br/>';
} else {
    echo '4'.'<br/>';
}

echo '<br/>';

// if AND

if ($age == 20 && $salary === 300000) {
    echo 'Do something'.'<br/>';
}

echo '<br/>';

// if OR

if ($age > 20 || $salary === 300000) {
    echo 'Do something else'.'<br/>';
}

echo '<br/>';

// Ternary if

echo $age < 22 ? 'Young' : 'Old';

echo '<br/>';

// Short ternary

$myAge = $age ?: 27;

echo '<pre>';
var_dump($myAge); // 0 is a falsy value
echo '</pre>';

// Null coalescing operator

//$myName = isset($name) ? $name : 'Alexander';
$myName = $name ?? 'Alexander';

echo '<pre>';
var_dump($myName);
echo '</pre>';

// switch

$userRole = 'editor';

switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}