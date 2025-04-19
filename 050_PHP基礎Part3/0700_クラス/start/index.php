<?php 
class Person
{
    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
    }
}

$bob = new Person("bob",18);
echo $bob->hello();