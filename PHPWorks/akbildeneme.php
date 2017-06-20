<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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

    <?php
    require_once('dbConnect.php');
    if (isset($_POST['sil'])) {
      $sqlDel = "delete FROM akbildeneme";
      $conn->exec($sqlDel);
      echo "Temizlendi";
    }
    else {
      echo "sil değil</br>";
    }

    $ilk = "1.15";
    $akt1 = "0.50";
    $akt2 = "0.45";
    $aktd = "0.40";
    $metr = "1.20";
    $date = date("Y-m-d H:i:s");

    echo "21.29";

    if (isset($_POST['ilk'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','İlk Basım','$ilk')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }
    if (isset($_POST['akt1'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','Aktarma 1','$akt1')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }
    if (isset($_POST['akt2'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','Aktarma 2','$akt2')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }
    if (isset($_POST['akt3'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','Aktarma 3','$aktd')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }
    if (isset($_POST['akt4'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','Aktarma 4','$aktd')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }
    if (isset($_POST['akt5'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','Aktarma 5','$aktd')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }
    if (isset($_POST['metr'])) {
      try {
        $sql_insert = "INSERT INTO akbildeneme (Tarih, Tür, Basım, Tutar)
                   VALUES ('$date','Öğrenci','Metrobüs','$metr')";
                   $conn->exec($sql_insert);
      } catch (Exception $e) {
        echo "Başarısız";
      }
    }




     ?>
  </body>
</html>
