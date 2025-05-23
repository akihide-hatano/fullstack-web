<?php
/**
 * 理解度チェック（クラス）
 * 
 * ファイル書き込みを行うためのクラスを定義してみましょう。
 * 
 * ヒント）PHP_EOL: 改行するための特殊な定数です。
 */

 class MyFileWriter{

    public $filename;
    public $content = "";
    public $APPEND = FILE_APPEND;

    function __construct( $filename)
    {
        $this -> filename = $filename;
    }

    function append($content){
        $this -> content = $this ->content . $content;
        return $this;
    }

    function newline(){
        $this -> content =  $this -> content .PHP_EOL;
        return $this;
    }

    function commit(int $flag = 0){
        file_put_contents($this->filename, $this->content, $flag);
        return $this;
    }

 }

// $content = 'Hello, Bob.'; // append
// $content .= PHP_EOL; // newline
// $content .= 'Bye, '; // append
// $content .= 'Bob.'; // append
// $content .= PHP_EOL; // newline

// // commit
// file_put_contents('sample.txt', $content);
// $content = '';

// $content = 'Good night, Bob.'; // append

// // commit
// file_put_contents('sample.txt', $content, FILE_APPEND);
// $content = '';


$file = new MyFileWriter('sample.txt');
$file->append('Hello, Bob.')
    ->newline()
    ->append('Bye, ')
    ->append('Bob.')
    ->newline()
    ->commit()
    ->append('Good night, Bob.')
    ->commit($file->APPEND);

