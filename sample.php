<?php

$kokugoTest = array(
  "taro" => 65,
  "hanako" => 95,
  "ichiro" => 33
);


function goukei($tensu): int
{
  $ret = 0;
  foreach ($tensu as $key => $val) {
    $ret += $tensu[$key];
  }

  return $ret;
}


$total = goukei($kokugoTest);
echo "合計点数: " . $total . "点";
