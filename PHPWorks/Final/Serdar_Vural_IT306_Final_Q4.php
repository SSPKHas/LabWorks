<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.htm">index</a>
    <form class="" action="Serdar_Vural_IT306_Final_Q4.php" method="post">
      <input type="number" name="number" value="12">
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>

<?php
// live on: http://khasdeneme.azurewebsites.net/Final/index.htm

class IT306FinalQ1{ // A class definition starts here

  public $grades; // a property

  /* ------------------------------- Class Functions ------------------------------------------*/
  // a function that generates N grades, puts them into an array and returns the array
  public function createRandomGrades($N){
    for ($i=0; $i < $N; $i++) {
      $grades[$i] = rand(1,100);
    }
    return $grades;
  } // End of createRandomGrades function */

  // a function that computes the average of the elements of an array elements
  public function computeAverage($arr){
    return array_sum($arr)/count($arr);
  } // End of computeAverage function */

  // a function that prints the elements of an array, arr.
  public function printArrayElements($arr){
    $i = 1;
    foreach ($arr as $key => $value) {
      echo "$i: $value <br>";
      $i++;
    }
  } // End of printArrayElements function */
} // End of first Class.

class IT306FinalQ1Test extends IT306FinalQ1{

  public $dx;

  public function findMax($x){ /* Find the maximum of the array elements */
    return max($x);
  } // End of the findMax function
} // second class (a subclass of the first class)

$obj = new IT306FinalQ1Test();
$N = $_POST["number"];
$A = $obj -> createRandomGrades($N);
$obj -> printArrayElements($A);
echo "<br>";

$avrg = $obj -> computeAverage($A);
$max = $obj -> findMax($A);
echo "The average is $avrg, and the max is $max";
?>
