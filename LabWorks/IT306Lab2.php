<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="">
    <?php
    echo "Work1 <br>";
    echo '<form class="" action="IT306Lab2.php" method="post">
          <input type="number" name="sayi" value="">
          <input type="submit" name="work1" value="Gönder"><br>
        </form>';
    if (isset($_POST['work1'])) {
      $number = $_POST['sayi'];
      $sum = 0;
      $n = 0;
      for ($i=0; $i <=strlen($number) ; $i++) {
        $n=$number%10;
        $sum += $n;
        $number = $number/10;
      }
      echo "Sum of digits: $sum</br></br>";
    }
    //End of Work1
     ?>
     <html>
    <body>
        <form action="IT306Lab2.php" method="post">
            Find solution for ax^2 + bx + c<br>
            a: <input type="text" name="a"><br>
            b: <input type="text" name="b"><br>
            c: <input type="text" name="c"><br>
            <input type="submit" value="Find x!">
        </form>
    </body>
</html>
     <?php
     //Start of work2
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
} ?>

    <?php
    //Start of Work3
    echo "Work3<br>";
    $first=9;
    $second=1;
    for ($i=0; $i < 9 ; $i++) {
      echo "$first + $second = ", $first+$second, "<br>";
      $first--;
      $second++;
      //end of work3
    }"<br>" ?>
    <?php
    //Start of work4
    if (isset($_POST['work4'])) {
      $num1 = $_POST['gcd1'];
      $num2 = $_POST['gcd2'];
      $t = 0;
      while ($num2 != 0){
      $t = $num1 % $num2;
      $num1 = $num2;
      $num2 = $t;
    }
    echo "GCD is $num1";
  }
  //End of work4?>
    <p>Work4</p>
    <form class="" action="IT306Lab2.php" method="post">
      <input type="number" name="gcd1" value="">
      <input type="number" name="gcd2" value="">
      <input type="submit" name="work4" value="Gönder"><br><br>
    </form>
  </body>
</html>
