<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab 8</title>
  </head>
  <body>
    <form class="" action="IT306Lab8.php" method="post">
      <input type="number" name="sayi" value="">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
<?php
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

if (isset($_POST["submit"])) {
  $N = $_POST["sayi"];
  for ($i=0; $i < $N ; $i++) {
    $array[$i] = rand(1,1000);
  }
  $sortedarray = selectionSort($array);
  for ($i=0; $i < $N ; $i++) {
    echo "$sortedarray[$i]<br>";
  }
}
 ?>
