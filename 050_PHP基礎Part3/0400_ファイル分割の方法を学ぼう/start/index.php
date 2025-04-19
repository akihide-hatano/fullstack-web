<?php
/**
 * ファイルの分割方法について
 * 
 * -require,includeの違い
 * -require,require_onceの使い方
 */

    $arry =["num" => 0];

    require_once("./file1.php");
    require_once("./file2.php");

    echo $arry["num"]; 
    fn1();

?>