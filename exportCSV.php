<html>
<head></head>
<title></title>
<body>



<?php
function getdb(){
$servername = "localhost";
$username = "avayaadmin";
$password = "Sxdc123456";
$db = "avayadb";

try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

?>



<?php 
    $sitename = $_GET["sitename"];
	$calltype = $_GET["calltype"];
	$mo = $_GET["mo"];
	$dd = $_GET["dd"];
	$dd = $_GET["dd"];
	$week = $_GET["week"];	
	$yyyy = $_GET["yyyy"];	
?>






<?php

	  $con = getdb();		
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('creationdate','hh','mi','dd','mo','yyyy','sitename','calltype','hour','minute','duration-hour','duration-minute','duration-tenths-minute','condition-code','space1','dialed-number','calling-number','space2','terminating-dip-rntity','space3','originating-sip-entity','space4','feature-flag','space5','bcc','ma-uui','resource-flag','space6','bandwith','carriage-return','line-feed','uploadstamp','id'));

//
if($week != "%%" )
{
	
	if($week == 1)
	  {
	  $query = "SELECT * FROM logs where mo like '".$mo."' 
	  and yyyy like '".$yyyy."' 	  
	  and calltype like '".$calltype."' 
	  and sitename like '".$sitename."' 
	  and dd between 1 
	  and 7 ORDER BY 'logs.dialed-number' ASC";
	  }
	  
	if($week == 2)
	  {
	  $query = "SELECT * FROM logs where mo like '".$mo."' 
	  and yyyy like '".$yyyy."' 	 	  
	  and calltype like '".$calltype."' 
	  and sitename like '".$sitename."' 
	  and dd between 8 
	  and 14 ORDER BY 'logs.dialed-number' ASC";
	  }

	if($week == 3)
	  {
	  $query = "SELECT * FROM logs where mo like '".$mo."' 
	  and yyyy like '".$yyyy."' 	 	  
	  and calltype like '".$calltype."' 
	  and sitename like '".$sitename."' 
	  and dd between 15 
	  and 21 ORDER BY 'logs.dialed-number' ASC";
	  }

	if($week == 4)
	  {
	  $query = "SELECT * FROM logs where mo like '".$mo."' 
	  and yyyy like '".$yyyy."' 	 	  
	  and calltype like '".$calltype."' 
	  and sitename like '".$sitename."' 
	  and dd between 22 
	  and 31 ORDER BY 'logs.dialed-number' ASC";
	  }	  
      
 
 }//if(isset)  
	
else
		{	
		$query = "SELECT * FROM logs where mo like '".$mo."' 
	    and yyyy like '".$yyyy."' 	 		
		and dd like '".$dd."' 
		and calltype like '".$calltype."' 
		and sitename like '".$sitename."' ORDER BY 'logs.dialed-number' ASC";
		}  
		
 ?>
 
 
 
 
 
 
 <?php 
 ///////////////////////////////////////////////////////////////////////
 //DOWNLOAD CSV
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 /////////////////////////////////////////////////////////////////////// 
 ?>
 
 
 
 
 
 
 
 
 
 
 </body>
 </html?