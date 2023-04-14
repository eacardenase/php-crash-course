<?php

// Create array

$fruits = [
    "Banana",
    "Apple",
    "Orange"
];

// Print the whole array

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1].'<br/>';

// Set element by index

$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

echo isset($fruits[2]); // true

// Append element

$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits).'<br/>';

// Add element at the end of the array

array_push($fruits, "Pineaple");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array

echo array_pop($fruits); // returns removed element
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits, "Watermelon");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

echo array_shift($fruits);

// Split the string into an array

$string = "Banana, Apple, Peach";
echo '<pre>';
var_dump(explode(", ", $string));
echo '</pre>';

// Combine array elements into string

echo implode("&", $fruits);

// Check if element exist in the array

echo '<pre>';
var_dump(in_array("Mango", $fruits));
echo '</pre>';


// Search element index in the array

echo '<pre>';
var_dump(array_search('Apple', $fruits)); // bool(false) if element not included in array
echo '</pre>';

// Merge two arrays

$vegetables = ["Potato", "Cucumber"];

echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

// Sorting of array (Reverse order also)

sort($fruits); // modifies original array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

rsort($fruits); // reverse sort
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays