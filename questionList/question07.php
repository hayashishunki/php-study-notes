<?php
// // 応用課題-遊園地のチケット券売機を作ろう①
// $otonaKakaku = 7530;
// $kodomoKakaku = 4860;
// $otonaNizu = fgets(STDIN);
// $kodomoNinzu = fgets(STDIN);
// $goukei = $otonaKakaku * $otonaNizu + $kodomoKakaku * $kodomoNinzu;

// echo "合計金額は{$goukei}円です。";

// // 応用課題-遊園地のチケット券売機を作ろう②
// $otonaKakaku = 7530;
// $kodomoKakaku = 4860;
// $otonaNizu = trim(fgets(STDIN));
// $kodomoNinzu = trim(fgets(STDIN));
// $goukei = $otonaKakaku * $otonaNizu + $kodomoKakaku * $kodomoNinzu;

// if($goukei >= 10000) {
//   echo "合計金額は" . $goukei - 500 . "円です。";
// } else {
//   echo "合計金額は{$goukei}円です。";
// }


// 応用課題-遊園地のチケット券売機を作ろう③
$otonaKakaku = 7530;
$kodomoKakaku = 4860;
$otonaNizu = trim(fgets(STDIN));
$kodomoNinzu = trim(fgets(STDIN));
$goukei = $otonaKakaku * $otonaNizu + $kodomoKakaku * $kodomoNinzu;

if(($otonaNizu + $kodomoNinzu) >= 5) {
  $goukei = floor($goukei - ($goukei * 0.05));
} else if($goukei >= 10000) {
  $goukei -= 500;
} else {
  // 何もしない
}

echo "合計金額は{$goukei}円です。";


// 応用課題-遊園地のチケット券売機を作ろう④
$otonaKakaku = 7530;
$kodomoKakaku = 4860;
$otonaNizu = 1;
$kodomoNinzu = 0;
$goukei = $otonaKakaku * $otonaNizu + $kodomoKakaku * $kodomoNinzu;


if($kodomoNinzu >= 3) {
  $goukei -= $kodomoKakaku * (int)($kodomoNinzu / 3); 
} else if(($otonaNizu + $kodomoNinzu) >= 5) {
  $goukei = floor($goukei - ($goukei * 0.05));
} else if($goukei >= 10000) {
  $goukei -= 500;
} else {
  // 何もしない
}

echo "合計金額は{$goukei}円です。";

?>
