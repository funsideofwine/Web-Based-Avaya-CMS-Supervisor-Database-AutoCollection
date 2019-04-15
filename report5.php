

<?php	
$mo = 7;
$dd = 29; 
$yyyy = 2017;
$link = mysqli_connect("127.0.0.1", "avayaadmin", "Sxdc123456", "avayadb");
?>


<?php #1am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '1'");
$t11 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '1'");
$t21 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '1'");
$t31 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '1'");
$t41 = mysqli_num_rows($result);
#############################
?>

<?php #2am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '2'");
$t12 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '2'");
$t22 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '2'");
$t32 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '2'");
$t42 = mysqli_num_rows($result);
#############################
?>

<?php #3am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '3'");
$t13 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '3'");
$t23 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '3'");
$t33 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '3'");
$t43 = mysqli_num_rows($result);
#############################
?>

<?php #4am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '4'");
$t14 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '4'");
$t24 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '4'");
$t34 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '4'");
$t44 = mysqli_num_rows($result);
#############################
?>

<?php #5am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '5'");
$t15 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '5'");
$t25 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '5'");
$t35 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '5'");
$t45 = mysqli_num_rows($result);
#############################
?>
	
<?php #6am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '6'");
$t16 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '6'");
$t26 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '6'");
$t36 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '6'");
$t46 = mysqli_num_rows($result);
#############################
?>

<?php #7am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '7'");
$t17 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '7'");
$t27 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '7'");
$t37 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '7'");
$t47 = mysqli_num_rows($result);
#############################
?>	


<?php #8am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '8'");
$t18 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '8'");
$t28 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '8'");
$t38 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '8'");
$t48 = mysqli_num_rows($result);
#############################
?>

<?php #9am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '9'");
$t19 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '9'");
$t29 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '9'");
$t39 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '9'");
$t49 = mysqli_num_rows($result);
#############################
?>


<?php #10am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '10'");
$t110 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '10'");
$t210 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '10'");
$t310 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '10'");
$t410 = mysqli_num_rows($result);
#############################
?>

<?php #11am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '11'");
$t111 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '11'");
$t211 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '11'");
$t311 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '11'");
$t411 = mysqli_num_rows($result);
#############################
?>

<?php #12am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '12'");
$t112 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '12'");
$t212 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '12'");
$t312 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '12'");
$t412 = mysqli_num_rows($result);
#############################
?>


<?php #13am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '13'");
$t113 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '13'");
$t213 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '13'");
$t313 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '13'");
$t413 = mysqli_num_rows($result);
#############################
?>


<?php #14am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '14'");
$t114 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '14'");
$t214 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '14'");
$t314 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '14'");
$t414 = mysqli_num_rows($result);
#############################
?>

<?php #15am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '15'");
$t115 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '15'");
$t215 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '15'");
$t315 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '15'");
$t415 = mysqli_num_rows($result);
#############################
?>

<?php #16am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '16'");
$t116 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '16'");
$t216 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '16'");
$t316 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '16'");
$t416 = mysqli_num_rows($result);
#############################
?>

<?php #17am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '17'");
$t117 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '17'");
$t217 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '17'");
$t317 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '17'");
$t417 = mysqli_num_rows($result);
#############################
?>

	
<?php #18am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '18'");
$t118 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '18'");
$t218 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '18'");
$t318 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '18'");
$t418 = mysqli_num_rows($result);
#############################
?>	


<?php #19am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '19'");
$t119 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '19'");
$t219 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '19'");
$t319 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '19'");
$t419 = mysqli_num_rows($result);
#############################
?>

<?php #20am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '20'");
$t120 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '20'");
$t220 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '20'");
$t320 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '20'");
$t420 = mysqli_num_rows($result);
#############################
?>

<?php #21am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '21'");
$t121 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '21'");
$t221 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '21'");
$t321 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '21'");
$t421 = mysqli_num_rows($result);
#############################
?>


<?php #22am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '22'");
$t122 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '22'");
$t222 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '22'");
$t322 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '22'");
$t422 = mysqli_num_rows($result);
#############################
?>


<?php #23am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '23'");
$t123 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '23'");
$t223 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '23'");
$t323 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '23'");
$t423 = mysqli_num_rows($result);
#############################
?>

<?php #0am
########riyadh###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '0'");
$t10 = mysqli_num_rows($result);
#############################

########jeddah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '0'");
$t20 = mysqli_num_rows($result);
#############################

########makkah###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '0'");
$t30 = mysqli_num_rows($result);
#############################

