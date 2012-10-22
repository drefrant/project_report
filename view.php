<?php
   // untuk memanggil file koneksi
   $objConnect = mysql_connect("localhost","root","gisservicepower2012") or die(mysql_error());
   $objDB = mysql_select_db("project_report"); 
   
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
?>
<table border='1' width='100%' cellpadding='3' cellspacing='0' style='border-collapse:collapse'>
	<tr align='center'>
		<th>No</th>
		<th>GA Name</th>
		<th>Fdc Date</th>
		<th>Project File</th>
		<th>Activities</th>
		<th>Hours</th>
		<th>Plot ID</th>
		<th>Car Mileage</th>
		<th>Status</th>
		<th>Comment</th>
	</tr>   
<?php
	// nomor urut ditambah dengan halaman
    $i = 1+$hal;
	while ($data = mysql_fetch_array($resLimit)) {
		if($i%2==0) $bg = '#CCCCCC'; else $bg = '#FFFFFF';
		echo 
			"<tr bgcolor = '".$bg."'>
				<td>".$i."</td>
				<td>".$data[GaName]."</td>
				<td>".$data[FdcDate]."</td>
				<td>".$data[ProjectFile]."</td>
				<td>".$data[Activities]."</td>
				<td>".$data[Hours]."</td>
				<td>".$data[PlotID]."</td>
				<td>".$data[CarMileage]."</td>
				<td>".$data[Status]."</td>
				<td>".$data[Comment]."</td>
			</tr>";
		$i++;
	}
?>
</table>
<table width='100%'>
	<tr>
		<td>Total Reports : <?=$jml;?></td>
		<td align="right">
			Page :
			<?php
				for ($h = 1; $h <= $max; $h++) {
					$list[$h] = $lim * $h - $lim;
					echo " <a href='javascript:void(0)' ";?> onClick="$.get('view.php?hal=<?=$list[$h]?>', null, function(data) {$('#data').html(data);})" <? echo">".$h."</a> ";
				}
			?>
		</td>
	</tr>
</table>