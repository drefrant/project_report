<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PROJECT REPORT SUMEDANG</title>
<style type="text/css">

body{
margin:0;
padding:0;
background :  #33A1DE
line-height: 1.5em;
}

b{font-size: 110%;}
em{color: red;}

#maincontainer{
width: 1150px; /*Width of main container*/
margin: 0 auto; /*Center container on page*/
}
.logo {
	float: left;
	height: 76px;
	width: 60px;
	margin: 0px;
}
.nmlogo {
	float: right;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	margin-top: 20px;
	padding-right: 5cm;
}

#topsection{
height: 100px; /*Height of top section*/
}

#topsection h1{
margin: 0;

}

#contentwrapper{
float: left;
width: 100%;
}

#contentcolumn{
/*margin-left: 200px; Set left margin to LeftColumnWidth*/
float: left;
width: 1150px; /*Width of left column*/
margin-left: 0px; /*Set left margin to -(MainContainerWidth)*/
background: #33A1DE;
}

#leftcolumn{
float: left;
width: 200px; /*Width of left column*/
margin-left: -840px; /*Set left margin to -(MainContainerWidth)*/
background: #C8FC98;
}

#footer{
clear: left;
width: 100%;
background: #33A1DE;
text-align: center;
padding: 4px 0;
}

#footer a{
color: #FFF;
}

.innertube{
margin: 10px; /*Margins for inner DIV inside each column (to provide padding)*/
margin-top: 0;
}

table{
	font-family: Verdana, Geneva, sans-serif;
	font-size: 15px;
}
</style>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script language='JavaScript'>
function confirm_entry()
{
var yes=confirm('Are you sure you want to submit the form?');
if (yes)
return true ;
else
alert("You decided to not submit the form!");
return false ;
}
</script> 
</head>
<body>
<div id="maincontainer">

<div id="topsection"> <div class="innertube">
 <div class="logo"><img src="http://111.221.40.153/test/NOKIA.JPG" width="150" height="90" /></div>
 <div class="nmlogo"><h1>Project Report Sumedang</h1></div>
 </div></div>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<br>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Project Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td><?php
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PROJECT REPORT SUMEDANG</title>
<style type="text/css">
body{
margin:0;
padding:0;
background :  #33A1DE
line-height: 1.5em;
}
b{font-size: 110%;}
em{color: red;}
#maincontainer{
width: 1150px; /*Width of main container*/
margin: 0 auto; /*Center container on page*/
}
.logo {
	float: left;
	height: 76px;
	width: 60px;
	margin: 0px;
}
.nmlogo {
	float: right;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	margin-top: 20px;
	padding-right: 5cm;
}
#topsection{
height: 100px; /*Height of top section*/
}
#topsection h1{
margin: 0;
}
#contentwrapper{
float: left;
width: 100%;
}
#contentcolumn{
/*margin-left: 200px; Set left margin to LeftColumnWidth*/
float: left;
width: 1150px; /*Width of left column*/
margin-left: 0px; /*Set left margin to -(MainContainerWidth)*/
background: #33A1DE;
}
#leftcolumn{
float: left;
width: 200px; /*Width of left column*/
margin-left: -840px; /*Set left margin to -(MainContainerWidth)*/
background: #C8FC98;
}
#footer{
clear: left;
width: 100%;
background: #33A1DE;
text-align: center;
padding: 4px 0;
}
#footer a{
color: #FFF;
}
.innertube{
margin: 10px; /*Margins for inner DIV inside each column (to provide padding)*/
margin-top: 0;
}
table,td,th
{
border:1px solid #E0EEEE;
}
table
{
width:100%;
}
th
{
height:50px;
}
#nav-menu ul
{
list-style: none;
padding: 0;
margin: 0;
}
#nav-menu li
{
float: left;
margin: 0 0.15em;
}
#nav-menu li a
{
background: url('http://localhost/report2/css-nav.gif') #fff bottom left repeat-x;
height: 2em;
line-height: 2em;
float: left;
width: 9em;
display: block;
border: 0.1em solid #dcdce9;
color: #33A1DE;
text-decoration: none;
text-align: center;
}
#nav-menu li a:hover
{
text-decoration: underline;
}
/* Hide from IE5-Mac \*/
#nav-menu li a
{
float: none
}
/* End hide */
#nav-menu
{
width:1150px
} 
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script language='JavaScript'>
function confirm_entry()
{
var yes=confirm('Are you sure you want to submit the form?');
if (yes)
return true ;
else
alert("You decided to not submit the form!");
return false ;
}
</script> 
</head>
<body>
<?
$objConnect = mysql_connect("localhost","root","gisservicepower2012") or die(mysql_error());
$objDB = mysql_select_db("project_report");
for($i=1;$i<=$_POST["hdnLine"];$i++)
{
if($_POST["txtGaName$i"] != "")
{
$strSQL = "INSERT INTO report_sumedang ";
$strSQL .="(GaID,GaName,FdcDate,ProjectFile,Activities,Hours,PlotID,CarMileage,Status,Comment)";
$strSQL .="VALUES";
$strSQL .="('".$_POST["txtGaID$i"]."', ";
$strSQL .="'".$_POST["txtGaName$i"]."','".$_POST["txtFDCDate$i"]."', ";
$strSQL .="'".$_POST["txtProjectFile$i"]."' ";
$strSQL .=",'".$_POST["txtActivity$i"]."','".$_POST["txtHour$i"]."', ";
$strSQL .="'".$_POST["txtPlotid$i"]."','".$_POST["txtCarMileage$i"]."', ";
$strSQL .="'".$_POST["txtStatus$i"]."' ";
$strSQL .=",'".$_POST["txtComment$i"]."') ";
$objQuery = mysql_query($strSQL);
}
}
mysql_close($objConnect);
?>
<div id="maincontainer">
<div id="topsection"> <div class="innertube">
 <div class="logo"><img src="http://111.221.40.153/test/NOKIA.JPG" width="150" height="90" /></div>
 <div class="nmlogo"><h1>Project Report Sumedang</h1></div>
 </div></div>
<div id="nav-menu">
<ul>
<li><a href="http://111.221.40.153/report2/report.php">Input Report</a></li>
<li><a href="http://111.221.40.153/report2/tampil.php">View Report</a></li>
<li><a href="#">Edit Report</a></li>
<li><a href="#">Download Report</a></li>
<li><a href="http://111.221.40.153/report2/logout.php">Logout</a></li>
</ul>
</div> 
<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<br><br>
Report Completed. 
<br><br>
</div>
</div>
</div>
<div id="footer">Copyright <a href="http://kernel32dl.blogspot.com/">�</a> 2012 | Project Report Sumedang. All Rights Reserved.</div>
</div>
</body>
</html>

</tr>
</table>
</td>
</form>
</tr>
</table>


</div>
</div>
</div>

<div id="footer">Copyright <a href="http://kernel32dl.blogspot.com/">�</a> 2012 | Project Report Sumedang. All Rights Reserved.</div>

</div>
</body>
</html>
