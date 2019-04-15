

<?php		
$mm = 7;
$dd = 29; 
$yyyy = 2017;
$link = mysqli_connect("localhost", "avayaadmin", "", "avaya_reports_db");
?>


<?php

########taif###############
#$result = mysqli_query($link, "SELECT id FROM logs where sitename like 'taif' and mo like $mm and dd = $dd and hour like '0'");
#$t40 = mysqli_num_rows($result);
#############################
?>



<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Avaya Report 1001</h2>
  <p>24 Hours Detail Call Log Report</p>                                                                                      
  <div class="table-responsive">          
  <!--<table class="table">-->
  <!--<table class="table table-bordered">-->
 
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
  </div>
</div>

</body>
</html>
