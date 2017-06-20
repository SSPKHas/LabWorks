<?php


$a= $_REQUEST["number1"];


$sum=0;

while($a>0){

	$b = $a%10;
	$sum +=$b;
	$a/=10;
	
}


echo "<br>$sum"	;
 
?>