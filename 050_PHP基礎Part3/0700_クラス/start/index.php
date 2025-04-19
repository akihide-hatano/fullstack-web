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
        return $this;
    }

    function sayounara() {
        echo 'sayounara, ' . $this->name;
        return $this;
    }


}

$bob = new Person("bob",18);
$bob->hello();


$tim = new Person("tim",32);
echo $tim->hello(); 