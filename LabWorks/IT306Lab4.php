<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="IT306Lab4.php" method="post">
      <input type="number" name="num" value="5">
      <input type="submit" name="p1" value="Part1">
      <input type="submit" name="p2" value="Part2"><br>
    </form><br>
    <form class="" action="IT306Lab4.php" method="post">
      <input type="number" name="num1" value="5">
      <input type="text" name="op" value="+">
      <input type="number" name="num2" value="5">
      <input type="submit" name="p3" value="Part3"><br>
    </form>
  </body>
</html>

<?php
//part1
if (isset($_POST['p1'])) {
  $number = $_POST['num'];
  switch ($number+1) {
    case '1':
      echo "Pazartesi<br>";
    case '2':
      echo "Salı";
    case '3':
      echo "Çarşamba<br>";
    case '4':
      echo "Perşembe<br>";
    case '5':
      echo "Cuma<br>";
    case '6':
      echo "Cumartesi<br>";
    case '7':
      echo "Pazar<br>";
      break;
    default:
      echo "";
  }
}
//part2
if (isset($_POST['p2'])) {
  $number = $_POST['num'];
  $area = round(2*M_PI*$number, 2);
  $circumference = round(M_PI*$number*$number, 2);
  echo "Circumreferance is: $area, Area is $circumference";
}
//part3
if (isset($_POST['p3'])) {
  $number1 = $_POST['num1'];
  $number2 = $_POST['num2'];
  $op = $_POST['op'];

  switch ($op) {
    case '+':
      $result = $number1+$number2;
      echo "$result";
      break;
    case '-':
      $result = $number1-$number2;
      echo "$result";
      break;
    case '*':
      $result = $number1*$number2;
      echo "$result";
      break;
    case '/':
      $result = $number1/$number2;
      if ($number2 == 0) {
        $result = "Not defined. Please select the denominator any number other than zero.";
      }
      echo "$result";
      break;
    default:
      echo "$op";
      break;
  }
}

 ?>
