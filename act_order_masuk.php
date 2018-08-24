<?php
	session_start();

	if (isset($_POST['btnambil']))
	{
		$koneksi = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
		mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");
		echo $hasil['passenger_id']; die();
		$sql = "UPDATE pemesanan set status = 'Orderan di terimaa' where" .$hasil['passenger_id']. " = '1'";
		$qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());


		if ($qry)
		{
			echo "<p class = alert alert-succes> Orderan telah anda terima, silahkan lakukan penjemputan </p>";
			header('location:order_masuk.php');
		}
	}

?>