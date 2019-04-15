<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NWC - Avaya Reports 1</title>



<?php
#error_reporting(0);
$servername = "10.48.21.14";
$username = "avayaadmin";
$password = "Sxdc123456";
$dbname = "avayadb";
$datatable = "logs"; // MySQL table name
$results_per_page = 1000; // number of results per page
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<?php  $mo = $_POST['mo']; ?>
<?php  $dd = $_POST['dd']; ?>
<?php  $calltype = $_POST['calltype']; ?>
<?php  $sitename = $_POST['sitename']; ?>


<?php  $hour1 = $_POST['hour1']; ?>
<?php  $hour2 = $_POST['hour2']; ?>
<?php  $week = $_POST['week']; ?>
<?php  $yyyy = $_POST['yyyy']; ?>

 	

<?php 

	if($week != "%%")
		{//123	
			if($week == 1)
			{
			$sql = "SELECT * FROM logs where mo like '".$mo."' 
			and yyyy like '".$yyyy."' 
			and calltype like '".$calltype."' 
			and sitename like '".$sitename."' 
			and dd between 1 
			and 7 ORDER BY 'logs.dialed-number' ASC";		
			}
			if($week == 2)
			{
			$sql = "SELECT * FROM logs where mo like '".$mo."' 
			and yyyy like '".$yyyy."' 			
			and calltype like '".$calltype."' 
			and sitename like '".$sitename."' 
			and dd between 8 
			and 14 ORDER BY 'logs.dialed-number' ASC";		
			}	
			if($week == 3)
			{
			$sql = "SELECT * FROM logs where mo like '".$mo."' 
			and yyyy like '".$yyyy."' 			
			and calltype like '".$calltype."' 
			and sitename like '".$sitename."' 
			and dd between 15 and 21 ORDER BY 'logs.dialed-number' ASC";		
			}	
			if($week == 4)
			{
			$sql = "SELECT * FROM logs where mo like '".$mo."' 
			and yyyy like '".$yyyy."' 			
			and calltype like '".$calltype."' 
			and sitename like '".$sitename."' 
			and dd between 22 
			and 31 ORDER BY 'logs.dialed-number' ASC";		
			}
		}//123		
	else
		{//
		if($hour1 == "%%" and $hour2 == "%%")
			{
			$sql = "SELECT * FROM ".$datatable."  where 
			yyyy like '$yyyy' and
			mo like '$mo' and  
			dd like '$dd' and 
			calltype like '$calltype' and 
			sitename like '$sitename' 
			ORDER BY 'logs.dialed-number' ASC";				
			}
		if($hour1 == "%%" and $hour2 != "%%")
			{
			$sql = "SELECT * FROM ".$datatable."  where 
			yyyy like '$yyyy' and			
			mo like '$mo' and  
			dd like '$dd' and 
			calltype like '$calltype' and 
			sitename like '$sitename' 		
			ORDER BY 'logs.dialed-number' ASC";				
			}			
		if($hour2 == "%%" and $hour1 !="%%")
			{
			$sql = "SELECT * FROM ".$datatable."  where 
			yyyy like '$yyyy' and			
			mo like '$mo' and  
			dd like '$dd' and 
			calltype like '$calltype' and 
			sitename like '$sitename' 		
			ORDER BY 'logs.dialed-number' ASC";				
			}			
		if($hour1 != "%%" and $hour2 != "%%")
			{
			$sql = "SELECT * FROM ".$datatable."  where 
			yyyy like '$yyyy' and			
			mo like '$mo' and  
			dd like '$dd' and 
			calltype like '$calltype' and 
			sitename like '$sitename' 
			and hour between $hour1 and $hour2
			ORDER BY 'logs.dialed-number' ASC";				
			}					
		}//else	
?>


<?php

$rs_result = $conn->query($sql);
///////////////////////////////////////////////////
$count = $conn->query($sql);
//count records
$i = 0;
while($count->fetch_assoc())
{ 
$i++; 
}
////////////////////////////////////////////////////


////////////////////////////////
/*
$sql = "SELECT * FROM ".$datatable."  where mo like '$month' and  dd like '$day'
ORDER BY 'logs.dialed-number' ASC LIMIT $start_from, ".$results_per_page;

$querytotal = $rs_result->fetch_assoc();
echo $querytotal["total"];
echo "</br></br>";
*/
//////////////////////////////////////
?> 

