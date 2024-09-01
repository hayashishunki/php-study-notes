<?php

$result = 0;
while(1) {
  echo "入力してください([+] 足し算 [-] 引き算 [=] 計算結果 )\n";
  $operator = trim(fgets(STDIN));

  if($operator == "+") {
    echo "数字を入力してください\n";
    $num = trim(fgets(STDIN));
    $result += $num;
    echo "合計: " . $result . "\n";
  } else if($operator == "-") {
    $num = trim(fgets(STDIN));
    $result -= $num;
    echo "合計: " . $result . "\n";
  } else {
    echo "計算結果は " . $result . " です。\n";
    break;
  }
}
