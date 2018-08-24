<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <title>Aplikasi Ojek</title>
</head>
<body>
  <div class="bg"></div>
  <div class="bg2"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aplikasi Ojek</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="dropdown">
        <button class="btn btn-outline-info my-2 my-sm-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" data-toggle="modal" data-target="#modalDriver">Registrasi Driver</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#modalPassenger">Registrasi Passenger</a>
        </div>
      </div>
      <p>&nbsp;</p>
      <a class="btn btn-outline-success my-2 my-sm-0" href="login_users.php">Login</a>
    </form>
  </div>
</nav>


<!-- MODAL DRIVER -->
<div class="modal fade" id="modalDriver" tabindex="-1" role="dialog" aria-labelledby="modalDriverLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDriverLabel">Registrasi Driver</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
        <form method="post" action="act_reg_users.php">
          <div class="col-sm-12">
            <div class="row form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="row form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="row form-group">
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="row form-group">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="row form-group">
              <input type="text" class="form-control" name="nohp" placeholder="No HP">
            </div>
            <div class="row form-group">
              <input type="hidden" class="form-control" name="role_users" value="1">
            </div>
            <div class="row form-group">
              <input type="submit" class="btn btn-md btn-info form-control" name="btndaftar" value="Daftar">
              <a href="login_users.php"><u>Sudah Punya Akun.</u>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- MODAL PASSENGER -->
<div class="modal fade" id="modalPassenger" tabindex="-1" role="dialog" aria-labelledby="modalPassengerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPassengerLabel">Registrasi Passenger</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="act_reg_users.php">
          <div class="col-sm-12">
            <div class="row form-group">
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="row form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="row form-group">
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="row form-group">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="row form-group">
              <input type="text" class="form-control" name="nohp" placeholder="No HP">
            </div>
            <div class="row form-group">
              <input type="hidden" class="form-control" name="role_users" value="2">
            </div>
            <div class="row form-group">
              <input type="submit" class="btn btn-md btn-info form-control" name="btndaftar" value="Daftar">
              <a href="login_users.php"><u>Sudah Punya Akun.</u>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>

