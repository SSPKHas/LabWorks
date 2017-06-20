<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <p>
    <form action="IT306Lab12.php" method="post">
      <span>Enter a first name: </span><input type="text" name="isim"> <br>
      <span>Enter a last name:  </span><input type="text" name="soyisim"> <br>
      <span>Enter student id:   </span><input type="text" name="id"> <br>
      <span>Enter a mail:       </span><input type="text" name="email"> <br>
      <input type="submit" name="w1" value="Submit1"><br>
    </form>
  </p>
  <p>
    <form class="" action="IT306Lab12.php" method="post">
      <input type="text" name="string" value=""><br>
      <input type="submit" name="w2" value="Submit2">
    </form>
  </p>
</body>
</html>

<?php
if (isset($_POST["w1"])) {
  $name=$_POST['isim'];
  $lname=$_POST['soyisim'];
  $stuId=$_POST['id'];
  $email=$_POST['email'];


  function validateName($name){
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Harf ve Boşluk Sadece";
    }else{
      echo"Ad doğru";
    }
  }

  function validateLname($lname){
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      echo "Harf ve Boşluk Sadece";
    }else {
      echo "Soyad Doğru";
    }
  }

  function validateEmail($email){
    $correct = "/^([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";

    if(!preg_match($correct, $email)) {
      echo "Email Geçersiz";
    } else {
      echo "Geçerli Email";
    }
  }

  function validatestuID($stuId){

    if(!preg_match("/^[0-9]{4}\.[0-9]{2}\.[0-9]{2}\.[0-9]{3}$/",$stuId)) {
      echo "Geçersiz ID";
    } else {
      echo "ID geçerli";
    }
  }

  echo validateName($name);
  echo"<br>";
  echo validateLname($lname);
  echo"<br>";
  echo validatestuID($stuId);
  echo"<br>";
  echo validateEmail($email);

  # code...
}

if (isset($_POST["w2"])) {
  $string = $_POST['string'];

  // Word Counter

  $word = split(" ", $string);
  $count = count($word);
  echo "There are $count words in the sentence.<br>";
  // DIGIT COUNTER
  $strArray = str_split($string);
  $counter = 0;
  $isDigit = '/\d/';
  for($i=0 ;$i< count($strArray); $i++){
    if(preg_match($isDigit , $strArray[$i])==1)
    $counter++;
  }

  echo "There are $counter digits in the sentence.<br>";
  numAlpha($string);

function numAlpha($string){
  $numAlpha = preg_match_all("/[a-zA-Z]/",$string);
  echo "There are number of $numAlpha alpha characters in $string<br>";
  # code...
}
function nonalpha($string)
{
    $numAlpha = preg_match_all("/[^a-zA-Z]/",$string);
    echo "There are number of $numAlpha non-alpha characters in $string<br>";
  # code...
}
function WhiteChar($string)
{

    $numSpaces = preg_match_all('/[ ]/', $string);
    echo "There are number of space $numSpaces in $string";
  # code...
}
}

if (isset($_POST["w3"])) {
  # code...
}
?>
