<?php
$link = mysqli_connect("localhost", "avayaadmin", "Sxdc123456", "avayadb");
$result = mysqli_query($link, "SELECT * FROM logs where sitename like 'riyadh' and hour between '1' and '2'");
#$result = mysqli_query($link, "SELECT * FROM logs ");
$t1am = mysqli_num_rows($result);
echo $num_rows;
?>

<!DOCTYPE html>
<html>
<body>





<h1>My First Heading</h1>
<p>My first paragraph.</p>



<table>
    <tr>
        <td>Date</td>
		<td colspan="5">d</td>
    </tr>
	<tr>
        <td colspan="2">Date</td>
		<td>d</td>
		<td>d</td>
    </tr>
	
	<tr>
        <td colspan="3">d</td>
    </tr>

	
	
    <tr>
        <td>s</td>
        <td>d</td>
        <td>d</td>
        <td>d</td>
        <td>d</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>



</body>
</html>