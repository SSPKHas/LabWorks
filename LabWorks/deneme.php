<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
for ($i=10; $i > 0; --$i) {
  echo "$i";
}
$email = "serdar@vural";
try {
  for ($i=0; $i < strlen($email) ; $i++) {
    if ($email[$i] == "@") {
      echo "Bu bir email adresidir.";
      break;
      # code...
    }
    else {
      echo "değildir";
    }
    # code...
  }
} catch (Exception $e) {
  echo "Başarısız";
}

for ($i=0; $i < 10; $i++) {
  $array[i] = rand(1,49);

}
print $array;
?>
