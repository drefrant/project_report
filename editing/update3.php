<?php
$con = mysql_connect( 'localhost', 'root', '' );
$db = mysql_select_db( 'project_report' , $con );
if ( $db == false )
    die( mysql_error() );

if ( isset( $_POST["submit"] ) ) {
    if ( isset( $_POST["delete"] ) ) {
        $list = implode( "," , $_POST["delete"] );
        $sql = " delete  from report_sumedang WHERE GaID IN ($list)";
        mysql_query( $sql ) or die( mysql_error() );
    }


    echo '<pre>';
    print_r( $_POST );
    echo '</pre>';
    foreach( $_POST["GaID"] AS $GaID ) {
       // echo 'ID is ' . $id . '<br />';
        //echo 'Field1 is ' . $_POST["field1"][$id] . "<br />";
        //echo 'Field2 is ' . $_POST["field2"][$id] . "<br />";

        $GaName = mysql_real_escape_string( $_POST["GaName"][$GaID] );
        $FdcDate = mysql_real_escape_string( $_POST["FdcDate"][$GaID] );
        $ProjectFile = mysql_real_escape_string( $_POST["ProjectFile"][$GaID] );
        $Activities = mysql_real_escape_string( $_POST["Activities"][$GaID] );
        $Hours = mysql_real_escape_string( $_POST["Hours"][$GaID] );
        $PlotID = mysql_real_escape_string( $_POST["PlotID"][$GaID] );
        $CarMileage = mysql_real_escape_string( $_POST["CarMileage"][$GaID] );
        $Status = mysql_real_escape_string( $_POST["Status"][$GaID] );
        $Comment = mysql_real_escape_string( $_POST["Comment"][$GaID] );
        $update = " UPDATE `report_sumedang` SET `GaName` = '$GaName', `FdcDate` = '$FdcDate', `ProjectFile` = '$ProjectFile', `Activities` = '$Activities', `Hours` = '$Hours', `PlotID` = '$PlotID', `CarMileage` = '$CarMileage', `Status` = '$Status', `Comment` = '$Comment' WHERE
				  `GaID` =$GaID LIMIT 1 ; ";
        mysql_query( $update ) or die( mysql_error() );
    }
}

//$sql = " select * from report_sumedang ";
//$res = mysql_query( $sql ) or die( mysql_error() );
// mendefinisikan nilai limit
   $lim = 20;

   // mendefinisikan halaman pertama, jika tidak ada klik halaman maka diisi 0
   $hal	= $_GET['hal'] ? $_GET['hal'] : 0;

   // query untuk mendapatkan jumlah seluruh row
   $sql = "SELECT * FROM report_sumedang"; 
   $res = mysql_query($sql) or die (mysql_error()); 
   $jml = mysql_num_rows($res);

   // menghitung maksimal halaman
   $max = ceil($jml/$lim);

   // melakukan query limit
   $sqlLimit = "SELECT * FROM report_sumedang LIMIT $hal, $lim"; 
   $resLimit = mysql_query($sqlLimit) or die (mysql_error());

echo "<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>";
echo "<tr align='center'>";
echo "<th>No</th>";
echo "<th>GA Name</th>";
echo "<th>Fdc Date</th>";
echo "<th>Project File</th>";
echo "<th>Activities</th>";
echo "<th>Hours</th>";
echo "<th>Plot ID</th>";
echo "<th>Car Mileage</th>";
echo "<th>Status</th>";
echo "<th>Comment</th>";
echo "<th>Delete</th>";
echo "<th>Submit</th>";

echo "</tr>"; 

if ( mysql_num_rows( $res ) > 0 ) {
    //nomor urut ditambah dengan halaman
    echo '<form method="post">';
    $i = 1+$hal;
    while ( $row = mysql_fetch_assoc( $resLimit ) ) {
    	//if($i%2==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
    	echo
    	   
    	    '<tr>
    		
				<td>' . $row["GaID"] . '</td>
				<td><input type="text" name="GaName[' . $row["GaID"] . ']" value="' . $row["GaName"] . '"></td>
				<td><input type="text" name="FdcDate[' . $row["GaID"] . ']" value="' . $row["FdcDate"] . '"></td>
				<td><input type="text" name="ProjectFile[' . $row["GaID"] . ']" value="' . $row["ProjectFile"] . '"></td>
				<td><input type="text" name="Activities[' . $row["GaID"] . ']" value="' . $row["Activities"] . '"></td>
				<td><input type="text" name="Hours[' . $row["GaID"] . ']" value="' . $row["Hours"] . '"></td>
				<td><input type="text" name="PlotID[' . $row["GaID"] . ']" value="' . $row["PlotID"] . '"></td>
				<td><input type="text" name="CarMileage[' . $row["GaID"] . ']" value="' . $row["CarMileage"] . '"></td>
				<td><input type="text" name="Status[' . $row["GaID"] . ']" value="' . $row["Status"] . '"></td>
				<td><input type="text" name="Comment[' . $row["GaID"] . ']" value="' . $row["Comment"] . '"></td>
				<input type="hidden" name="GaID[]" value="' . $row["GaID"] . '">
				<td><input type="checkbox" name="delete[]" value="' . $row["GaID"] . '"></td>
    			<td><input type="submit" name="submit" value="Submit"></td>
    		
    		</tr>';
    		
    		$i++;
    	}
   	 		
	}
	
	echo '</table>';
	echo '</form>';
?>

<table width='100%'>
	<tr>
		<td>Total Reports : <?=$jml;?></td>
		<td align="right">
			Page :
			<?php
				for ($h = 1; $h <= $max; $h++) {
					$List[$h] = $lim * $h - $lim;
					echo " <a href='javascript:void(0)' ";?> onClick="$.get('update3.php?hal=<?=$List[$h]?>', null, function(row) {$('#row').html(row);})" <? echo">".$h."</a> ";
				}
			?>
		</td>
	</tr>
</table>