########taif###############
$result = mysqli_query($link, "SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '0'");
$t40 = mysqli_num_rows($result);
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
  <table class="table table-bordered">
 

	<thead>
	<tr>
	<th colspan="1">Date:<?php echo " $mo/$dd/$yyyy"; ?></th>
	<th colspan="4">Business Unit</th>		
	</tr>	  	  
    </thead>
 
 


 <thead>
      <tr class="table-active">
        <th>Time</th>
		<th>Riyadh</th>
        <th>Jeddah</th>
        <th>Makkah</th>
        <th>Taif</th>
		
      </tr>
    </thead>
    <tbody>

		<tr>
			<td>1:00-1:59</td>
			<td><?php echo $t11; ?></td>
			<td><?php echo $t21; ?></td>
			<td><?php echo $t31; ?></td>			
			<td><?php echo $t41; ?></td>						
		</tr>
	    
		<tr>
			<td>2:00-2:59</td>
			<td><?php echo $t12; ?></td>
			<td><?php echo $t22; ?></td>
			<td><?php echo $t32; ?></td>			
			<td><?php echo $t42; ?></td>						
		</tr>
		
		<tr>
			<td>3:00-3:59</td>
			<td><?php echo $t13; ?></td>
			<td><?php echo $t23; ?></td>
			<td><?php echo $t33; ?></td>			
			<td><?php echo $t43; ?></td>						
		</tr>
	  
		<tr>
			<td>4:00-4:59</td>
			<td><?php echo $t14; ?></td>
			<td><?php echo $t24; ?></td>
			<td><?php echo $t34; ?></td>			
			<td><?php echo $t44; ?></td>						
		</tr>

		<tr>
			<td>5:00-5:59</td>
			<td><?php echo $t15; ?></td>
			<td><?php echo $t25; ?></td>
			<td><?php echo $t35; ?></td>			
			<td><?php echo $t45; ?></td>						
		</tr>		

		<tr>
			<td>6:00-6:59</td>
			<td><?php echo $t16; ?></td>
			<td><?php echo $t26; ?></td>
			<td><?php echo $t36; ?></td>			
			<td><?php echo $t46; ?></td>						
		</tr>	

		<tr>
			<td>7:00-7:59</td>
			<td><?php echo $t17; ?></td>
			<td><?php echo $t27; ?></td>
			<td><?php echo $t37; ?></td>			
			<td><?php echo $t47; ?></td>						
		</tr>			

		<tr>
			<td>8:00-8:59</td>
			<td><?php echo $t18; ?></td>
			<td><?php echo $t28; ?></td>
			<td><?php echo $t38; ?></td>			
			<td><?php echo $t48; ?></td>						
		</tr>	
		
		
		<tr>
			<td>9:00-9:59</td>
			<td><?php echo $t19; ?></td>
			<td><?php echo $t29; ?></td>
			<td><?php echo $t39; ?></td>			
			<td><?php echo $t49; ?></td>						
		</tr>			

		<tr>
			<td>10:00-10:59</td>
			<td><?php echo $t110; ?></td>
			<td><?php echo $t210; ?></td>
			<td><?php echo $t310; ?></td>			
			<td><?php echo $t410; ?></td>						
		</tr>		

		<tr>
			<td>11:00-11:59</td>
			<td><?php echo $t111; ?></td>
			<td><?php echo $t211; ?></td>
			<td><?php echo $t311; ?></td>			
			<td><?php echo $t411; ?></td>						
		</tr>
		
		<tr>
			<td>12:00-12:59</td>
			<td><?php echo $t112; ?></td>
			<td><?php echo $t212; ?></td>
			<td><?php echo $t312; ?></td>			
			<td><?php echo $t412; ?></td>						
		</tr>
		
		<tr>
			<td>13:00-13:59</td>
			<td><?php echo $t113; ?></td>
			<td><?php echo $t213; ?></td>
			<td><?php echo $t313; ?></td>			
			<td><?php echo $t413; ?></td>						
		</tr>		
		
		<tr>
			<td>14:00-14:59</td>
			<td><?php echo $t114; ?></td>
			<td><?php echo $t214; ?></td>
			<td><?php echo $t314; ?></td>			
			<td><?php echo $t414; ?></td>						
		</tr>		

		<tr>
			<td>15:00-15:59</td>
			<td><?php echo $t115; ?></td>
			<td><?php echo $t215; ?></td>
			<td><?php echo $t315; ?></td>			
			<td><?php echo $t415; ?></td>						
		</tr>
		
		<tr>
			<td>16:00-16:59</td>
			<td><?php echo $t116; ?></td>
			<td><?php echo $t216; ?></td>
			<td><?php echo $t316; ?></td>			
			<td><?php echo $t416; ?></td>						
		</tr>		
		
		
		<tr>
			<td>17:00-17:59</td>
			<td><?php echo $t117; ?></td>
			<td><?php echo $t217; ?></td>
			<td><?php echo $t317; ?></td>			
			<td><?php echo $t417; ?></td>						
		</tr>
		
		<tr>
			<td>18:00-18:59</td>
			<td><?php echo $t118; ?></td>
			<td><?php echo $t218; ?></td>
			<td><?php echo $t318; ?></td>			
			<td><?php echo $t418; ?></td>						
		</tr>		
		
		<tr>
			<td>19:00-19:59</td>
			<td><?php echo $t119; ?></td>
			<td><?php echo $t219; ?></td>
			<td><?php echo $t319; ?></td>			
			<td><?php echo $t419; ?></td>						
		</tr>
		
		<tr>
			<td>20:00-20:59</td>
			<td><?php echo $t120; ?></td>
			<td><?php echo $t220; ?></td>
			<td><?php echo $t320; ?></td>			
			<td><?php echo $t420; ?></td>						
		</tr>
		
		<tr>
			<td>21:00-21:59</td>
			<td><?php echo $t121; ?></td>
			<td><?php echo $t221; ?></td>
			<td><?php echo $t321; ?></td>			
			<td><?php echo $t421; ?></td>						
		</tr>		
		<tr>
			<td>22:00-22:59</td>
			<td><?php echo $t122; ?></td>
			<td><?php echo $t222; ?></td>
			<td><?php echo $t322; ?></td>			
			<td><?php echo $t422; ?></td>						
		</tr>

		<tr>
			<td>23:00-23:59</td>
			<td><?php echo $t123; ?></td>
			<td><?php echo $t223; ?></td>
			<td><?php echo $t323; ?></td>			
			<td><?php echo $t423; ?></td>						
		</tr>	


		<tr>
			<td>00:00-00:59</td>
			<td><?php echo $t10; ?></td>
			<td><?php echo $t20; ?></td>
			<td><?php echo $t30; ?></td>			
			<td><?php echo $t40; ?></td>						
		</tr>
		
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
