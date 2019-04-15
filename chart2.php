<?php  //$mm = $_GET['mm']; ?>
<?php  //$dd = $_GET['dd']; ?>
<?php  //$yy = $_GET['yy']; ?>

<?php
	
	$dd = date('d',strtotime("-1 days"));
	$mm = date('m',strtotime("-1 days"));
	$yy = date('Y',strtotime("-1 days"));

?>


<?php 
	//$mm = "03";
	//$dd = "23";
	//$yy = "2019";
	//echo $mm." ".$dd." ".$yy;
	//echo date('dmY',strtotime("-1 days"));
	include "getData0.php";
?>

<HTML>
<HEAD>
<TITLE>
National Water Company - Avaya CMS Call Volume Chart
</TITLE>
<META NAME="author" CONTENT="">

	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>	
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([		
        ["Hour", "Volume", { role: "style" } ],        
        ["00H", <?php echo $i_00; ?>, "gold"],	
		["01H", <?php echo $i_01; ?>, "gold"],
        ["02H", <?php echo $i_02; ?>, "gold"],
        ["03H", <?php echo $i_03; ?>, "gold"],
		["04H", <?php echo $i_04; ?>, "gold"],
        ["05H", <?php echo $i_05; ?>, "gold"],
        ["06H", <?php echo $i_06; ?>, "gold"],
        ["07H", <?php echo $i_07; ?>, "gold"],
        ["08H", <?php echo $i_08; ?>, "gold"],
		["09H", <?php echo $i_09; ?>, "gold"],	
        ["10H", <?php echo $i_10; ?>, "gold"],
        ["11H", <?php echo $i_11; ?>, "gold"],
        ["12H", <?php echo $i_12; ?>, "gold"],
        ["13H", <?php echo $i_13; ?>, "gold"],
		["14H", <?php echo $i_14; ?>, "gold"],
        ["15H", <?php echo $i_15; ?>, "gold"],
        ["16H", <?php echo $i_16; ?>, "gold"],
        ["17H", <?php echo $i_17; ?>, "gold"],
        ["18H", <?php echo $i_18; ?>, "gold"],
		["19H", <?php echo $i_19; ?>, "gold"],		
		["20H", <?php echo $i_20; ?>, "gold"],
        ["21H", <?php echo $i_21; ?>, "gold"],
		["22H", <?php echo $i_22; ?>, "gold"],
        ["23H", <?php echo $i_23; ?>, "gold"]		
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Call Vol/Hr ( <?php echo "$dd/$mm/$yy"; ?> )",
        width: "200%",
        height: 400,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
	  google.visualization.events.addListener(chart, 'ready', function () {
		  $.ajax({
			type: 'POST',
			url: 'save2.php',
			data: {
			  // send image string as data
			  imgStr: chart.getImageURI()
			},			
		  }).success(function(response) {
			console.log('image saved');
		  });
	  });
	  
      chart.draw(view, options);
	  
	  	  	
  }
  </script>

  
  
  
  	<script type="text/javascript">
	<!--
	function newPage(num) {
	var url=new Array();
	url[0]="search1.php";
	window.location=url[num];``
	}
	//
	</script>
  
  
</HEAD>
<BODY>

<H1>National Water Company - Avaya CMS Web Charts</H1>
<H2>Chart #1</H2>

<HR>

		
		<div id="columnchart_values" > 
  </div>
  
	
</br>




  
  
	  <script>

	</script>
  
</BODY>
<!--<h6 align="center" >Developed by Rolly Falco Villacacan | All Rights Reserved</h6>-->
</HTML>