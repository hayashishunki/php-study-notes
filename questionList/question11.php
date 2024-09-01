<?php
// ①計算機作成
$result = 0;
echo "数字を入力してください\n";

while(1) {
  $num = trim(fgets(STDIN));
  $result += $num;
  echo "合計: " . $result . "\n";
}


// ②計算機作成
$result = 0;
while(1) {
  echo "入力してください([+] 足し算 [=] 計算結果 )\n";
  $operator = trim(fgets(STDIN));

  if($operator == "+") {
    echo "数字を入力してください\n";
    $num = trim(fgets(STDIN));
    $result += $num;
    echo "合計: " . $result . "\n";
  } else {
    echo "計算結果は " . $result . " です。\n";
    break;
  }
}

// ③計算機作成
$result = 0;
$flag = false;
while(1) {
  echo "入力してください([+] 足し算 [-] 引き算 [=] 計算結果 )\n";
  $operator = trim(fgets(STDIN));

  if($operator == "+" || $operator == "-" || $operator == "=") {
    $flag = true;
  } else {
    echo "再入力\n";
    continue;
  }

  if($flag == true) {
    if($operator == "+") {
      echo "数字を入力してください(マイナス値不可)\n";
      $num = trim(fgets(STDIN));
      if(is_numeric($num) && $num) {

      }
      $result += $num;
      echo "合計: " . $result . "\n";
    } else if($operator == "-") {
      echo "数字を入力してください(マイナス値不可)\n";
      $num = trim(fgets(STDIN));
      $result -= $num;
      echo "合計: " . $result . "\n";
    } else {
      echo "計算結果は " . $result . " です。\n";
      break;
    }
  }

  $flag = false;
}