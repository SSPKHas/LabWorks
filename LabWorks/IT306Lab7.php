<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
  echo $cars[$x];
  echo "<br>";
}

// A two-dimensional array:
$cars=array(
  array("Volvo",100,96),
  array("BMW",60,59),
  array("Toyota",110,100)
);

//1C Start
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
//1C End

$simple_array = array("dbc","bcd","abc");
if(sort($simple_array)){
  print_r($simple_array);
}
echo "<br>";

// set the cookies
setcookie("cookie[three]", "cookiethree");
setcookie("cookie[two]", "cookietwo");
setcookie("cookie[one]", "cookieone");
if (isset($_COOKIE['cookie'])) {
  foreach ($_COOKIE['cookie'] as $name => $value) {
    echo "$name : $value <br>";
  }
}

?>
