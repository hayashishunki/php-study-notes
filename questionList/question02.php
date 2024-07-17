<?php
// ①変数の初期化
$str1 = "abc";
$num1 = 500;
$d1 = 3.14;
$flg1 = true;

// ②値の出力
$str = "あいうえお";
$num = -100;
$d = 22.4;
echo "{$str}\n{$num}\n{$d}";

echo "\n";
// ③変数値の画面出力
echo "{$str1}\n{$num1}";

echo "\n";
// 変数情報の出力
$msg = "good morning";
$num2 = 1234;
$root = 1.41421356;
$flg2 = false;
var_dump($msg, $num2, $root, $flg2);
?>