<?php
//require_once "_config/config.php";
/*
    - fungsi looping login adalah untuk menjaga keamanan laman agar tidak mudah dalam pengeditan oleh pihak yang tidak berwajib
    - fungsi lainnya adalah untuk menghubungkan user ke arah laman setelah login
    - author : risang daniswara
    - ver : 1.0
    - Date Mod : 24 November 2020
*/
/*if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url().";'</script>";
}
else {*/
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bengkel Cemungud</title>

  <!-- Custom fonts for this template-->
  <link href="inside/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="inside/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-5 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
           
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              


              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                  <?php
                /*if(isset($_POST['login'])){
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$password'") or die (mysqli_error($con));
                    if (mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['username'] = $user;
                        echo "<script>window.location='".base_url()."'</script>";
                    }
                    else {*/ ?>
                        <!--<div class = "row">
                            <div class="col-lg-5 col-lg-offset-1">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="login.php" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"> </span>
                                    <strong>Login Gagal </strong> Username/Password Salah
                                </div>
                            </div>
                        </div>-->
                    <?php    
                    /*
                    }
                }*/
                ?>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="user" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <!---<div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>--->
                    <a href="inside/dashboard.php" class="btn btn-primary btn-user btn-block" name="login">
                      Login
                    </a>
                    
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="inside/vendor/jquery/jquery.min.js"></script>
  <script src="inside/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="inside/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="inside/js/sb-admin-2.min.js"></script>

</body>

</html>

<?php
//}
?>