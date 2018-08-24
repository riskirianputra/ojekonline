<?php
session_start();

if (isset($_POST['btnmasuk']))
{
	$_SESSION['username'] = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['role_id'] = "";
	$_SESSION['users_id'] = "";

	$koneksi = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
	mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

	$sql = "SELECT users.id, users.username, users.password, users.role_id from users WHERE users.username ='" .$_SESSION['username']."'";
	$qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());

	if (mysql_num_rows($qry) == 0)
	{
		echo "Gagal Login !!";
	}
	else
	{
		while ($data = mysql_fetch_assoc($qry))
		{
			$_SESSION['users_id'] = $data['id'];
			$_SESSION['role_id'] = $data['role_id'];

			//print_r($_SESSION); die();
			if ($data['role_id'] == "1")
			{
				header('location:main_driver.php');
			}
			else
			{
				$sql_select = "SELECT passenger.id, passenger.nohp, passenger.users_id from passenger INNER JOIN users ON passenger.users_id = users.id where users.username ='" .$_SESSION['username']."'";
				$qry_select = mysql_query($sql_select, $koneksi) or die ("SQL Error !!".mysql_error());
				$passenger = mysql_fetch_assoc($qry_select);
				$_SESSION['passenger_id'] = $passenger['id'];
				header('location:main_passenger.php');
			}
		}
	}
}
?>