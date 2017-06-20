<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab6.php" method="post">
      <input type="text"  name="input" value="Input">
      <input type="submit" name="p1" value="Part1">
      <input type="submit" name="p2" value="Part2">
      <input type="submit" name="p3" value="Part3">
      <input type="submit" name="p5" value="Part5">
    </form>

    <br>

    <form class="" action="IT306Lab6.php" method="post">
      <input type="text" name="char" value="Char a or c">
      <input type="text" name="input" value="Number">
      <input type="submit" name="p4" value="Part4">
    </form>
  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_POST['p1'])) {
  $number = $_POST['input'];
  echo part1($number);
  # code...
}
if (isset($_POST['p2'])) {
  $string = $_POST['input'];
  echo part2($string);
  # code...
}
if (isset($_POST['p3'])) {
  $number = $_POST['input'];
  echo part3($number);
  # code...
}
if (isset($_POST['p4'])) {
  $char = $_POST['char'];
  $number = $_POST['input'];
  echo part4($char, $number);
  # code...
}
if (isset($_POST['p5'])) {
  $number = $_POST['input'];
  echo part5($number);
  # code...
}

function part1 ($x){
  if (($x%2)==1) {
    return "Number is odd";
  }
  else {
    return "Number is even";
  }
}
function part2 ($x){
  $x = strtoupper($x);
  return ($x);
}
function part3 ($number){
  $sum = 0;
  do {
      $sum += $number % 10;
  }
  while ($number = (int) $number / 10);
  return $sum;
  # code...
}
function part4 ($char, $x){
  switch ($char) {
    case 'a':
      $a = $x*$x*M_PI;
      return $a;
      break;

    case 'c':
      $c = 2*$x*M_PI;
      return $c;
      break;

    default:
      $d = "You didn't enter appropriate char.";
      return $d;
      break;
  }
}
function part5 ($x){
  $rev = strrev($x);
  if ($rev == $x) {
    $r = "It is palindrome";
    # code...
  }
  else {
    $r = "It is not palindrome";
  }
  return $r;
}
 ?>
