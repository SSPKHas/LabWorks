<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
  </head>
  <body>
    <form class="" action="akbildeneme.php" method="post">
      <input type="submit" name="ilk" value="İlk Basım"></br>
      <input type="submit" name="akt1" value="Aktarma1"></br>
      <input type="submit" name="akt2" value="Aktarma2"></br>
      <input type="submit" name="akt3" value="Aktarma3"></br>
      <input type="submit" name="akt4" value="Aktarma4"></br>
      <input type="submit" name="akt5" value="Aktarma5"></br>
      <input type="submit" name="Metr" value="Metrobüs"></br>
      <input type="submit" name="sil" value="Verileri Sil">

    </form>
  </body>
</html>

<?php
require_once('dbConnect.php');
    $date = date("Y-m-d H:i:s");

if (isset($_POST['ilk'])) {
  try {
    $tür = "Öğrenci";
    $basim = "İlk Basım";
    $tutar = $conn->query("SELECT öğrenci FROM akbiltarife where Basim='ilk'");
    akbilkayit($date, $tür, $basim, $tutar);
  } catch (Exception $e) {
    echo "Başarısız";
  }
}




  function akbilkayit($date, $tür, $basim, $tutar){
    try {
      $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                 VALUES ('$date','$tür','$basim','$tutar')";
                 $conn->exec($sql_insert);
    } catch (Exception $e) {
      echo "Başarısız";
    }
  }?>
