
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
     <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.js"></script>
<script src="plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>





<?php

if(isset($_REQUEST['email'])){



        $email=$_REQUEST['email'];

        echo "<script type='text/javascript'>
                
                jQuery(function validation(){
                
                Swal.fire({
          position: 'center',
          icon: 'info',
          title: 'Email has been sent',
          text: 'to ".$email."  with password',
          showConfirmButton: false,
          timer: 5000
        })
                
                });
                
                </script>";
        
        header('refresh:5;'.$_SERVER['HTTP_REFERER']);
        



}
else{


        echo "<script type='text/javascript'>
                
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'info',
  title: 'Type 1234 in Password',
  text: 'and try LOGIN again',
  showConfirmButton: false,
  timer: 5000
})
        
        });
        
        </script>";

        header('refresh:2;'.'index.php');
}




?>
