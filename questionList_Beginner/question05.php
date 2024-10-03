<?php
// ①配列
$array = [1, 2, 3];

foreach($array as $a) {
  echo "{$a}\n";
}

// ②多次元配列
// 以下の配列を利用
$array2 = array(
  array(1, 2),
  array(3, 4, 5)
);

foreach($array2 as $a2) {
  foreach($a2 as $a2_sub) {
    echo "{$a2_sub}\n";
  }
}
// echo $array2[0][0];
// echo $array2[0][1];
// echo $array2[1][0];
// echo $array2[1][1];
// echo $array2[1][2];

// ③-1連想配列
$array3 = array(
  "name" => "一郎",
  "number" => 1,
  "score" => 96.5
);

foreach($array3 as $a3) {
  echo "{$a3}\n";
}

// ③-2
$array4 = array(
  array(
      "name" => "一郎",
      "number" => 1,
      "score" => 96.5
  ),
  array(
      "name" => "花子",
      "number" => 2,
      "score" => 120.8
  )
);

foreach($array4 as $a4) {
  foreach($a4 as $a4_sub) {
    echo "{$a4_sub}\n";
  }
}
?>