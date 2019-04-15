<?php
//Get the base-64 string from data
$filteredData=substr($_POST['imgStr'], strpos($_POST['imgStr'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
$tdate = date('dmY',strtotime("-1 days"));
file_put_contents('./scripts/img'.$tdate.'.png', $unencodedData);
?>

