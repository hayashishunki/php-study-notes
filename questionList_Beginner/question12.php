<?php

// ①図形を作ろう
for($i = 0;$i < 5;$i++) {
  echo "0";
}

// ②図形を作ろう
for($i = 0;$i < 3;$i++) {
  for($j = 0;$j < 5;$j++) {
    echo "0";
  }
  if($i != 2) {
    echo "\n";
  }
}

// ③図形を作ろう
for($i = 0;$i < 3;$i++) {
  $count = $i + 3;
  for($j = 0;$j < $count;$j++) {
    echo "0";
  }
  if($i != 2) {
    echo "\n";
  }
}

// ④図形を作ろう
echo "高さを入力してください。\n";
$height = trim(fgets(STDIN));
$space = $height;
$outputCount = 1;

for($i = 0;$i < $height;$i++) {
  $space--;
  for($n = 0;$n < $space;$n++) {
    echo " ";
  }

  for($j = 0;$j < $outputCount;$j++) {
    echo "0";
  }

  if($i != ($height - 1)) {
    $outputCount += 2;
    echo "\n";
  }
}

// ⑤図形を作ろう
echo "高さを入力してください\n";
$height = trim(fgets(STDIN));
$space = $height;
$outputCount = 1;
$reversalFlag = false;

for($i = 0;$i < $height;$i++) {
  if($reversalFlag == false) {
    $space--;
  } else {
    $space++;
  }
  for($n = 0;$n < $space;$n++) {
    echo " ";
  }

  for($j = 0;$j < $outputCount;$j++) {
    echo "0";
  }
  
  if($outputCount >= $height) {
    $reversalFlag = true;
  }

  if($i != ($height - 1) && $reversalFlag == false) {
    $outputCount += 2;
    echo "\n";
  } else {
    $outputCount -= 2;
    echo "\n";   
  }
}
