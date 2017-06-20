<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lab9</title>
  </head>
  <body>
    <form class="" action="IT306Lab9.php" method="post">
      <input type="password" name="pass" value="">
      <input type="submit" name="p1" value="Submit"><br>
    </form>
    <form class="" action="IT306Lab9.php" method="post">
      <input type="text" name="harf" value="">
      <input type="submit" name="p2" value="Submit"><br>
    </form>
  </body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$N = 10;
function mergeSort($array){
    if(count($array) == 1 )
    {
        return $array;
    }

    $mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}
function printArr(array $sortedarray, $N){
  for ($i=0; $i < $N ; $i++) {
    echo "$sortedarray[$i]<br>";
  }
  return true;
}
function merge($left, $right){
    $res = array();

    while (count($left) > 0 && count($right) > 0)
    {
        if($left[0] > $right[0])
        {
            $res[] = $right[0];
            $right = array_slice($right , 1);
        }
        else
        {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
    }

    while (count($left) > 0)
    {
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }

    while (count($right) > 0)
    {
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }

    return $res;
}
function part1($pass){
  $pattern = '/^([a-z]|[A-Z])([^&.@]+$)/';;
  if (preg_match($pattern, $pass)) {
    echo "preg";
    if (strlen($pass)==8) {
      return "Password valid";
    }
    else {
      return "not valid";
    }
  }
  else {
    return "not valid";
  }
}
function part2(array $array, $sorting){
  switch ($sorting) {
    case 'b':
      $length = count($array);
      for($i = 0; $i < $length; $i ++) {
          $min = $i;
          for($j = $i + 1; $j < $length; $j ++) {
              if ($array[$j] < $array[$min]) {
                  $min = $j;
              }
          }
          $tmp = $array[$min];
          $array[$min] = $array[$i];
          $array[$i] = $tmp;
      }
      return $array;
      break;
    case 's':
      # code...
      $size = count($array);
      for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
          if ($array[$j+1] < $array[$j]) {
            swap($array, $j, $j+1);
          }
        }
      }
      return $array;
      break;
    case 'q':
      # code...
      if( count( $array ) < 2 ) {
        return $array;
      }
      $left = $right = array( );
      reset( $array );
      $pivot_key  = key( $array );
      $pivot  = array_shift( $array );
      foreach( $array as $k => $v ) {
        if( $v < $pivot )
        $left[$k] = $v;
        else
        $right[$k] = $v;
      }
      return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
      break;
    case 'm':
      # code...
      if(count($array) == 1 )
      {
        return $array;
      }

      $mid = count($array) / 2;
      $left = array_slice($array, 0, $mid);
      $right = array_slice($array, $mid);
      $left = mergeSort($left);
      $right = mergeSort($right);

      return merge($left, $right);
      break;
    default:
      echo "not worked";
      break;
  }
}
if (isset($_POST['p1'])) {
  $pass = $_POST["pass"];
  $result = part1($pass);
  echo "$result";
}
if (isset($_POST['p2'])) {
  $harf = $_POST['harf'];
  for ($i=0; $i < $N ; $i++) {
    $array[$i] = rand(1,1000);
  }
  $sortedarray = part2($array, $harf);
  printArr($sortedarray, $N);
}
 ?>
