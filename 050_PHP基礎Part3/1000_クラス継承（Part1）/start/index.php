<?php
/**
 * クラス継承
 */
class Person
{
    protected $name;
    public $age;
    public static $where = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$where;
        echo static::$where;
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

    function __construct($name,$age)
    {
        parent::__construct($name,$age);
    }

    function hello() {
        echo 'こんにちは, ' . $this->name;
        return $this;
    }

    function jusho(){
        echo "住所は" . static::$where . "です";
        return $this;
    }
}

$jiro = new Japanese('次郎', 18);
// $jiro->hello();
// Japanese::$where = "Osaka";
// $jiro->jusho();

// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();