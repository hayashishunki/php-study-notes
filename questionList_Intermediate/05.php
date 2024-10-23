<?php
// 日付、時間を取得
echo date("Y-m-d H:i:s", time()), "\n";

// 現在時間を取得
echo time();

// ①確認課題-日時関数
echo time() . "\n";

// ②確認課題-日時関数
echo date("H:i:s, jS F Y", strtotime("2020-02-20 20:20:20")) . "\n";