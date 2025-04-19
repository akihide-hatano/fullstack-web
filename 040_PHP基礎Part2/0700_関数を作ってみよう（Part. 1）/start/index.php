<?php
function sumWithoutReturn($nums) {
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum;
    echo "関数内で合計を出力: " . $hogehoge . "<br>"; // 関数内で出力はされる
}

$numbers = [1, 2, 3, 4];
$total = sumWithoutReturn($numbers); // $total には明確な返り値が代入されない
echo "関数外の合計: " . $total . "<br>"; // 期待する合計値は表示されない可能性が高い

$average = $total / count($numbers); // $total が意図した数値でないため、計算結果もおかしくなる
echo "平均: " . $average . "<br>";
?>