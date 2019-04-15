<?php
#error_reporting(0);
$servername = "localhost";
$username = "avayaadmin";
$password = "";
$dbname = "avaya_reports_db";
$datatable = "avaya_cms_report"; // MySQL table name

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php  $mm = $_POST['mm']; ?>
<?php  $dd = $_POST['dd']; ?>
<?php  $yy = $_POST['yy']; ?>
<?php  $hh = $_POST['hh']; ?>

<?php  
		if(isset($_POST['REFRESH'])){
			shell_exec('C:\xampp\htdocs\avayareports\scripts\runScheduleTask.bat ');
			header("location:search1.php");	
			exit();
		}; 
?>

<?php  
		if(isset($_POST['REPORT'])){
			shell_exec('C:\xampp\htdocs\avayareports\scripts\sendReport.bat ');	
			header("location:search1.php");
			exit();
		}; 
?>


<?php 
	//if selected default	
	/*echo date("Y");
	echo "</br>";
	echo date("m");
	echo "</br>";
	echo date("d");*/
	
	if($mm == "%%") $mm = date("m");
	if($dd == "%%") $dd = date("d");
	if($yy == "%%") $yy = date("Y");
	
?>

<?php  $call_id = $_POST['call_id']; ?>
<?php  $calling_party = $_POST['calling_party']; ?>
<?php  $dialed_number = $_POST['dialed_number']; ?>

<?php

			$sql = "SELECT * FROM avaya_cms_report_main where call_id like '%".$call_id."%' 
			and calling_party like '%".$calling_party."%' 
			and dialed_number like '%".$dialed_number."%' 	
		
			and DAY(date1) = '".$dd."' 
			and MONTH(date1) = '".$mm."' 
			and YEAR(date1) = '".$yy."' 			
			and HOUR(start_time1) like '".$hh."' 
			
			ORDER BY 'date1'  ASC";
			
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




<HTML>
<HEAD>
<TITLE>Call Records</TITLE>

	<script type="text/javascript">
	<!--
	function newPage(num) {
	var url=new Array();
	url[0]="search1.php";
	url[1]="exportTocsv.php?<?php echo "mm=$mm&dd=$dd&yy=$yy&hh=$hh"; ?>";
	window.location=url[num];``
	}
	//
	</script>

</HEAD>

<BODY BGCOLOR="#FFFFFF">



Day:<B>&nbsp;<?php echo $dd; ?></B></br>
Month:<B>&nbsp;<?php echo $mm; ?></B></br>
Year:<B>&nbsp;<?php echo $yy; ?></B></br>
Start Time:<B>&nbsp;<?php echo $hh; ?></B></br>
</p>
<FORM ACTION="chart0.php" METHOD="GET"/>
<INPUT TYPE="BUTTON" Value="BACK" onclick="newPage(0)" />
<INPUT TYPE="SUBMIT" VALUE="CHART #1" />
<INPUT TYPE="BUTTON" VALUE="DOWNLOAD CSV" onclick="newPage(1)" />
<input type="text" name="dd" value="<?php echo $dd; ?>" hidden>
<input type="text" name="mm" value="<?php echo $mm; ?>" hidden>
<input type="text" name="yy" value="<?php echo $yy; ?>" hidden>
</FORM>





<p>
Call(s) Found:&nbsp;<B><?php echo $i; ?></B></br>


<TABLE BORDER=1 CELLPADDING=1 CELLSPACING=0>
<TR>

<TH>#</TH>
<TH>Call ID</TH>
<TH>Segment</TH>
<TH>Date</TH>
<TH>Start Time</TH>
<TH>Calling Party</TH>
<TH>Dialed Number</TH>
<TH>Disposition</TH>
<TH>Disposition Time</TH>
<TH>Split/Skill</TH>
<TH>Ans Logid</TH>
<TH>Talk Time</TH>
<TH>Hold Time</TH>
<TH>ACW Time</TH>
<TH>Trans Out</TH>
<TH>Conf</TH>
<TH>Assist</TH>
<TH>Last Call Work Code</TH>
</TR>



<!--
<TR ALIGN=RIGHT>

<TD ALIGN=LEFT>20182364</TD>
<TD>1</TD>
<TD ALIGN=LEFT>3/11/2019</TD>
<TD>11:00PM</TD>
<TD ALIGN=LEFT>564455303</TD>
<TD ALIGN=LEFT>159889</TD>
<TD ALIGN=LEFT>FDISC</TD>
<TD>:00</TD>
<TD>&nbsp;</TD>
<TD ALIGN=LEFT>&nbsp;</TD>
<TD>:00</TD>
<TD>:00</TD>
<TD>:00</TD>
<TD ALIGN=LEFT>N</TD>
<TD ALIGN=LEFT>N</TD>
<TD ALIGN=LEFT>N</TD>
<TD ALIGN=LEFT>&nbsp;</TD>
</TR>
-->

<?php 
 while($row = $rs_result->fetch_assoc()) {
?>            						
			<tr>
            <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['call_id']; ?></td>
			<td><?php echo $row['segment']; ?></td>			
			<td><?php echo date ( "d/m/Y" , strtotime ( $row['date1'] )); ?></td>
			<!--<td><?php echo date ( "d.m.Y H:i:s" , strtotime ( $row['date1'] )); ?></td>-->	
			<td><?php echo $row['start_time1']; ?></td>				
			<td><?php echo $row['calling_party']; ?></td>			
			<td><?php echo $row['dialed_number']; ?></td>			
			<td><?php echo $row['disposition']; ?></td>			
			<td><?php echo $row['disposition_time']; ?></td>		
			<td><?php echo $row['split_skill']; ?></td>				
			<td><?php echo $row['ans_logid']; ?></td>			
			<td><?php echo $row['talk_time']; ?></td>			
			<td><?php echo $row['hold_time']; ?></td>							
			<td><?php echo $row['acw_time']; ?></td>							
			<td><?php echo $row['trans_out']; ?></td>							
			<td><?php echo $row['conf']; ?></td>							
			<td><?php echo $row['assist']; ?></td>							
			<td><?php echo $row['last_call_work_code']; ?></td>														
            </tr>
<?php 
}; 
?> 



</TABLE>
</BODY>
</HTML>
