<?php

// What is class and instance

require_once 'Person.php';
require_once 'Student.php';

$student = new Student('Marlon', 'Carvajalino');

echo '<pre>';
var_dump($student);
echo '</pre>';