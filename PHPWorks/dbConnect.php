<?php
$databasehost = "eu-cdbr-azure-west-d.cloudapp.net";
$databasename = "acsm_b798f004ac453b5";
$databaseusername ="bf4e9295ce98d6";
$databasepassword = "cc63d47d";

$conn = mysqli_connect($databasehost,$databaseusername,$databasepassword, $databasename) or die(mysqli_error($con));
mysqli_set_charset ($con , "utf8");
try {
    $con = new PDO( "mysql:host=$databasehost;dbname=$databasename", $databaseusername, $databasepassword);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(var_dump($e));
}
 ?>
