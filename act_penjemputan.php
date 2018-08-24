<?php
    session_start();
            if (isset($_POST['btnsave']))
            {
                $connect = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
                mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

                $latlang_jemput = $_POST['lat'] .','. $_POST['lang'];
                $passenger_id = $_SESSION['passenger_id'];

                $sql = "INSERT INTO pemesanan (latlang_jemput, passenger_id) values (";
                $sql .= "'".$latlang_jemput."',";
                $sql .= "'". $passenger_id ."')";                
                $qry = mysql_query($sql, $connect) or die ("SQL Error !!".mysql_error());

                $last_ID = mysql_insert_id($connect);

                if ($qry)
                {
                    //$_GET['id']=$last_ID;
                	header('location:tujuan.php');
                }
                else
                {
                    mysql_error();
                }
            }
        ?>