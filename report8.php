

<?php	

$mo = 7;
$dd = 29; 
$yyyy = 2017;
#$link = mysqli_connect("127.0.0.1", "avayaadmin", "Sxdc123456", "avayadb");
$mysqli = new mysqli("127.0.0.1", "avayaadmin", "Sxdc123456", "avayadb");
?>


<?php #1am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '1' order by id limit 10");
$t11 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '1' order by id limit 10");
$t21 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '1' order by id limit 10");
$t31 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '1' order by id limit 10");
$t41 = $result->num_rows;
#############################
?>

<?php #2am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '2' order by id limit 10");
$t12 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '2' order by id limit 10");
$t22 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '2' order by id limit 10");
$t32 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '2' order by id limit 10");
$t42 = $result->num_rows;
#############################
?>

<?php #3am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '3' order by id limit 10");
$t13 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '3' order by id limit 10");
$t23 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '3' order by id limit 10");
$t33 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '3' order by id limit 10");
$t43 = $result->num_rows;
#############################
?>

<?php #4am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '4' order by id limit 10");
$t14 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '4' order by id limit 10");
$t24 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '4' order by id limit 10");
$t34 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '4' order by id limit 10");
$t44 = $result->num_rows;
#############################
?>

<?php #5am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '5' order by id limit 10");
$t15 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '5' order by id limit 10");
$t25 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '5' order by id limit 10");
$t35 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '5' order by id limit 10");
$t45 = $result->num_rows;
#############################
?>
	
<?php #6am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '6' order by id limit 10");
$t16 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '6' order by id limit 10");
$t26 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '6' order by id limit 10");
$t36 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '6' order by id limit 10");
$t46 = $result->num_rows;
#############################
?>

<?php #7am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '7' order by id limit 10");
$t17 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '7' order by id limit 10");
$t27 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '7' order by id limit 10");
$t37 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '7' order by id limit 10");
$t47 = $result->num_rows;
#############################
?>	


<?php #8am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '8' order by id limit 10");
$t18 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '8' order by id limit 10");
$t28 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '8' order by id limit 10");
$t38 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '8' order by id limit 10");
$t48 = $result->num_rows;
#############################
?>

<?php #9am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '9' order by id limit 10");
$t19 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '9' order by id limit 10");
$t29 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '9' order by id limit 10");
$t39 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '9' order by id limit 10");
$t49 = $result->num_rows;
#############################
?>


<?php #10am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '10' order by id limit 10");
$t110 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '10' order by id limit 10");
$t210 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '10' order by id limit 10");
$t310 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '10' order by id limit 10");
$t410 = $result->num_rows;
#############################
?>

<?php #11am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '11' order by id limit 10");
$t111 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '11' order by id limit 10");
$t211 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '11' order by id limit 10");
$t311 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '11' order by id limit 10");
$t411 = $result->num_rows;
#############################
?>

<?php #12am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '12' order by id limit 10");
$t112 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '12' order by id limit 10");
$t212 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '12' order by id limit 10");
$t312 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '12' order by id limit 10");
$t412 = $result->num_rows;
#############################
?>


<?php #13am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '13' order by id limit 10");
$t113 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '13' order by id limit 10");
$t213 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '13' order by id limit 10");
$t313 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '13' order by id limit 10");
$t413 = $result->num_rows;
#############################
?>


<?php #14am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '14' order by id limit 10");
$t114 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '14' order by id limit 10");
$t214 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '14' order by id limit 10");
$t314 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '14' order by id limit 10");
$t414 = $result->num_rows;
#############################
?>

<?php #15am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '15' order by id limit 10");
$t115 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '15' order by id limit 10");
$t215 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '15' order by id limit 10");
$t315 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '15' order by id limit 10");
$t415 = $result->num_rows;
#############################
?>

<?php #16am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '16' order by id limit 10");
$t116 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '16' order by id limit 10");
$t216 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '16' order by id limit 10");
$t316 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '16' order by id limit 10");
$t416 = $result->num_rows;
#############################
?>

<?php #17am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '17' order by id limit 10");
$t117 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '17' order by id limit 10");
$t217 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '17' order by id limit 10");
$t317 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '17' order by id limit 10");
$t417 = $result->num_rows;
#############################
?>

	
<?php #18am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '18' order by id limit 10");
$t118 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '18' order by id limit 10");
$t218 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '18' order by id limit 10");
$t318 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '18' order by id limit 10");
$t418 = $result->num_rows;
#############################
?>	


<?php #19am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '19' order by id limit 10");
$t119 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '19' order by id limit 10");
$t219 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '19' order by id limit 10");
$t319 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '19' order by id limit 10");
$t419 = $result->num_rows;
#############################
?>

<?php #20am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '20' order by id limit 10");
$t120 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '20' order by id limit 10");
$t220 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '20' order by id limit 10");
$t320 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '20' order by id limit 10");
$t420 = $result->num_rows;
#############################
?>

<?php #21am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '21' order by id limit 10");
$t121 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '21' order by id limit 10");
$t221 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '21' order by id limit 10");
$t321 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '21' order by id limit 10");
$t421 = $result->num_rows;
#############################
?>


<?php #22am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '22' order by id limit 10");
$t122 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '22' order by id limit 10");
$t222 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '22' order by id limit 10");
$t322 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '22' order by id limit 10");
$t422 = $result->num_rows;
#############################
?>


<?php #23am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '23' order by id limit 10");
$t123 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '23' order by id limit 10");
$t223 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '23' order by id limit 10");
$t323 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '23' order by id limit 10");
$t423 = $result->num_rows;
#############################
?>

<?php #0am
########riyadh###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'riyadh' and mo = $mo and dd = $dd and hour = '0' order by id limit 10");
$t10 = $result->num_rows;
#############################

########jeddah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'jeddah' and mo = $mo and dd = $dd and hour = '0' order by id limit 10");
$t20 = $result->num_rows;
#############################

########makkah###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'makkah' and mo = $mo and dd = $dd and hour = '0' order by id limit 10");
$t30 = $result->num_rows;
#############################

########taif###############
$result = $mysqli->query("SELECT id FROM logs where yyyy = $yyyy and  sitename = 'taif' and mo = $mo and dd = $dd and hour = '0' order by id limit 10");
$t40 = $result->num_rows;
#############################
?>

<?php  $result->close(); ?>


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
