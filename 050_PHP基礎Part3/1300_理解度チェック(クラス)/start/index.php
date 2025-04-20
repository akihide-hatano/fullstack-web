<?php
/**
 * 理解度チェック（クラス）
 * 
 * ファイル書き込みを行うためのクラスを定義してみましょう。
 * 
 * ヒント）PHP_EOL: 改行するための特殊な定数です。
 */

class MyFileWriter{
    private $filename;
    private $content = "";
    public const APPEND = FILE_APPEND; // public const で定数として定義

    function __construct($filename)
    {
        $this -> filename = $filename;
    }

    function append($content){
        $this -> content = $this -> content . $content;
        return $this;
    }

    function newline(){
        $this -> content = $this -> content . PHP_EOL;
        return $this;
    }

    function commit( $flag = 0) {
        file_put_contents( $this->filename, $this->content , $flag ?? 0); // デフォルト値を null 合体演算子で処理
        $this -> content = "";
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
    ->commit(MyFileWriter::APPEND);

