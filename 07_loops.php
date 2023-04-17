<?php

// while

//while (condition) {
//}

// Loop with $counter

//$counter = 0;
//
//while ($counter <= 10) {
//    echo $counter.'<br/>';
//
////    if ($counter === 5) {
////        break;
////    }
//
//    $counter++;
//}

// do - while

//do {
//    echo 'this will run once';
//} while (0 > 1);

// for

//for ($i = 0; $i < 10; $i++) {
//    echo $i.'<br/>';
//}

// foreach

//$fruits = ["Banana", "Apple", "Orange"];
//
//foreach ($fruits as $i => $fruit) {
//    echo "$i ".$fruit.'<br/>';
//}

// Iterate Over associative array.

$person = [
    "name" => "Edwin",
    "surname" => "Cardenas",
    "age" => 27,
    "hobbies" => [
        "Read fantasy books",
        "Play Monster Hunter"
    ]
];

foreach ($person as $key => $value) {
    $valueToPrint = is_array($value) ? implode(', ', $value) : $value;

    echo "Key: $key, Value => $valueToPrint <br/>";
}