<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab3.php" method="post">
      <input type="number" name="num" value="50">
      <input type="submit" name="Gün" value="Gün Bul">
      <input type="submit" name="2ve3" value="2ve3">
      <input type="submit" name="part3" value="Part3">
      <input type="submit" name="part4" value="Part4">
    </form>
  </body>
</html>

<?php
//http://sspproject.azurewebsites.net/IT306Lab3.php
//part1
if (isset($_POST['Gün'])) {
  $number = $_POST['num'];
  switch ($number) {
    case '1':
      echo "Pazartesi";
      break;
    case '2':
      echo "Salı";
      break;
    case '3':
      echo "Çarşamba";
      break;
    case '4':
      echo "Perşembe";
      break;
    case '5':
      echo "Cuma";
      break;
    case '6':
      echo "Cumartesi";
      break;
    case '7':
      echo "Pazar";
      break;
    default:
      echo "Please enter 1-7";
      break;
  }
}
//part2
if (isset($_POST['2ve3'])) {
  for ($i=1; $i<100 ; $i++) {
    if (($i%2)==0) {
      if (($i%3)==0) {
        echo "$i";
        echo "<br>";
      }
    }
    else {
      echo "";
    }
  }
}
//part3
if (isset($_POST['part3'])) {
    $number = $_POST['num'];
    $asum = $number*($number+1)/2;
    $bsum = pow(round((($number+1)/2), 0, PHP_ROUND_HALF_DOWN), 2);
    $x = round(($number/2), 0, PHP_ROUND_HALF_UP);
    $csum = $x*($x+1);
      echo "a) Sum of numbers that 1 to $number is $asum <br>";
      echo "a) Sum of odd numbers that 1 to $number is $bsum <br>";
      echo "a) Sum of even numbers that 1 to $number is $csum <br>";
    }

//part4
if (isset($_POST['part4'])) {
  $whour = $_POST['num'];
  $epayment =0;
  //40 saatten yüksekse
  if ($whour>40) {
    $ehour = $whour-40;
    $epayment = $ehour*15*1.25;
    $rpayment = 40*15;
    $salary = $epayment+$rpayment;
    $insurance = $salary*0.05;
    $tax = $salary*0.15;
    $netsalary = $salary*0.80;
    # code...
  }
  //düşükse
  else {
    $rpayment = $whour*15;
    $salary = $epayment+$rpayment;
    $insurance = $salary*0.05;
    $tax = $salary*0.15;
    $netsalary = $salary*0.80;
    # code...
  }
  echo "Total hours worked per week: $whour <br>";
  echo "Exceeding number of hours : $ehour <br>";
  echo "Gross income : $salary <br>";
  echo "Insurance cut : $insurance <br>";
  echo "Income tax : $tax <br>";
  echo "Net Income : $netsalary";
}
 ?>
