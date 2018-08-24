<?php require_once "header.php" ?>
<?php
	$koneksi = mysql_connect('localhost','root','','db_ojek');
	mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

	$sql = "SELECT pemesanan.id, users.nama, users.email, passenger.nohp, pemesanan.tarif, pemesanan.status from pemesanan JOIN passenger ON pemesanan.passenger_id = passenger.id JOIN users ON passenger.users_id = users.id where pemesanan.status = 'Orderan di terima' ORDER by pemesanan.id DESC limit 1 	";
	$qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());

	$hasil = mysql_fetch_assoc($qry);
	//print_r($hasil); die();
?>

<div class="container">
	<h5>Data Pemesanan</h5>
	<form method="POST" action="">
		<div class="form-row">
			<div class="col">
				<label>ID Pemesanan</label>
			</div>
			<div class="col">
				<?php echo $hasil['id']; ?>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Nama</label>
			</div>
			<div class="col">
				<?php echo $hasil['nama']; ?>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Email</label>
			</div>
			<div class="col">
				<?php echo $hasil['email']; ?>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>No Hp</label>
			</div>
			<div class="col">
				<?php echo $hasil['nohp']; ?>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Tarif / Harga</label>
			</div>
			<div class="col">
				<b><?php echo $hasil['tarif']; ?></b>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<label>Status Pemesanan</label>
			</div>
			<div class="col">
				<?php echo $hasil['status']; ?>
			</div>
		</div>
		<div class="form-row">
			<div class="col">
				<input type="submit" class="btn btn-md btn-outline-success" name="btnbayar" value="Bayar">
			</div>
		</div>
	</form>
</div>
<?php
	if (isset($_POST['btnbayar']))
	{
		$koneksi = mysql_connect('localhost','root','','db_ojek');
		mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

		$sql_bayar = "INSERT into pembayaran (pemesanan_id, tarif) values (";
		$sql_bayar .= "'".$hasil['id']."',";
		$sql_bayar .= "'".$hasil['tarif']."')";
		$qry_bayar = mysql_query($sql_bayar, $koneksi) or die ("SQL Error !!".mysql_error());
		//print_r($sql_bayar); die();

		if ($qry_bayar)
		{
			echo "<p class='alert alert-success'>Pembayaran Berhasil</p>";
		}
		else
		{
			mysql_error();
		}
	}
?>