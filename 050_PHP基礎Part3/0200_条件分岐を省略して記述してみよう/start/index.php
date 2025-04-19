<?php
/**
 * 条件分岐を省略して記述してみよう
 * 
 * - 三項演算子の使い方
 * - null合体演算子
 */

 $arry=[
    "key"=>30
 ];

// if(isset($arry["key"])){
//     $arry["key"] = $arry["key"] *10; 
// }else{
//     $arry["key"] = 3;
// }

// $arry["key"] = isset($arry["key"]) ? $arry["key"]*10 : 3;

$arry["key"] = $array["key"] ?? 1;
echo $arry["key"];
