<?php
$users = array();
$users[0] = array();
$users[1] = array();

$users[0]["name"] = "太郎";
$users[0]["age"] = 10;
$users[0]["address"] = "東京都新宿区〇〇町〇-〇-〇-〇〇〇号室";
$users[0]["phone"] = "03-××××-××××";

$users[1]["name"] = "二郎";
$users[1]["age"] = 8;
$users[1]["address"] = "東京都新宿区〇〇町〇-〇-〇-〇〇〇号室";
$users[1]["phone"] = "03-××××-××××";

echo "名前: " . $users[0]["name"] . "\n";
echo "年齢: " . $users[0]["age"] . "歳\n";
echo "住所: " . $users[0]["address"] . "\n";
echo "電話: " . $users[0]["phone"] . "\n";

echo "\n";

echo "名前: " . $users[1]["name"] . "\n";
echo "年齢: " . $users[1]["age"] . "歳\n";
echo "住所: " . $users[1]["address"] . "\n";
echo "電話: " . $users[1]["phone"] . "\n";

// 出力結果)
// 名前: 太郎
// 年齢: 10歳
// 住所: 東京都新宿区〇〇町〇-〇-〇-〇〇〇号室
// 電話: 03-xxxx-xxxx
//
// 名前: 二郎
// 年齢: 8歳
// 住所: 東京都新宿区〇〇町〇-〇-〇-〇〇〇号室
// 電話: 03-xxxx-xxxx