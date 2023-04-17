<?php

// What is class and instance

class Person {
    public $name;
    public $surname;
    private $age;
    public static $counter = 0;

    // constructor function
    public function __construct(string $name, string $surname, int $age)
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

// Create Person class in Person.php

$person = New Person('Edwin', 'Cardenas', 27);

$person -> setAge(30);

echo '<pre>';
var_dump($person);
echo '</pre>';

echo $person->getAge();

echo '<br/>';

// Create instance of Person

$person2 = New Person('Ana', 'Torres', 25);

echo Person::$counter;

echo '<br/>';

echo Person::getCounter();