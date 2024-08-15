<?php
// foreach文①
$array1 = array();
$array1[0] = 1;
$array1[1] = 2;
$array1[2] = 3;

foreach($array1 as $key => $value) {
  echo $value . '<br>';
}


// foreach文②
$array2 = array();
$array2["a"] = 1;
$array2["b"] = 12;
$array2["c"] = 123;

foreach($array2 as $key => $value) {
  echo "添字: ". $key . " ,要素: " . $value .'<br>';
}

?>
