<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
    Let us convert degrees in Fahrenheit To Celcius</p>
    <form class="" action="F2C.php" method="post">
      <input type="text" name="degree" value="">
      <input type="submit" name="" value="Gönder">
    </form>
  </body>
</html>

<?php
$f = $_POST['degree'];
if(!empty($f)) {
  $c = ($f-32)/1.80;
  echo round($c, 2);
}else {
  echo 'olmadı';
}

 ?>
