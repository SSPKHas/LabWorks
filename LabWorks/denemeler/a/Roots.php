<?php


$a= $_REQUEST["Fnum"];
$b= $_REQUEST["Snum"];
$c= $_REQUEST["Tnum"];


echo "a = $a, b= $b, and c=$c <br>";

$delta = $b*$b -4*$a*$c;

if ($delta > 0){

	echo "There are two reall roots as : <br>";
	$x1 = (-$b + sqrt($delta))/(2*$a);
	$x2 = (-$b + sqrt($delta))/(2*$a);
	echo "x1 = $x1 and x2 = $x2 <br>";

}else if ($delta==0){

	echo "There are two EQUAL real roots as   ";
	$x = -$b/(2*$a);
	echo "$x";
}else{
	echo "<br>There no real roots";
}




?>