<body>

<h3 align="center"><a href="search1.html">Run Query Again</a></h3>
<h3 align="center"><a href="exportCSV.php?<?php echo 'sitename='.$sitename.'&calltype='.$calltype.'&mo='.$mo.'&dd='.$dd.'&week='.$week.'&yyyy='.$yyyy ?>">Download</a></h3>

	<!--
	<h3 align="center">	
	<a href="exportCSV.php?week=1&<?php echo 'sitename='.$sitename.'&calltype='.$calltype.'&mo='.$mo.'&dd='.$dd ?>">Week 1 (1-7)&nbsp;&nbsp;&nbsp;</a>
	<a href="exportCSV.php?week=2&<?php echo 'sitename='.$sitename.'&calltype='.$calltype.'&mo='.$mo.'&dd='.$dd ?>">Week 2 (8-14)&nbsp;&nbsp;&nbsp;</a>
	<a href="exportCSV.php?week=3&<?php echo 'sitename='.$sitename.'&calltype='.$calltype.'&mo='.$mo.'&dd='.$dd ?>">Week 3 (15-21)&nbsp;&nbsp;&nbsp;</a>
	<a href="exportCSV.php?week=4&<?php echo 'sitename='.$sitename.'&calltype='.$calltype.'&mo='.$mo.'&dd='.$dd ?>">Week 4 (22-31)&nbsp;&nbsp;&nbsp;</a>
	</h3>
	-->
</br>

<table border="1" cellpadding="4" align="center">
<th align="left" colspan="12">
	<?php echo "<b>Query Counts:</b> ".$i."&nbsp;&nbsp;&nbsp;"?>
	</br>	
	<?php echo "<b>Site Name:</b> ".ucfirst($sitename)."&nbsp;&nbsp;&nbsp;<b>Call Type:</b> ".ucfirst($calltype).""?>
	</br>
	<?php echo "<b>Month:</b> ".ucfirst($mo)."&nbsp;&nbsp;&nbsp;<b>Day:</b> ".ucfirst($dd).""?>
	</br>
	<?php echo "<b>Query Result:</b> ".$sql;	?>
</th>
<tr>
    <td bgcolor="#CCCCCC"><strong>Dialled Number</strong></td>
	<td bgcolor="#CCCCCC"><strong>Called Number</strong></td>
	
	<td bgcolor="#CCCCCC"><strong>Site Name</strong></td>
	<td bgcolor="#CCCCCC"><strong>Call Type</strong></td>
	
	<td bgcolor="#CCCCCC"><strong>Time (hour)</strong></td>
    <td bgcolor="#CCCCCC"><strong>Time (minute)</strong></td>
	
	<td bgcolor="#CCCCCC"><strong>Duration (hour)</strong></td>
    <td bgcolor="#CCCCCC"><strong>Duration (minute)</strong></td>
	<td bgcolor="#CCCCCC"><strong>Duration (minute/100th)</strong></td>
	
	
    <td bgcolor="#CCCCCC"><strong>Day (dd)</strong></td>
    <td bgcolor="#CCCCCC"><strong>Month (mo)</strong></td>
    <td bgcolor="#CCCCCC"><strong>Year (yyyy)</strong></td></tr>	
		
<?php 
 while($row = $rs_result->fetch_assoc()) {
?>            						
			<tr>
            <td><?php echo $row['dialed-number']; ?></td>
			<td><?php echo $row['calling-number']; ?></td>			
			<td><?php echo $row['sitename']; ?></td>	
			<td><?php echo $row['calltype']; ?></td>				
			<td><?php echo $row['hour']; ?></td>			
			<td><?php echo $row['minute']; ?></td>			
			<td><?php echo $row['duration-hour']; ?></td>			
			<td><?php echo $row['duration-minute']; ?></td>		
			<td><?php echo $row['duration-tenths-minute']; ?></td>				
			<td><?php echo $row['dd']; ?></td>			
			<td><?php echo $row['mo']; ?></td>			
			<td><?php echo $row['yyyy']; ?></td>							
            </tr>
<?php 
}; 
?> 
</table>
 
 
 <?php 
/* 
$sql = "SELECT COUNT('logs.dialed-number') AS total FROM ".$datatable;
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='report4.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
};
*/ 
?>


</body>
<h6 align="center" >Developed by Rolly Falco Villacacan | All Rights Reserved</h6>
</html>
