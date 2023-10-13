<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" ){
    
    header("location:index.php");
    
}
include_once"header.php";


if(isset($_POST["btnSave"])){
    
    $n=$_POST["n"];
    $a=$_POST["a"];
    $p=$_POST["p"];
    $m=$_POST["m"];
    
    
   if(empty($n)){
       
       $eror="<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Failed',
  text: 'Field is empty',
  showConfirmButton: false,
  timer: 3000
})
        
        });
        
        </script>";
            
  
   
   echo $eror;
   
   
   
   }
    
    if(!isset($eror)){
        
        $insert=$pdo->prepare("insert into tbl_person (name,address,phone,mail) values(:n,:a,:p,:m)");
        $insert->bindParam(":n",$n);
        $insert->bindParam(":a",$a);
        $insert->bindParam(":p",$p);
        $insert->bindParam(":m",$m);
        if($insert->execute()){
            
            echo 
            
                "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Done',
  text: 'Category added succesfully',
  showConfirmButton: false,
  timer: 3000
})
        
        });
        
        </script>";
                
                
                
            
        }
        
        
    }
    
    
}




if(isset($_POST["btndelete"])){
    
    $dltid=$_POST["btndelete"];
    
   $delete=$pdo->prepare("delete from tbl_person where sid='$dltid'");
    
    if ($delete->execute()){
        
         echo 
            
                "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Deleted',
  text: 'Category deleted succesfully',
  showConfirmButton: false,
  timer: 3000
})
        
        });
        
        </script>";
        
        
        
    }else{
        echo 
            
                "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Can not Delet',
  text: 'Category not deleted',
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
  

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">

      <!-- left column -->
      <div class="col-md-4">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Person Addition</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="" method="post">

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"
                  name="n">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"
                  name="a">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"
                  name="p">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Mail</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"
                  name="m">
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="btnSave">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>

      <!--/.col (left) -->
      <!-- right column -->

      <div class="col-md-8">

        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">DATA</h3>
          </div>
          <div class="card-body">

            <form action="" method="POST">
              <table id="example1" class="table table-bordered table-hover">

                <thead>
                  <tr>

                    <td>Code</td>
                    <td>Name</td>
                    <td>Address</td>
                    <td>Phone</td>
                    <td>Mail</td>
                    <!-- <td>EDIT</td> 
                
      
                 
                 <td><button input type=\"submit\" value=\".$row->catid.\" class=\"btn btn-success\" name=\"btnedit\">EDIT</button></td>
                  
                   
                     -->
                    <td>DELETE</td>

                  </tr>

                </thead>

                <tbody>

                  <?php
                
                $select=$pdo->prepare("select * from tbl_person order by sid desc");
                $select->execute();
                
                while($row=$select->fetch(PDO::FETCH_OBJ)){
                    
                  echo "
                    
                    <tr>
                    <td>$row->sid</td>
                    <td>$row->name</td>
                    <td>$row->address</td>
                    <td>$row->phone</td>
                    <td>$row->mail</td>
                    
                   
                    <td><button input type=\"submit\" value=" .$row->sid."\"  class=\"btn btn-danger\" name=\"btndelete\"><span class=\"fas fa-trash\"   style=\"color:#ffffff\" data-toggle=\"tooltip\" title=\"DELETE\"></span></button></td>
                    
                    </tr>";
                    
                }
                
                
                
                
                ?>

                </tbody>

              </table>
            </form>

          </div>
        </div>

      </div>

      <!-- /.right column -->

    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

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