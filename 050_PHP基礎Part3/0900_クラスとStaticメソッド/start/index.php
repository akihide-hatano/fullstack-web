<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereToLive = "tokyo";

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        static::bye();
        return $this;
    }

    static function bye() {
        echo 'bye,';
}
}

$bob = new Person('Bob', 18);
$bob->hello();
$bob->bye();


echo Person::$whereToLive;
// Person::bye();


// $tim = new Person('Tim', 32);
// $tim->hello();