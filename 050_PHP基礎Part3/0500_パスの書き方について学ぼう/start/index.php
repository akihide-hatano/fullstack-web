<?php
/**
 * パスの書き方について学ぼう
 * 
 * - マジック定数 __DIR__, __FILE__を使ってみよう
 * - dirnameの使い方を学ぼう
 * - 相対パスと絶対パス
 * - \と/は使い分けよう
 * - "と'は使い分けよう
 */

// require_once "../start/file1.php";
require_once "sub/file2.php";

require __DIR__ . "/file1.php";

// echo __DIR__;
 echo __FILE__;

 
 