<?php


$num1 =$_REQUEST["number1"];
$num2 =$_REQUEST["number2"];




function GCD($num1, $num2) {
/* finds the greatest common factor between two numbers */
   while ($num2 != 0){
     $t = $num1 % $num2;
     $num1 = $num2;
     $num2 = $t;
   }
   return $num1;
}

echo "The greatest commond divisor is ".GCD($num1,$num2);


?>