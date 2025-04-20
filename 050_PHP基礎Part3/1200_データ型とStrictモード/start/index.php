<?php declare(strict_types=1);
/**
 * データ型とStrictモード
 */
function add1 (int $val):int {
    return $val + 1;
}
$result = add1(1);


require_once "./person.php";

use animal\Person;
use animal\Japanese;

function callHelloMethod(Person $person){
    $person -> hello();
}

$taka = new Japanese("たか",32);
callHelloMethod($taka);
$taka->jusho();

