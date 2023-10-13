<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" OR $_SESSION["role"]=="user"){
    
    header("location:index.php");
    
}
include_once "header.php";


$select=$pdo->prepare("select * from tbl_company ");
$select->execute();
$row=$select->fetch(PDO::FETCH_ASSOC);
$name_db=$row["name"];
$address_db=$row["address"];
$phone_db=$row["phone"];
$mail_db=$row["mail"];
$logo_db=$row["logo"];



if (isset($_POST["btnupdateproduct"]))
{
    
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $mail=$_POST["mail"];
   // $logo=$_POST["logo"];

 $update=$pdo->prepare("update tbl_company SET name=:name ,address=:address , phone=:phone , mail=:mail where name='$name_db'");
    
     $update->bindparam(":name", $name);
    $update->bindparam(":address", $address);
    $update->bindparam(":phone", $phone);
    $update->bindparam(":mail", $mail);

    if ($update->execute())
    {
        
            echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Saved',
  text: 'Item Updated succesfully',
  showConfirmButton: false,
  timer: 3000
})

        });
       
        </script>";
        
       // header('refresh:2;'.'item.php');
        
        
        
    }
        
        else{
            "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Failed',
  text: 'Unable to Update item',
  showConfirmButton: false,
  timer: 3000
})
        
        });
        
        </script>";
            
            
            
            
            
        }
        
}
    
    
    



?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Item</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">

            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">

                            Enter New Details
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="company_info.php" method="post">

                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="<?php echo $name_db; ?>" required>
                            </div>

                            

                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control" value="<?php echo $address_db; ?>"
                                    name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" value="<?php echo $phone_db; ?>"
                                    name="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mail</label>
                                <input type="text" class="form-control" value="<?php echo $mail_db; ?>" name="mail"
                                required>
                            </div>
                         
                           

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning" name="btnupdateproduct">Update Item</button>

                        </div>

                    </form>
                </div>
                <!-- /.card -->

            </div>

            <!--/.col (left) -->
            <!-- right column -->

            <!-- /.right column -->

        </div>

    </section>
    <!-- /.content -->
</div>
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