<?php require_once "header.php" ?>
    <div class="container">
        <div id="wrapper">
            <div id="page-wrapper">
                <?php
                    $koneksi = mysql_connect('localhost','root','','db_ojek');
                    mysql_select_db('db_ojek') or die ("Tidak ada Database yang dipilih !!");
                    $sql_select = "SELECT driver.id, users.nama from driver JOIN users ON driver.users_id = users.id";
                    $qry_select = mysql_query($sql_select, $koneksi) or die ("SQL Error !!".mysql_error());
                    //$driver = mysql_fetch_assoc($qry_select);
                    $id=$_SESSION['passenger_id'];
                    /*$driver = mysql_num_rows($qry_select);
                    echo $driver; die();*/
                    
                    //print_r($driver); die();
                    //echo $_SESSION['passenger_id']; die();
                    require_once('distance.php');
                    $sql = "SELECT latlang_jemput, latlang_tujuan from pemesanan WHERE passenger_id='$id'";
                    $qry = mysql_query($sql, $koneksi) or die ("SQL Error !!".mysql_error());

                    $data=mysql_fetch_array($qry);

                    //print_r($data); die();
                    //Jemput
                    $latlang_jemput = $data['latlang_jemput'];
                    $latlang_tujuan = $data['latlang_tujuan'];
                    //print_r($latlang_tujuan); die();

                    $newLatlang_jemput = explode(",", $data['latlang_jemput'],2);
                    $lat_jemput = $newLatlang_jemput[0];
                    $lang_jemput = $newLatlang_jemput[1];
                    //print_r($newLatlang_jemput[1]); die();

                    $newLatlang_tujuan = explode(",", $data['latlang_tujuan'],2);
                    $lat_tujuan = $newLatlang_tujuan[0];
                    $lang_tujuan = $newLatlang_tujuan[1];
                    //print_r($newLatlang_tujuan); die();
                    
                    $jarak = distance($lat_jemput, $lang_jemput, $lat_tujuan, $lang_tujuan, "K");
                    //echo $jarak; die();
                    mysql_free_result($qry);
                    mysql_close();
                    //echo $jarak; die();
                    $distance = floor($jarak);
                    $tarif = $distance * 4000 ;

                    //echo $jarak; die();
                ?>
                <h5>Pilih Driver</h5>
                    <form class="form-horizontal" method="post" action="act_pilih_driver.php">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Driver</label>
                                    <select class="form-control" name="driver">
                                       <?php
                                       while ($data_driver = mysql_fetch_assoc($qry_select))
                                        {
                                            echo "<option value=$data_driver[id]>$data_driver[nama]</option>";
                                        }
                                       ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Jarak</label>
                                    <input type="jarak" name="jarak" class="form-control" value=<?php echo $distance ?>>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Tarif</label>
                                    <input type="jarak" name="tarif" class="form-control" value="Rp. <?php echo $tarif ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input type="submit" class="btn btn-success" value="Pesan" name="btnsave">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/raphael.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/morris-data.js"></script>
        <script src="js/startmin.js"></script>

    </body>
</html>