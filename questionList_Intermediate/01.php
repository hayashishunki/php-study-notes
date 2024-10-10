<?php

// ①関数を作成しよう
function sayGoodMorning() {
  echo "Good Morning!";
}

sayGoodMorning();

// ②関数を作成しよう
function sankaku(int $teihen, int $takasa) {
  echo $teihen * $takasa / 2;
}

sankaku(5, 4);

// ③関数を作成しよう
function sankaku(int $teihen = 10, int $takasa = 20) {
  echo "底辺が". $teihen . "、高さが" . $takasa . "、三角形の面積は" . $teihen * $takasa / 2 . "です。\n";
}

sankaku(15, 10);
sankaku(15);
sankaku();


// ④関数を作成しよう
function shikaku(int $tate, int $yoko) {
  if($tate <= 0 || $yoko <= 0) {
    echo "計算できません\n";
    return;
  } 

  echo $tate * $yoko . "\n";
}

// ⑤関数を作成しよう
function toggle(bool $flg) {
  if($flg === true) {
    $flg = false;
  } else {
    $flg = true;
  }
  // !$flgを返しても処理できる
  return $flg;
}

$tmp = true;

var_dump(toggle($tmp));


// ①応用問題
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



// ②応用問題
// 最小公倍数の計算
function calc2(int $a, int $b) {
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

$tmp = calc2($ans1, $ans2);
$ret = $ans1 * $ans2 / $tmp;

echo $ans1 . "と" . $ans2 . "の最小公倍数は" . $ret . "です";
