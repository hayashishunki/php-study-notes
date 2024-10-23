<?php

// ■ビルトイン関数例
$text = "ABACADAE";
$replace = str_replace("A", "Z", $text, $count);
echo $replace; // ZBZCZDZE
echo $count; // 4

echo "\n";

$text2 = "ABCDE";
var_dump(str_contains($text2, "A")); // true
var_dump(str_contains($text2, "F")); // false


$text3 = "ABCDE";
var_dump(strpos($text3, "A")); // 0
var_dump(strpos($text3, "B")); // 1
var_dump(strpos($text3, "C")); // 2
var_dump(strpos($text3, "D")); // 3
var_dump(strpos($text3, "E")); // 4
var_dump(strpos($text3, "F")); // false

// 大文字小文字の区別も行います
var_dump(strpos($text3, "a")); // false


$text4 = "ABCDEFGHIJKLMN";
$subString = substr($text4, 2, 3);
echo $subString . "\n"; // CDE


// ①ビルトイン関数文字列操作応用
$str = "abcdz";

$ret = str_replace("z", "e", $str);
echo $ret;