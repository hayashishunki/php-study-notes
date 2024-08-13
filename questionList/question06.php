<?php
// // ①-1if
// $num1 = (int)trim(fgets(STDIN));
// if($num1 === 5) {
//   echo "ok\n";
// }

// // ①-2
// $num2 = (int)trim(fgets(STDIN));
// if($num2 === 5) {
//   echo "ok\n";
// } else {
//   echo "no good\n";
// }

// // ①-3
// $num3 = (int)trim(fgets(STDIN));
// if($num3 === 5) {
//   echo "ok\n";
// } else if($num3 >= 11 && $num3 < 15) {
//   echo "good\n";
// } else {
//   // 何もしない
// }


// // ①-4
// $num4 = (int)trim(fgets(STDIN));
// if($num4 === 5) {
//   echo "good\n";
// } else if($num4 >= 11 && $num4 < 15) {
//   echo "ok\n";
// } else if($num4 >= 15) {
//   echo "great\n";
// } else {
//   echo "no good\n";
// }


// ①-5
$num5 = rand(5, 15);
echo $num5."\n";

switch($num5) {
  case 5:
    echo "ok\n";
    break;
  case 10:
  case 15:
    echo "good\n";
    break;
  default:
    echo "no good\n";
    break;
}
