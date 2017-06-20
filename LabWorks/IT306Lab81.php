<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 8-1</title>
  </head>
  <body>
    <form class="" action="IT306Lab81.php" method="post">
      <input type="number" name="sayi" value="">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
if (isset($_POST["submit"])) {
  $N = $_POST["sayi"];
  require("IT306Lab82.php");
  $array = generateRNum($N);
  $sortedarray = selectionSort($array);
  printArr($sortedarray, $N);
} ?>
