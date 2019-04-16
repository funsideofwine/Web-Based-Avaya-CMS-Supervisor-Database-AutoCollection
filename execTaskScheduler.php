<?php 
set_time_limit (600);
echo "Please wait....while we refresh your Data!";
shell_exec('C:\xampp\htdocs\avayareports\scripts\runScheduleTask.bat ');	
	
	
	while(true){		
		// Code to be executed		
		$stat = file_exists('C:\xampp\htdocs\avayareports\scripts\refresh.stat');
		//header("location: redirector.php ");
		if($stat){
			unlink('C:\xampp\htdocs\avayareports\scripts\refresh.stat');
			header("location: search1.php ");
			exit();
			echo "done!";
			}
	}//
?>

<html>
	<head><title></title></head>
	HELLO
	<body></body>
	
	
</html>	

	

