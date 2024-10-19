<?php

$kokugoTest = array(
  "taro" => 65, // 太郎くんの点数は65点
  "hanako" => 95, // 花子さんの点数は95点
  "ichiro" => 33 // 一郎くんの点数は33点
);

// 合計
function goukei($tensu): int
{
  $ret = 0;
  foreach ($tensu as $key => $val) {
    $ret += $tensu[$key];
  }

  return $ret;
}

// 平均
function heikin($tensu) : int {
  $ret = $tensu / 3;
  return $ret;
}

// 最高値
function saidai($tensu) : int {
  $saidai = 0;
  $max = 0;
  foreach($tensu as $key => $val) {

    if($max == 0) {
      $max = $tensu[$key];
    }

    if($tensu[$key] > $max) {
      $max = $tensu[$key];
    }
  }
  $saidai = $max;

  return $saidai;
}


// $total = goukei($kokugoTest);
// $average = heikin($total);
$saidai = saidai($kokugoTest);
echo "最高得点: "  . $saidai . "点";
