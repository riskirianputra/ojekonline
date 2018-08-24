<?php
        session_start();
            if (isset($_POST['btnsave']))
            {
                $connect = mysql_connect('localhost','root','','db_ojek') or die (mysql_error());
                mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");

                $latlang_tujuan = $_POST['lat'] .','. $_POST['lang'];
                $id=$_SESSION['passenger_id'];

                //echo $latlang_tujuan; die();

                $sql = "UPDATE pemesanan set latlang_tujuan = '$latlang_tujuan' WHERE passenger_id = '$id'";
                $qry = mysql_query($sql, $connect) or die ("SQL Error !!".mysql_error());
                $last_ID = mysql_insert_id($connect);
                if ($qry)
                {
                   /* require_once('distance.php');
                    $sql = "SELECT latlang_jemput, latlang_tujuan from pemesanan WHERE id='$id'";
                    $qry = mysql_query($sql, $connect) or die ("SQL Error !!".mysql_error());

                    $data=mysql_fetch_array($qry);
                    //Jemput
                    $latlang_jemput = @$data['latlang_jemput'];
                    $latlang_tujuan = @$data['latlang_tujuan'];

                    $newLatlang_jemput = explode(",", $data['latlang_jemput'],2);
                    $lat_jemput = $newLatlang_jemput[0];
                    $lang_jemput = $newLatlang_jemput[1];

                    $newLatlang_tujuan = explode(",", $data['latlang_tujuan'],2);
                    $lat_tujuan = $newLatlang_tujuan[0];
                    $lang_tujuan = $newLatlang_tujuan[1];
                    //print_r($newLatlang_jemput);
                    $jarak = distance($lat_jemput, $lang_jemput, $lat_tujuan, $lang_tujuan, "K");
                    //echo $jarak; die();
                    mysql_free_result($qry);
                    mysql_close();
                    //echo $jarak; die();
                   
                    $connect = mysql_connect('localhost','root','') or die (mysql_error());
                    if (!$connect) {
                        die('tidak terhubung :' .mysql_error());
                    }
                    $select_db=mysql_select_db('testing') or die ("Tidak ada Database yang dipilih !!");
                    if (!$select_db) {
                        die('database tidak ditemukan :'.mysql_error());
                    }

                    $sql_update = "UPDATE pemesanan set distance = '1000' WHERE id='1'";
                    //die($sql_update);
                    $qry_update = mysql_unbuffered_query($sql, $connect);
                    //$lock = mysql_affected_rows($connect);
                    //die($lock);
                    //echo $qry_update; die();
                    //print_r($qry_update); die();*/
                    header('location:pilih_driver.php');
                    /*$tarif = $jarak * 4000;
                    echo round($tarif);*/
                }

                //Cek Password
                /*if ($nm_user == NULL)
                {
                    echo "Nama tidak boleh kosong";
                    //redirect 
                    header('location:?user=pemesanan');
                }
                else
                {
                    $sql = 'insert into pemesanan (id, nama, email, nohp) values 
                    ("'.$id_pemesanan.'", "'.$nm_user.'", "'.$email_user.'", "'.$nohp.'")';

                    mysql_query($sql, $connect) or die ("SQL Error !!".mysql_error());
                    //header('location:?user=penjemputan');
                }*/
            }
        ?>