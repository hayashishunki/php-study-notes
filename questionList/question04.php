<?php
// 四則演算
// ①
echo $add = 1 + 1, "\n";
echo $sub = 5 - 2, "\n";
echo $mul = 5 * 3, "\n";
echo $div = 4 / 2, "\n";

echo "\n";

// ②
echo 5 % 2, "\n";
echo 23 % 5, "\n";
echo 1234 % 10, "\n";

echo "\n";

// ③ 文字列連結
$str1 = "a";
$str1 .= "bcde";
echo $str1, "\n";

echo "\n";

// ④ 比較演算子
$num1 = 10;
$num2 = 10;
$d1 = 5.5;
$bool1 = $num1 === $num2;
$bool2 = $num1 !== $num2;
$bool3 = $num1 < $d1;
$bool4 = $num1 <= $num2;
$bool5 = $d1 > $num1;
$bool6 = $num2 >= $d1;
var_dump($bool1, $bool2, $bool3, $bool4, $bool5, $bool6);

echo "\n";

// ⑤論理演算子
$num3 = 3;
$num4 = 5;
$num5 = 15;

$seki1 = ($num3 == 3 && $num4 == 3);
$wa1 = ($num3 == 3 || $num4 == 3);
$seki2 = ($num5 % $num3 == 0 && $num5 % $num4 == 0);
$hitei1 = (!($num3 == 3 && $num4 == 5));
$sekiWa = ($num3 == 5 || ($num4 == 3 && $num5 == 15));

var_dump($seki1, $wa1, $seki2, $hitei1, $sekiWa);
?>
