<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PROJECT REPORT SUMEDANG</title>
<script type="text/javascript" src="jquery.js"></script>
<script>
	// ketika halaman pertama kali diload, maka akan memanggil file data_barang.php dan dimasukkan pada div id='data'
	$(document).ready(function(){
		$("#row").load("update3.php");
	});
</script>
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
width: 1500px; /*Width of left column*/
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
width: 1500px;
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
	font-size: 12px;
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
background: url('http://localhost/navteq/css-nav.gif') #fff bottom left repeat-x;
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
width:1500px
} 
</style>
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
<div class="innertube">
<br>
<br>
<div id="row"></div>

</div>
</div>
</div>

<div id="footer">Copyright <a href="http://kernel32dl.blogspot.com/">©</a> 2012 | Project Report Sumedang. All Rights Reserved.</div>

</div>
</body>
</html>
