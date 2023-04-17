<?php

class Person
{
    public string $name;
    public string $surname;
    protected ?int $age;
    public static int $counter = 0;

    // constructor function
    public function __construct(string $name, string $surname, int $age = null)
    {
        // this is for the instance
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;

        // self is for the class itself
        self::$counter++;
    }

    // Using setter and getter
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public static function getCounter(): int
    {
        return self::$counter;
    }
}