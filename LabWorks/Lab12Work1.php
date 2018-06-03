<?php

$name=$_POST['isim'];
$lname=$_POST['soyisim'];
$stuId=$_POST['id'];
$email=$_POST['email'];


function validateName($name){
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    echo "Only letters and white space allowed for name";
  }else{
    echo"correct";
  }
}

function validateLname($lname){
  if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
    echo "Only letters and white space allowed for last name";
  }else {
    echo "correct";
  }
}

function validateEmail($email){
  $correct = "/^([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";

  if(!preg_match($correct, $email)) {
    echo "Invalid email address";
  } else {
    echo "email is valid";
  }
}

function validatestuID($stuId){

  if(!preg_match("/^[0-9]{4}\.[0-9]{2}\.[0-9]{2}\.[0-9]{3}$/",$stuId)) {
    echo "Invalid id";
  } else {
    echo "id is valid";
  }
}

echo validateName($name);
echo"<br>";
echo validateLname($lname);
echo"<br>";
echo validatestuID($stuId);
echo"<br>";
echo validateEmail($email);

?>
