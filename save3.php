<?php 
	//$dd = date('d',strtotime("-1 days"));
	//$mm = date('m',strtotime("-1 days"));
	//$yy = date('Y',strtotime("-1 days"));
	$filename = 'C:\xampp\htdocs\avayareports\raw\chart3.dat';
	//$content = "$dd/$mm/$yy";
	$dateY = file_get_contents($filename);	 
	//echo $dateY."--------------";
	//$tdate = date('dmY',strtotime($dateY));
	//echo $tdate;	
?>

<?php
//Get the base-64 string from data
$filteredData=substr($_POST['imgStr'], strpos($_POST['imgStr'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
$tdate = date('mdY',strtotime($dateY)); //the m and d was reverse because of the reading problem and formatting

echo $tdate;

file_put_contents('./scripts/img'.$tdate.'.png', $unencodedData);
#file_put_contents('./scripts/img'.$dd$mm$yy.'.png', $unencodedData);


$filename = 'C:\xampp\htdocs\avayareports\raw\chart3.dat';
unlink($filename);

?>

