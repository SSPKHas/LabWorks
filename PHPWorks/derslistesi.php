<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php

$html = file_get_html('http://flow935.com/playlist/flowhis.HTM');
foreach ($html->find('tr') as $row) {
  echo "$row";
  print_r($row);
  # code...
}
 ?>
