<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project_report"; // Database name 
$tbl_name="test_mysql"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

// Count table rows 
$count=mysql_num_rows($result);
?>

<table width="500" border="0" cellspacing="1" cellpadding="0">
<form name="form1" method="post" action="">
<tr> 
<td>
<table width="500" border="0" cellspacing="1" cellpadding="0">

<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td align="center">
<? $id[]=$rows['id']; ?><? echo $rows['id']; ?>
</td>
<td align="center">
<input name="name[]" type="text" id="name" value="<? echo $rows['name']; ?>">
</td>
<td align="center">
<input name="lastname[]" type="text" id="lastname" value="<? echo $rows['lastname']; ?>">
</td>
<td align="center">
<input name="email[]" type="text" id="email" value="<? echo $rows['email']; ?>">
</td>
</tr>

<?php
}
?>

<tr>
<td colspan="4" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</td>
</tr>
</form>
</table>

<?php

// Check if button name "Submit" is active, do this 
if($Submit){
for($i=0;$i<$count;$i++){
$sql1="UPDATE $db_name.$tbl_name SET $tbl_name.name='$name[$i]', $tbl_name.lastname='$lastname[$i]', $tbl_name.email='$email[$i]' WHERE $tbl_name.id='$id[$i]'";
$result1=mysql_query($sql1);
}
}

if($result1){
header("location:update.php");
}
mysql_close();
?>