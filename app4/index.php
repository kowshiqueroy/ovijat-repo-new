<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<?php





include_once("connectdb.php");
session_start();
if (isset($_POST["btn_login"])){
    

$password = $_POST["txt_password"];
$useremail = $_POST["txt_email"];


if($password=="1234"){
header("Location: "."forgotpassword.php?email=".$useremail);


}
    
//echo $useremail." - ".$password;
$select= $pdo->prepare("select * from tbl_user where useremail= '$useremail' AND password='$password' "); 
    
$select->execute();
    
$row=$select->fetch(PDO::FETCH_ASSOC);

    
    
    if($row && $row['useremail']==$useremail && $row['password']==$password AND $row["role"]=="admin")
   // if($row['useremail']==$useremail AND $row['password']==$password)
    
    {
        $_SESSION["userid"]=$row["userid"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["useremail"]=$row["useremail"];
        $_SESSION["role"]=$row["role"];


        header('refresh:1;dashboard.php');
        echo "<script type='text/javascript'>
        
        jQuery(function vsalidation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Logged in Successful by ".$_SESSION["username"]." ',
  showConfirmButton: false,
  timer: 1000
})
        
        });
        
        </script>";
    }
    
    else if ($row && $row['useremail']==$useremail && $row['password']==$password AND $row["role"]=="user")
    
    { 
        $_SESSION["userid"]=$row["userid"];
        $_SESSION["username"]=$row["username"];
        $_SESSION["useremail"]=$row["useremail"];
        $_SESSION["role"]=$row["role"];
        
        header('refresh:1;user.php');
        echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Logged in Successful by ".$_SESSION["username"]." ',
  showConfirmButton: false,
  timer: 1000
})
        
        });
        
        </script>";

      
    }
    
    else {
          echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Email or Password is Wrong',
  text: 'Details not match',
  showConfirmButton: false,
  timer: 2000
})
        
        });
        
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ovijat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.css">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php"><b>Ovijat </b>Web App</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="txt_email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="txt_password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">

            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="btn_login">Log In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!-- /.social-auth-links -->

        <p class="mb-1">
          <a href="forgotpassword.php">I forgot my password</a>
        </p>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

</body>

</html>