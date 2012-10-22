<?


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


if (mysql_num_rows($result) > 0 )

	{
		while ( $row=mysql_fetch_assoc($result))
		
		{
			echo $row[id];
			
		}
		
	}

UPDATE  `project_report`.`test_mysql` SET  `name` =  'Jame1' WHERE  `test_mysql`.`id` =2;


?>