<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition ">
  <script>
    start_loader()
  </script>
  <style>
    html, body{
      height:calc(100%) !important;
      width:calc(100%) !important;
    }
    body{
      background-image: url("<?php echo validate_image($_settings->info('cover')) ?>");
      background-size:cover;
      background-repeat:no-repeat;
    }
    .login-title{
      text-shadow: 2px 2px black
    }
    #login{
      flex-direction:column !important
    }
    #logo-img{
        height:100px;
        width:100px;
        object-fit:scale-down;
        object-position:center center;
        border-radius:100%;
    }
    #login .col-7,#login .col-5{
      width: 100% !important;
      max-width:unset !important
    }
  </style>
  <nav style="position: absolute; width: 99%; z-index: 2000;">
        <div class="row" style="margin-bottom: 10px; margin-top: 5px;">
            <button class="btn btn-success bg-green col-1">
                <a href="../outsiders.php">To Outsiders</a>
            </button>
            <div class="col-11"></div>
        </div>
        <div class="row">
            <button class="btn btn-success bg-green col-md-1">
                <a href="../login.php">To Student</a>
            </button>
            <div class="col-11"></div>
        </div>
    </nav>
  <div class="h-100 d-flex align-items-center w-100"  id="login">
    <div class="col-7 h-100 d-flex align-items-center justify-content-center">
      <div class="w-100">
        <center><img src="../uploads/tac.png" style="transform: scale(0.8);"></center>
      </div>
      
    </div>
    <div class="col-5 h-100 bg-gradient" style="position: relative; top: -150px;">
      <div class="d-flex w-100 h-100 justify-content-center align-items-center">
        <div class="card col-sm-12 col-md-6 col-lg-3 card-outline card-success">
          <div class="card-header">
            <h4 class="text-purle text-center"><b>Login - Administrator</b></h4>
          </div>
          <div class="card-body">
            <form id="login-frm" action="" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" autofocus name="username" placeholder="Username">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <a href="<?php echo base_url ?>" style="color: green;">Go to Website</a>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-success btn-block">Sign In</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>