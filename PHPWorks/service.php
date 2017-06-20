<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="service.php" method="post">
      <input type="text" name="username" value="">
      <input type="text" name="password" value="">
      <input type="submit" name="submit" value="">
    </form>
  </body>
</html>
<?php
   $con=mysqli_connect("eu-cdbr-azure-west-d.cloudapp.net","bf4e9295ce98d6","cc63d47d","acsm_b798f004ac453b5");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   else {
     echo "başarılı";
   }

   $username = $_POST['username'];
   $password = $_POST['password'];
   $result = mysqli_query($con,"SELECT Role FROM table1 where
   Username='$username' and Password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
   else {
     echo "yok";
   }

   mysqli_close($con);
?>
