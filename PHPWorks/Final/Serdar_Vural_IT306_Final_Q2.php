<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Q2 Serdar Vural</title>
  </head>
  <body>
    <a href="index.htm">index</a><br>

  </body>
</html>

<?php
// live on: http://khasdeneme.azurewebsites.net/Final/index.htm

$myfile = file("TheFile.txt");
foreach ($myfile as $line) $linelenghts[] = strlen($line);
foreach ($linelenghts as $key) {
  echo str_repeat("*", $key-1);
  echo "<br>";
}
 ?>
