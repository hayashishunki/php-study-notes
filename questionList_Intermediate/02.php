<?php

// ①②③応用課題-配列の実用的操作-01
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
