<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab13.php" method="post">
      <input type="number" name="inp" value="10">
      <input type="submit" name="p1" value="Work1">
      <input type="submit" name="p2" value="Work2">
      <input type="submit" name="p3" value="Work3">
    </form>
  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require 'IT306Lab13f.php';

if (isset($_POST['p1'])) {
  $number = $_POST['inp'];
  $arr = array();
  for ($i=0; $i < $number; $i++) {
    $arr[$i] = rand(1,10);
    echo $arr[$i] . '<br>';
  }
}

if (isset($_POST['p2'])) {
  $number = $_POST['inp'];
  $arr = array();
  for ($i=0; $i < $number; $i++) {
    $arr[$i] = rand(1,10);
  }
  print_r(bubblesort($arr));
}

if (isset($_POST['p3'])) {
$myfile = file("file.txt");
foreach ($myfile as $line) $words[] = str_word_count($line);
echo 'a: line=' . count($words) . '<br>';
echo 'c: words'. array_sum($words);
}
 ?>
