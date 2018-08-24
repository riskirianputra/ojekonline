<?php
session_start();

		if (isset($_POST['btnsave']))
            {
                $connect = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
                mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

                $id=$_SESSION['passenger_id'];
                $distance = $_POST['jarak'];
                $tarif = $_POST['tarif'];
                $driver_id = $_POST['driver'];
                //print_r($driver_id); die();
                $sql = "UPDATE pemesanan set distance = '$distance' , tarif = '$tarif' , driver_id = '$driver_id' WHERE passenger_id='$id'";
                $qry = mysql_query($sql, $connect) or die ("SQL Error !!".mysql_error());
                $last_ID = mysql_insert_id($connect);
                if ($qry)
                {
                	header('location:main_passenger.php');
                }
            }
?>