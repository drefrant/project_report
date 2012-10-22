<?php
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
<div class="innertube"><form action="input.php" name="formfrmAdd" method="post" onsubmit="return confirm_entry();" >
Total Report :
<select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
<?
for($i=1;$i<=1000;$i++)
{
if($_GET["Line"] == $i)
{
$sel = "selected";
}
else
{
$sel = "";
}
?>
<option value="<?=$_SERVER["PHP_SELF"];?>?Line=<?=$i;?>" <?=$sel;?>><?=$i;?></option>
<?
}
?>
</select>
<br>

</br>
<table id="test">
<tr>
<!--<th width="198"> <div align="center">GA ID </div></th>//-->
<th><div>GA NAME </div></th>
<th><div>FDC DATE </div></th>
<th><div>PROJECT FILE </div></th>
<th><div>ACTIVITY </div></th>
<th><div>HOUR </div></th>
<th><div>PLOT ID </div></th>
<th><div>CAR MILEAGE </div></th>
<th><div>STATUS </div></th>
<th><div>COMMENT </div></th>
</tr>
<?
$line = $_GET["Line"];
if($line == 0){$line=1;}
for($i=1;$i<=$line;$i++)
{
?>
<tr>

<td><div><select name="txtGaName<?=$i;?>"></div>
  <option value="0" >
  <option value="Arie Febrianto" >Arie Febrianto
  <option value="Diensa Refranto" >Diensa Refranto
  <option value="Ika Rahayu" >Ika Rahayu
  <option value="Mohammad Rezi" >Mohammad Rezi
  <option value="Vindy Triany" >Vindy Triany
  <option value="other">Other 
</select>
</td>
<td>
<?
$today = date("Y-m-d"); 

?>
<div><select name="txtFDCDate<?=$i;?>"></div> 
  <option value="<?echo $today;?>" ><?echo $today;?></option>
</select>
</td>
<td><input type="text" name="txtProjectFile<?=$i;?>"></td>
<td>
<div><select name="txtActivity<?=$i;?>"></div> 
  <option value="" > </option>
  <option value="FDC NAV AND POI" >FDC NAV AND POI</option>
  <option value="FDC DOWNTIME" >FDC DOWNTIME</option>
  <option value="FDC PREPARATION" >FDC PREPARATION</option>
  <option value="FDC POSPROCESSING" >FDC POSPROCESSING</option>
  <option value="FDC QIL" >FDC QIL</option>
  <option value="FDC TRAVEL" >FDC TRAVEL</option>
</select>
</td>
<td>
<div><select name="txtHour<?=$i;?>"></div> 
  <option value="0" > </option>
  <option value="0.5" >0.5</option>
  <option value="1" >1</option>
  <option value="2" >2</option>
  <option value="2.5" >2.5</option>
  <option value="3" >3</option>
  <option value="3.5" >3.5</option>
  <option value="4" >4</option>
  <option value="4.5" >4.5</option>
  <option value="5" >5</option>
  <option value="5.5" >5.5</option>
  <option value="6" >6</option>
  <option value="6.5" >6.5</option>
  <option value="7" >7</option>
  <option value="7.5" >7.5</option>
  <option value="8" >8</option>
  <option value="8.5" >8.5</option>
  <option value="9" >9</option>
  <option value="9.5" >9.5</option>
  <option value="10" >10</option>
  <option value="10.5" >10.5</option>
  <option value="11" >11</option>
  <option value="11.5" >11.5</option>
  <option value="12" >12</option>
  <option value="12" >12.5</option>
</select>
</td>
<?
//Select info from MySQL
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="gisservicepower2012"; // Mysql password
$db_name="project_report"; // Database name
$tbl_name="plot_sumedang"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$query = "SELECT grid FROM plot_sumedang";
$result = mysql_query($query);
?>
<td>
<div><select name="txtPlotid<?=$i;?>"></div>
<?
//for each row we get from mysql, echo a form input
while ($row = mysql_fetch_array($result)) {
echo "<option value=\"$row[grid]\">$row[grid]</option>\n";
}
?>
</select>
</td> 
<td><input type="text" name="txtCarMileage<?=$i;?>"></td>
<td>
<div><select name="txtStatus<?=$i;?>"></div> 
  <option value="0" ></option>
  <option value="10%" >10%</option>
  <option value="15%" >15%</option>
  <option value="20%" >20%</option>
  <option value="25%" >25%</option>
  <option value="30%" >30%</option>
  <option value="35%" >35%</option>
  <option value="40%" >40%</option>
  <option value="45%" >45%</option>
  <option value="50%" >50%</option>
  <option value="55%" >55%</option>
  <option value="60%" >60%</option>
  <option value="65%" >65%</option>
  <option value="70%" >70%</option>
  <option value="75%" >75%</option>
  <option value="80%" >80%</option>
  <option value="85%" >85%</option>
  <option value="90%" >90%</option>
  <option value="95%" >95%</option>
  <option value="100%" >100%</option>
</select>
</td>
<td align="left"><input type="text" name="txtComment<?=$i;?>"></td>
</tr>
<?
}
?>
</table>
<br>

</br>
<input type="submit" name="submit" value="submit">
<input type="hidden" name="hdnLine" value="<?=$i;?>">

<!--<a href='php_mysql_multiple_insert3.php'>View Your Report : </a></td>-->
</form>
</div>
</div>
</div>

<div id="footer">Copyright <a href="http://kernel32dl.blogspot.com/">©</a> 2012 | Project Report Sumedang. All Rights Reserved.</div>

</div>
</body>
</html>
