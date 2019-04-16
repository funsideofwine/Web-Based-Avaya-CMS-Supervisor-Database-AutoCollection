<?php  $mo = $_GET['mo']; ?>
<?php  $dd = $_GET['dd']; ?>
<?php  $yy = $_GET['yy']; ?>



<?php

$mo = "03";
$dd = "24";
$yy = "2019";


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



<?php 

$sql = "SELECT * FROM avaya_cms_report_main WHERE
		DAY(date1) = '".$dd."' 
		and MONTH(date1) = '".$mo."' 
		and YEAR(date1) = '".$yy."' 
		ORDER BY 'date1'  ASC";
			
$result = $db_con->query($sql);
if (!$result) die('Couldn\'t fetch records');
$num_fields = mysql_num_fields($result);
$headers = array();
for ($i = 0; $i < $num_fields; $i++) {
    $headers[] = mysql_field_name($result , $i);
}
$fp = fopen('php://output', 'w');
if ($fp && $result) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');
    fputcsv($fp, $headers);
    while ($row = $result->fetch_array(MYSQLI_NUM)) {
        fputcsv($fp, array_values($row));
    }
    die;
}