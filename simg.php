<?php  //$mm = $_GET['mm']; ?>
<?php  //$dd = $_GET['dd']; ?>
<?php  //$yy = $_GET['yy']; ?>




<?php 
	$mm = "03";
	$dd = "23";
	$yy = "2019";
	//echo $mm." ".$dd." ".$yy;

	include "getData0.php";
?>


<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>

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
        title: "Call Vol/Hr ( <?php //echo "$mm/$dd/$yy"; ?> )",    
        height: 400,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>


</head>
<body>
	<div id="html-content-holder" style="background-color: #F0F0F1; color: #00cc65; 
        padding: 25px; padding-top: 10px;">
        <strong>Codepedia.info</strong><hr/>
        <h3 style="color: #3e4b51;">
            Html to canvas, and canvas to proper image
        </h3>
        <p style="color: #3e4b51;">
            <b>Codepedia.info</b> is a programming blog. Tutorials focused on Programming ASP.Net,
            C#, jQuery, AngularJs, Gridview, MVC, Ajax, Javascript, XML, MS SQL-Server, NodeJs,
            Web Design, Software</p>
        <p style="color: #3e4b51;">
            <b>html2canvas</b> script allows you to take "screenshots" of webpages or parts
            of it, directly on the users browser. The screenshot is based on the DOM and as
            such may not be 100% accurate to the real representation.
			<div id="columnchart_values" ></div> 
        </p>		
    </div>
	
    <input id="btn-Preview-Image" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <br/>
    <h3>Preview :</h3>
    <div id="previewImage">
	
	
	
    </div>


<script>
$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
</body>
</html>