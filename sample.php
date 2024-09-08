<?php

echo "高さを入力してください\n";
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
