<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="liste.php" method="post">
      <select class="" name="liste">
        <option value="Akbil1">1</option>
        <option value="Akbil2">2</option>
      </select>
      <input type="submit" name="submit" value="">
    </form>

    <?php
    $secilen = $_POST['liste'];
    echo "$secilen"; ?>

  </body>
</html>
