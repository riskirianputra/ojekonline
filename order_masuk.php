<?php require "menu_driver.php" ?>

<?php
	$koneksi = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
	mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

	$id_driver = $_SESSION['users_id'];
	//echo $id_driver; die();
	$sql = "SELECT passenger.id,
			users.nama,
			users.email,
			passenger.nohp, 
			pemesanan.latlang_jemput, 
			pemesanan.latlang_tujuan, 
			pemesanan.distance, 
			pemesanan.tarif
			FROM passenger 
			INNER JOIN users 
			ON passenger.users_id = users.id
			INNER JOIN pemesanan
			ON passenger.id = pemesanan.passenger_id 
			order by pemesanan.id DESC limit 1 ";

	$qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());

	$hasil = mysql_fetch_assoc($qry);
?>
<div class="container">
	<table id="table_id" class="display">
	    <thead>
	        <tr>
	            <th>Nama</th>
	            <th>Email</th>
	            <th>No. HP</th>
	            <th>Lat Lang Jemput </th>
	            <th>Lat Lang Tujuan</th>
	            <th>Jarak</th>
	            <th>Tarif</th>
	            <th>Aksi</th>
	        </tr>
	    </thead>
	    <tbody>
	        <tr>
	            <td><?php echo $hasil['nama']; ?></td>
	            <td><?php echo $hasil['email']; ?></td>
	            <td><?php echo $hasil['nohp']; ?></td>
	            <td><?php echo $hasil['latlang_jemput']; ?></td>
	            <td><?php echo $hasil['latlang_tujuan']; ?></td>
	            <td><?php echo $hasil['distance']; ?> Km</td>
	            <td><?php echo $hasil['tarif']; ?></td>
	            <td>
	            	<form method = "post" action = "">
	            		<input type="submit" class="btn btn-sm btn-success" name="btnambil" value="Ambil">
	            		<input type="submit" class="btn btn-sm btn-danger" name="btntolak" value="Tolak">
	            	</form>
	            </td>
	        </tr>
	    </tbody>
	</table>
</div>
<?php
	if (isset($_POST['btnambil']))
	{
		$koneksi = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
		mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");
		$sql = "UPDATE pemesanan set status = 'Orderan di terima' where passenger_id = " .$hasil['id'];
		$qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());

		$sql_select = "SELECT * from pemesanan where passenger_id = " .$hasil['id'];
		$qry_select = mysql_query($sql_select, $koneksi) or die ("SQL Error !!".mysql_error());
		$result = mysql_fetch_assoc($qry_select);

		/*if ($result['status']=='Orderan di terima')
		{
			echo '<input type="submit" class="btn btn-sm btn-success" name="btnambil" value="Ambil" disabled><i class="fa fa-check-circle"></i> <input type="submit" class="btn btn-sm btn-danger" name="btntolak" value="Tolak" disabled><i class="fa fa-minus-circle"></i>';
		}*/
		if ($qry)
		{	
			echo "<div class='container'>
			<p class = 'alert alert-success'> Orderan telah anda terima, silahkan lakukan penjemputan </p>
			</div>" ;
			//header('location:main_driver.php');
		}
	}
	else if (isset($_POST['btntolak']))
	{
		$koneksi = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
		mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");
		$sql = "UPDATE pemesanan set status = 'Orderan telah di tolak' where passenger_id = " .$hasil['id'];
		$qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());

		if ($qry)
		{
			echo "<p class = 'alert alert-success'> Orderan telah anda tolak !! </p>" ;
			header('location:main_driver.php');
		}
	}	

?>