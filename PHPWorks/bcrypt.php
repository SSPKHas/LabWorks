<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="bcrypt.php" method="post">
      <input type="text" name="usernamer" value="r">
      <input type="text" name="passwordr" value="r">
      <input type="submit" name="rs" value="Register"></br>
    </form>
    <form class="" action="bcrypt.php" method="post">
      <input type="text" name="usernamel" value="l">
      <input type="text" name="passwordl" value="l">
      <input type="submit" name="rl" value="Login">
    </form>

  </body>
</html>

<?php
echo "02.10";
error_reporting(E_ALL);

// DB connection info
//TODO: Update the values for $host, $user, $pwd, and $db
//using the values you retrieved earlier from the Azure Portal.
$host = "eu-cdbr-azure-west-d.cloudapp.net";
$user = "bf4e9295ce98d6";
$pwd = "cc63d47d";
$db = "acsm_b798f004ac453b5";
// Connect to database.
try {
    $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(var_dump($e));
  }
ini_set('display_errors', 'On');
if (isset($_POST['rs'])) {
  echo "hi";
  $password = $_POST['passwordr'];
  $username = $_POST['usernamer'];
  $hashAndSalt = password_hash($password, PASSWORD_BCRYPT);
  try {
    $sql_insert = "INSERT INTO pass (passcol, username)
               VALUES ('$hashAndSalt', '$username')";
               $conn->exec($sql_insert);
  } catch (Exception $e) {
    echo "Başarısız";
  }
}
if (isset($_POST['rl'])) {
  $username = $_POST['usernamel'];
  $password = $_POST['passwordl'];
  $sql_select = "SELECT username, passcol FROM pass WHERE username = '$username'";
  $stmt = $conn->query($sql_select);
  $data =$stmt->fetchAll();
  foreach ($data as $hashAndSalt) {
    if (password_verify($password, $hashAndSalt['passcol'])) {
       echo 'verified';
    }
    else {
      echo 'no';
    }  }

}
 ?>
