<?php

require_once('dbConnect.php');
echo "22.28";
$sql = "select * from akbildeneme";

$res = mysqli_query($con,$sql);

$result = array();

while($row = mysqli_fetch_array($res)){
array_push($result,array('Tarih'=>$row[0],'Tür'=>$row[1],'Basım'=>$row[2]));
}
print_r($result);

echo json_encode(array("result"=>$result), JSON_UNESCAPED_UNICODE );

mysqli_close($con);
?>
