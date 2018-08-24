<?php require_once "header.php" ?>
    <div class="container">
        <div id="wrapper">
            <div id="page-wrapper">
                <h5> Pilih Lokasi Penjemputan</h5>
                <fieldset class="gllpLatlonPicker">
                    <form class="form-inline" action="act_penjemputan.php" method="POST">
                        <p>&nbsp;</p>
                        <div class="input-group">
                            <div class="gllpMap">
                                Google Maps
                            </div>
                        </div>
                        <p>&nbsp;</p>
                        <div class="input-group">
                            <input type="text" class="gllpLatitude form-control" value="20" name="lat" />
                            
                            <input type="text" class="gllpLongitude form-control" value="20" name="lang" />
                        </div>
                        <input type="submit" class="btn btn-success" value="Pilih Tujuan" name="btnsave">
                        <br/>
                </fieldset>
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