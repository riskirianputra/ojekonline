<?php
require_once ('config.php');

if (isset($_POST['btndaftar']))
{
	$koneksi = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
	mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

	//$id = $_REQUEST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$nohp = $_POST['nohp'];
	$role_users = $_POST['role_users'];

	/*$username = "admin";
	$password = "admin";
	$nama = "tuyul";
	$email = "email@a.a";
	$role_users = "2";*/

	$sql1 = "INSERT INTO users(username, password, nama, email, role_id) values (";
	$sql1 .= "'" .$username. "',";
	$sql1 .= "'" .$password. "',";
	$sql1 .= "'" .$nama. "',";
	$sql1 .= "'" .$email. "',";
	$sql1 .= "'" .$role_users. "')";

	$qry1 = mysql_query($sql1, $koneksi) or die ("SQL Error !!".mysql_error());

	if ($qry1)
	{
		$last_ID = mysql_insert_id($koneksi);

		if ($role_users=="2")
		{
			$sql2 = "INSERT INTO passenger (nohp, users_id) values (";
			$sql2 .= $nohp. ",";
			$sql2 .= $last_ID. ")";

			$qry2 = mysql_query($sql2, $koneksi) or die ("SQL Error !!".mysql_error());
			header('location:login_users.php');
		}
		else
		{
			$sql3 = "INSERT INTO driver (nohp, users_id) values (";
			$sql3 .= $nohp. ",";
			$sql3 .= $last_ID. ")";

			$qry3 = mysql_query($sql3, $koneksi) or die ("SQL Error !!".mysql_error());
			header('location:login_users.php');
		}
	}
}

?>