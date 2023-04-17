<?php

// Function which prints "Hello I am Zura"

function hello(): void
{
    echo "Hello, I'm Edwin".'<br/>';
}

//hello();

// Function with argument

function sayHello(string $name): string
{
    return "Hi, my name is $name.".'<br/>';
}

//echo sayHello("Edwin");

// Create sum of two functions

//function sum(int $a, int $b): int
//{
//    return  $a + $b;
//}
//
//echo sum(2, 5);

// Create function to sum all numbers using ...$nums

//function sum(int ...$nums): int
//{
//    $result = 0;
//
//    foreach ($nums as $num) {
//        $result += $num;
//    }
//
//    return  $result;
//}
//
//echo sum(1, 2, 3, 4, 5, 6);

// Arrow functions

function sum(int ...$nums): int
{
    return array_reduce($nums, fn($total, $number) => $total + $number, 0);
}

echo sum(1, 2, 3, 4, 5, 6);
