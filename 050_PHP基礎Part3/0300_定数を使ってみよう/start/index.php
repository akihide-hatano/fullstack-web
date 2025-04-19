<?php

function with_tax($base_price,$tax_rate){
    $sum_price = $base_price + ( $base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}

$price = with_tax(1000,0.1);
echo $price;