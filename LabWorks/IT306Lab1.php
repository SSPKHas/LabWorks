<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <form method="post" action="IT306Lab1.php" >
          F  <input type="text" name="first" id="first"/></br>
          S <input type="text" name="second" id="s"/></br>
          T <input type="text" name="third" id="t"/></br>
          Name <input type="text" name="name" id="name"/></br>
          Surname <input type="text" name="surname" id="name"/></br>

          <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    $a=$_POST['first'];
    $b=$_POST['second'];
    $c=$_POST['third'];
    $avg=($a+$b+$c)/3.0;
    echo "Average is $avg<br>";
    ?>

    <?php
    $a=$_POST['first'];
    $b=$_POST['second'];
    $c=$_POST['third'];
    $max=max($a,$b,$c);
    echo "Maximum is $max<br>";
     ?>

     <?php
     $name=$_POST['name'];
     $surname=$_POST['surname'];
     echo "Welcome $name $surname";
     ?>



  </body>
</html>
