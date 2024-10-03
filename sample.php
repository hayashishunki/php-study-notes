<?php

// 最大公約数の計算
function calc(int $a, int $b) {
  while(1) {
    $num = $a % $b;
    if($num !== 0) {
      $a = $b;
      $b = $num;
    } else {
      return $b;
    }
  }
}

echo "1つ目の数値を入力してください\n";
$ans1;
$ans1 = trim(fgets(STDIN));
echo "2つ目の数値を入力してください\n";
$ans2;
$ans2 = trim(fgets(STDIN));

echo $ans1 . "と" . $ans2 . "の最大公約数は" . calc($ans1, $ans2) . "です";
