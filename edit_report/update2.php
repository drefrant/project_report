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

    //echo '<pre>';
    //print_r( $_POST );
    //echo '</pre>';
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

$sql = " select * from report_sumedang ";
$res = mysql_query( $sql ) or die( mysql_error() );

if ( mysql_num_rows( $res ) > 0 ) {
    echo '<form method="post">';
    while ( $row = mysql_fetch_assoc( $res ) ) {
        echo ' ID : ' . $row["GaID"] . '<br />';
        echo ' GA Name : <input type="text" name="GaName[' . $row["GaID"] . ']" value="' . $row["GaName"] . '"> <br />' . "\n";
        echo ' FDC Date: <input type="text" name="FdcDate[' . $row["GaID"] . ']" value="' . $row["FdcDate"] . '"> <br />' . "\n";
        echo ' Project File : <input type="text" name="ProjectFile[' . $row["GaID"] . ']" value="' . $row["ProjectFile"] . '"> <br />' . "\n";
        echo ' Activities : <input type="text" name="Activities[' . $row["GaID"] . ']" value="' . $row["Activities"] . '"> <br />' . "\n";
        echo ' Hours : <input type="text" name="Hours[' . $row["GaID"] . ']" value="' . $row["Hours"] . '"> <br />' . "\n";
        echo ' Grid : <input type="text" name="PlotID[' . $row["GaID"] . ']" value="' . $row["PlotID"] . '"> <br />' . "\n";
        echo ' Car Mileage : <input type="text" name="CarMileage[' . $row["GaID"] . ']" value="' . $row["CarMileage"] . '"> <br />' . "\n";
        echo ' Status : <input type="text" name="Status[' . $row["GaID"] . ']" value="' . $row["Status"] . '"> <br />' . "\n";
        echo ' Comment : <input type="text" name="Comment[' . $row["GaID"] . ']" value="' . $row["Comment"] . '"> <br />' . "\n";
        echo '<input type="hidden" name="GaID[]" value="' . $row["GaID"] . '">  ' . "\n";
        echo '<input type="checkbox" name="delete[]" value="' . $row["GaID"] . '">  ' . "\n";
        echo "<hr>\n";
    }
    echo '<input type="submit" name="submit" value="Submit">';
    echo '</form>';
}

?>