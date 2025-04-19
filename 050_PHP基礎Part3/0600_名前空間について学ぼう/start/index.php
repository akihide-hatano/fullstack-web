<?php
require_once './lib.php';
use function lib\with_tax;
use const lib\sub\TAX_RATE;

$price =  with_tax(1000, 0.08);
echo $price;

print TAX_RATE;

function myEcho($name){
    print "こんにちは{$name}さん";
    return $name;
}

$name = "hogehoge";
myEcho("あんときの");
