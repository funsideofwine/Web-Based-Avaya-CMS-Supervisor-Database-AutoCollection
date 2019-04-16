<?php
/*******************************************/
//initialize session
set_time_limit (600);
session_start();

if(!isset($_SESSION['u_email'])) {
  header("location: login1.php?header=Session&msg=\"Please Login\"");
  exit();
}
if($_SESSION['user_stat']==0) {
  header("location: login1.php?header=Session&msg=\"Account is not Active!\"");
  exit();
}

if($_SESSION['access_lvl']==0) {
  header("location: login1.php?header=Session&msg=\"Access Denied, Please Contact! The Administrator (4169)\"");
  exit();
}
?>




<HTML>
<HEAD>
<TITLE>
National Water Company - Avaya CMS Web Reporting
</TITLE>
<META NAME="author" CONTENT="">


	<script type="text/javascript">
	<!--
	function newPage(num) {
	var url=new Array();
	url[0]="logout.php";
	window.location=url[num];
	}
	//
	</script>


</HEAD>
<BODY>
<H1>National Water Company - Avaya CMS Web Reporting</H1>
<H2>Query Page</H2>
From the dropdown list you can select specific query parameter(s) or fill up the field required for your requirements.. otherwise leave it "empty" to query all row(s)
<HR>
<FORM ACTION="queryreport.php" METHOD="POST"/>

Call ID:&nbsp;<input type="text" name="call_id" >&nbsp;&nbsp;&nbsp;
Calling Party:&nbsp;<input type="text" name="calling_party" >&nbsp;&nbsp;&nbsp;
Dialed Number:&nbsp;<input type="text" name="dialed_number" >&nbsp;&nbsp;&nbsp;
</br></br>


Year:&nbsp;&nbsp;&nbsp;
<select name="yy">
<option value="%%" selected="selected" >*Select</option>
<option value="2019" >2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
</select>

&nbsp;&nbsp;&nbsp;
Month:&nbsp;&nbsp;&nbsp;
<select name="mm">
<option value="%%" selected="selected">*Select</option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value="3">Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
&nbsp;&nbsp;&nbsp;
Day:&nbsp;&nbsp;&nbsp;
<select name="dd">
<option value="%%" selected="selected">*Select</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
&nbsp;&nbsp;&nbsp;


Start Time Hour:&nbsp;&nbsp;&nbsp;
<select name="hh">
<option value="%%">*Optional</option>
<option value="1">01</option>
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="00">24</option>
</select>

<BR>
<BR>
<INPUT TYPE="SUBMIT" Value="EXECUTE"/>

<INPUT TYPE="RESET" Value="RESET"/>
<INPUT TYPE="SUBMIT" Value="SYNC DATA NOW" NAME="REFRESH"/>
<INPUT TYPE="SUBMIT" Value="SEND REPORT" NAME="REPORT"/>
<INPUT TYPE="BUTTON" Value="SIGNOUT" onclick="newPage(0)" />

</FORM>

</BODY>
<!--<h6 align="center" >Developed by Rolly Falco Villacacan | All Rights Reserved</h6>-->
</HTML>
