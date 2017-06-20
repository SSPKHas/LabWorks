<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
function regex($value='')
{
  $pass = "94Serdar";
  $checkid = "/[0-9]{4}.[0-9]{2}.[0-9]{2}.[0-9]{3}/";
  $checkpass = "/^[0-9](?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]{6,10}$/";
  if (!preg_match($checkpass ,$pass)) {
    echo "Şifre Sayı ile başlamalı, Büyük ve Küçük Harf İçermeli";
  }else{
    echo"Şifre Geçerli";
  }
}

function yildizyap($value='')
{
  $myfile = file("asd.txt");
  foreach ($myfile as $line) $words[] = strlen($line);
  foreach ($words as $key) {
    echo str_repeat("*", $key-1);
    echo "<br>";
  }
}
 ?>
