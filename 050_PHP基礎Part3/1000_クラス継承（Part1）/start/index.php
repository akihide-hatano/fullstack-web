<?php
/**
 * クラス継承
 */
class Person
{
    protected $name;
    public $age;
    public const WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

class Japanese extends Person{
    public static $where = "Tokyo";

    function hello() {
        echo 'こんにちは, ' . $this->name;
        return $this;
    }
}

$jiro = new Japanese('次郎', 18);
$jiro->hello();
$address = Japanese::$where;
echo "<div>住所は{$address}です</div>";


// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();