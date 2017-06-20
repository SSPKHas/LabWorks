<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
echo "02.10";
error_reporting(E_ALL);
ini_set('display_errors', 'On');

try {
    $con=mysqli_connect("eu-cdbr-azure-west-d.cloudapp.net","bf4e9295ce98d6","cc63d47d","acsm_b798f004ac453b5");
}
catch(Exception $e){
    die(var_dump($e));
  }
  if (isset($_POST['login'])) {
    $username = $_POST['usernamel'];
    $password = $_POST['passwordl'];
    $sql_select = "SELECT username, passcol FROM pass WHERE username = '$username'";
    $stmt = $conn->query($sql_select);
    $data =$stmt->fetchAll();
    foreach ($data as $hashAndSalt) {
      if (password_verify($password, $hashAndSalt['passcol'])) {
         $loginstate = 'verified';
      }
      else {
        echo 'no';
      }  }

  }
  if ($loginstate == 'verified') {
    # code...
  }

  /* $con=mysqli_connect("eu-cdbr-azure-west-d.cloudapp.net","bf4e9295ce98d6","cc63d47d","acsm_b798f004ac453b5");
   $sql="CREATE TABLE table1(Username CHAR(30),Password CHAR(30),Role CHAR(30))";
   if (mysqli_query($con,$sql)) {
      echo "Table have been created successfully";
   }*/


?>
