<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
function generateRNum ($N){
  for ($i=0; $i < $N ; $i++) {
    $array[$i] = rand(1,1000);
  }
  return $array;
}
function selectionSort(array $array) {
    $length = count($array);
    for($i = 0; $i < $length; $i ++) {
        $min = $i;
        for($j = $i + 1; $j < $length; $j ++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $tmp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $tmp;
    }
    return $array;
}
function printArr(array $sortedarray, $N){
  for ($i=0; $i < $N ; $i++) {
    echo "$sortedarray[$i]<br>";
  }
  return true;
}
 ?>
