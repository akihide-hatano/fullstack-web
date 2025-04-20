<?php
/**
 * 理解度チェック（クラス継承）
 * 
 * MyFileWriterを継承してログをファイルに書き込む
 * LogWriterクラスを作成してみてください。
 * 
 * LogWriterクラスではformatメソッドにより
 * 出力したい文字列に時間を設定できるものとします。
 * 
 * 例）
 * 2021/04/04 23:02:59 これはログです。
 * 
 * ヒント）
 * MyFileWriterのメソッドも一部変更する
 * 必要があります。
 */

class MyFirleWriter{

    public $filename;
    public $content = "";
    public $APPEND = FILE_APPEND;

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
    
    function commit( $flag = 0){
        file_put_contents( $this->filename, $this->content , $flag ?? 0); // デフォルト値を null 合体演算子で処理
        $this -> content = "";
        return $this;
    }

}

class LogWriter extends MyFirleWriter{
    public const APPEND = FILE_APPEND; // LogWriter クラスに APPEND 定数を定義

    function format($content)
    {
        $time_str = date('Y/m/d H:i:s');
        return sprintf('%s %s', $time_str, $content);

    }
        function append($content){
            $formattedContent = $this->format($content);
            $this -> content = $this -> content . $formattedContent;
            return $this;
    }
          // 親クラスの commit メソッドをオーバーライド
        function commit( $flag = 0){
        parent::commit($flag); // 親クラスの commit メソッドを呼び出す
    }

    }

/*
ヒント）
文字列のフォーマット
*/
$time_str = date('Y/m/d H:i:s');
sprintf('%s %s', $time_str, '文字列');


$info = new LogWriter('info.log');
$error = new LogWriter('error.log');

$info->append('これは通常ログです。')
    ->newline()
    ->commit(LogWriter::APPEND);

$error->append('これはエラーログです。')
    ->newline()
    ->commit(LogWriter::APPEND);
