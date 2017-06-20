<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab5.php" method="post">
      <input type="number" name="num" value="Money">
      <input type="number" name="months" value="Months">
      <input type="number" name="year" value="years">

      <input type="submit" name="p3" value="Part3">
      <input type="submit" name="p1" value="Part1"><br><br>
    </form>
    <form action="IT306Lab5.php" method="post">
        Find solution for ax^2 + bx + c<br>
        a: <input type="text" name="a"><br>
        b: <input type="text" name="b"><br>
        c: <input type="text" name="c"><br>
        <input type="submit" name="p2" value="Find x!">
    </form>

  </body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_POST['p1'])) {
  //a
  $x = 10;
  $y= ++$x;
  $z = $y++/$x;
  echo "x = $x<br>";
  echo "y = $y and z = $z<br>";
  //b
  $x=10;
  $y = ($x /2==0)? "X is even" : "X is odd";
  echo "The content of y is : $y";
  //c
  $i = 0;
  $count=0;
  do{
    if ($i%3 == 0){
      ++$count;
      echo "The $count th one is : $i <br>";
    }
    $i++;
  } while($i <100);
  //for
  for ($i=0; $i < 100; $i++) {
    if ($i%3 == 0){
      ++$count;
      echo "The $count th one is : $i <br>";
    }
  }
  $count=0;
  while ($a < 100) {
    if ($a%3 == 0){
      ++$count;
      echo "The $count th one is : $a <br>";
    }
  }
}
if (isset($_POST['p2'])) {

  if(isset($_POST['a'])){ $a = $_POST['a']; }
  if(isset($_POST['b'])){ $b = $_POST['b']; }
  if(isset($_POST['c'])){ $c = $_POST['c']; }

  $d = $b*$b - 4*$a*$c;
  echo $d;
  echo "There is one solution";

  if($d < 0) {
      echo "The equation has no real solutions!";
  } elseif($d == 0) {
      echo "x = ";
      echo (-$b / 2*$a);

  } else  {
      echo "x1 = ";
      echo ((-$b + sqrt($d)) / (2*$a));
      echo "<br>";
      echo "x2 = ";
      echo ((-$b - sqrt($d)) / (2*$a));
      echo "There are 2 solution";
      //end of work2
    }
  }
if (isset($_POST['p3'])) {
  $amount = $_POST['num'];
  $months = $_POST['months'];
  $year = $_POST['year'];

  if ($amount>250000) {
    $rate = 0.06;
    interest($amount, $months, $rate, $year);
  }
  elseif ($amount>100000) {
    $rate = 0.055;
    interest($amount, $months, $rate, $year);
  }
  elseif ($amount>50000) {
    $rate = 0.05;
    interest($amount, $months, $rate, $year);
  }
  elseif ($amount>10000) {
    $rate = 0.045;
    interest($amount, $months, $rate, $year);
  }
  else {
    $rate = 0.043;
    interest($amount, $months, $rate, $year);
  }
}

function interest($amount, $months, $rate, $year){
  //p*(1+r/n)^n
  $newamount = $amount*pow(1+$rate/$months, $months*$year);
  echo "$newamount";
}
 ?>
