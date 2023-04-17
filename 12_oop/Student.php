<?php

require_once 'Person.php';
class Student extends Person
{
    public string $studentId;

    public function __construct(string $name, string $surname, string $studentId, int $age)
    {
        parent::__construct($name, $surname, $age);
        $this->studentId = $studentId;
    }
}