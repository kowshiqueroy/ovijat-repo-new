<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" OR $_SESSION["role"]=="user"){
    
    header("location:index.php");
    
}
include_once"header.php";

if (isset($_POST["btnaddproduct"]))
{
    
    $productname= $_POST["txtpname"];
    $category=$_POST["txtselect_option"];
    $purchaseprice=$_POST["txtprice"];
        $stock=$_POST["txtstock"];
    $description=$_POST["txtdesc"];
    
    
    
    $insert=$pdo->prepare("insert into tbl_item(pname,pcategory,saleprice,pstock,pdescription) values(:pname,:pcategory,:saleprice,:pstock,:pdescription)");
    $insert->bindParam(":pname",$productname );
    $insert->bindParam(":pcategory",$category );
    $insert->bindParam(":saleprice",$purchaseprice );
    $insert->bindParam(":pstock",$stock);
    $insert->bindParam(":pdescription",$description );
    
    if($insert->execute())
    
    {
        
            echo "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Saved',
  text: 'Product Added Succesfully',
  showConfirmButton: false,
  timer: 3000
})
        
        });
        
        </script>";
        
        
        
        
        
    }
        
        else{
            "<script type='text/javascript'>
        
        jQuery(function validation(){
        
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Failed',
  text: 'Unable to Add Product',
  showConfirmButton: false,
  timer: 3000
})
        
        });
        
        </script>";
            
            
            
            
            
        }
        
        
        
    }



if(isset($_POST["btndelete"])){
    
    $dltid=$_POST["btndelete"];
    
   $delete=$pdo->prepare("delete from tbl_category where catid='$dltid'");
    
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
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
              
              


       <div class="col-md-12">
            
            <div class="card card-success">
              <div class="card-header">
              <?php

$date=date("Y-m-d");
     
$select=$pdo->prepare("select * from tbl_company ");
$select->execute();
$row=$select->fetch(PDO::FETCH_ASSOC);
$name_db=$row["name"];
$address_db=$row["address"];
$phone_db=$row["phone"];
$mail_db=$row["mail"];
$logo_db=$row["logo"];
     
     
     
     
     ?>
                        <center>
                            <h2><?php echo $name_db; ?></h2>
                            <p><?php echo $address_db." ".$phone_db." ".$mail_db; ?></p>
                            <h4> Stock Summary Date: <?php echo $date;?></h4>

                        </center>
              </div>
              <div class="card-body">
        
        <form  action="" method="POST">
        <table id="example1" class="table table-bordered table-hover">
            
          <thead>
             <tr>
                 
                 <td>Code</td>
                 <td>Product name</td>
                 <td>Category</td>
              
                 <td>Stock</td>
                 
                 
                <!-- <td>EDIT</td> 
                
                 also add this in td below
                 
                 <td><button input type=\"submit\" value=\".$row->catid.\" class=\"btn btn-success\" name=\"btnedit\">EDIT</button></td>
                  
                   
                     -->
                 <td>Description</td>
               
                 
             </tr>  
      
           </thead>
       
            <tbody>
     
           <?php
                
                $select=$pdo->prepare("select * from tbl_item order by pstock ");
                $select->execute();
                
                while($row=$select->fetch(PDO::FETCH_OBJ)){
                    
                  echo "
                    
                    <tr>
                    <td>"."ITEM-".$row->pid."</td>
                    <td>$row->pname</td>
                    <td>$row->pcategory</td>
      
                    <td>$row->pstock</td>
                    <td>$row->pdescription</td>
                   
                    
                    
                   
                    
                    
                    
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



   $(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});
</script>






<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "paging":false, "autoWidth": false, "order" : [[0,"asc"]],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("[data-toggle='tooltip']").tooltip();
  });
</script>

<script>


$(document).ready(function(){
    
    
$(".dltBttn").click(function(){
       
      
       var tdh =$(this);
    var id=$(this).attr("id");
   //   alert(id);
    
    
    
    
    Swal.fire({
  title: 'Are you sure?',
  text: "Once Deleted You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
})
        .then((result) => {
  if (result.isConfirmed) {
      
      
       $.ajax({
       
       url:"itemdelete.php",
       type:"post",
       data:{
           
           pidd:id
           
       },
       
       success:function(data){
           
       
       tdh.parents("tr").hide();
   }
           
   });
      
      
      
      
    Swal.fire(
      'Deleted!',
      'Product has been deleted.',
      'success'
    );
      
  }
        
     
});
    
    
    
    
    
  
       
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