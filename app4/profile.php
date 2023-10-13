<?php

try{
$pdo = new PDO("mysql:host=localhost;dbname=pos_db","root","");
//echo "connection Sucessfull";

}catch(PDOException $f){
    
    echo $f->getmessage();
}

//include_once"conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" OR $_SESSION["role"]=="user"){
    
    header("location:index.php");
}
include_once"header.php";

if(isset($_POST["btnupdate"])){
    
    $oldpassword_txt=$_POST["txtoldpassword"];
    $newpassword_txt=$_POST["txtnewpassword"];
    $confirmpassword_txt=$_POST["txtconfirmnewpassword"];
    
    
    
    $email=$_SESSION["useremail"];
    
    $select=$pdo->prepare("select * from tbl_user where useremail='$email'");
    
    $select->execute();
    $row=$select->fetch(PDO::FETCH_ASSOC);
    
    $useremail_db =$row["useremail"];
    $password_db= $row["password"];

  
    
    if($oldpassword_txt==$password_db){
        
        if($newpassword_txt==$confirmpassword_txt){
            $update=$pdo->prepare("update tbl_user set password='$confirmpassword_txt' where useremail='$email'");
            
       
         
            if($update->execute()){
               echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: ' Your password is changed to your entered one',
  showConfirmButton: false,
  timer: 2000
})
        
        });
        
        </script>";
            }else{
                echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'erroe',
  title: ' Unable to update password',
  showConfirmButton: false,
  timer: 2000
})
        
        });
        
        </script>";
                
            }
        
    }else{
            
            
        
     echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: ' New password not matches confirmed password',
  showConfirmButton: false,
  timer: 2000
})
        
        });
        
        </script>";
            
            
    }
        
    }
    
    
  
    else {
        
        
    
    echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'warning',
  title: ' Your entered old password is wrong',
  showConfirmButton: false,
  timer: 2000
})
        
        });
        
        </script>";
        
}
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Profile</h1>
        </div><!-- /.col -->
       
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="profile.php" method="post">
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputPassword1">Old Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password"
                      name="txtoldpassword" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                      name="txtnewpassword" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm new Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                      name="txtconfirmnewpassword" required>
                  </div>

                  <div class="card-footer">



                  <button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
                </div>
</form>
                </div>
                <!-- /.card-body -->

             
              
            </div>

          </div>

        </div><!-- /.card -->
      

      <div class="col-lg-6">
        <div class="card">

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Profile Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="post">
              <div class="card-body">
        <?php      $email=$_SESSION["useremail"];
    
    $select=$pdo->prepare("select * from tbl_user where useremail='$email'");
    
    $select->execute();
    $row=$select->fetch(PDO::FETCH_ASSOC);
    
    $mail =$row["useremail"];
    $name= $row["username"];
    $role= $row["role"];
    
    
    ?>


                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" id="" value=<?php echo   $name?>
                    name="n" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Mail</label>
                  <input type="password" class="form-control" id="" value=<?php echo   $mail?>
                    name="m" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Role</label>
                  <input type="password" class="form-control" id="" placeholder=<?php echo   $role?>
                    name="r" readonly>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer"><button class="btn btn-primary">
              <a  href=<?php echo "forgotpassword.php?email=".$_SESSION["useremail"]; ?>>Forgot Password</a>   
            
</button>



               
                </div>
            </form>
          </div>

        </div>

      </div><!-- /.card -->

      </div>
    </div>
    <!-- /.col-md-6 -->

    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</div>

<!-- /.content -->

<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<?php
include_once"footer.php";


?>