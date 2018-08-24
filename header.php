<?php
session_start();
if(!isset($_SESSION['username']))
{
   header('location:login_users.php'); 
}
else
{
   $id = @$_SESSION['id']; 
   $username = $_SESSION['username'];
   $role_id = $_SESSION['role_id'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery-gmaps-latlon-picker.css">
  <link rel="stylesheet" type="text/css" href="datatables/DataTables/css/dataTables.jqueryui.min.css">
  <link rel="stylesheet" type="text/css" href="datatables/DataTables/css/dataTables.semanticui.min.css">
  <title>Aplikasi Ojek</title>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhd4Fp9TGoKtPwqWy6jacJkmSIeu6zZtU&sensor=false"></script>
  <script src="bootstrap/js/jquery-gmaps-latlon-picker.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aplikasi Ojek</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="penjemputan.php">Pemesanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pembayaran_passenger.php">Pembayaran</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="btn btn-outline-success my-2 my-sm-0 fa fa-user fa-fw" type="submit" value="<?php echo $username ?>">
      <p>&nbsp;</p>
      <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php">Logout</a>
    </form>
  </div>
</nav>
</body>
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-gmaps-latlon-picker.js"></script>
</html>