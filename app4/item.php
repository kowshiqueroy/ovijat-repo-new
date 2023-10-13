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

if (isset($_POST["btnaddproduct"]))
{
    
    $productname= $_POST["txtpname"];
    $category=$_POST["txtselect_option"];
    $purchaseprice=$_POST["txtprice"];
    $sellprice=$_POST["txtsprice"];
        $stock=$_POST["txtstock"];
        $life=$_POST["txtlife"];
        $location=$_POST["txtlocation"];
    $description=$_POST["txtdesc"];
    
    
    
    $insert=$pdo->prepare("insert into tbl_item(expm,pname,pcategory,buyprice,saleprice,pstock,pdescription,plocation) values(:life,:pname,:pcategory,:buyprice,:saleprice,:pstock,:pdescription,:location)");
    $insert->bindParam(":pname",$productname );
    $insert->bindParam(":pcategory",$category );
    $insert->bindParam(":saleprice",$sellprice );
    $insert->bindParam(":buyprice",$purchaseprice );
    $insert->bindParam(":pstock",$stock);
   
    $insert->bindParam(":pdescription",$description );
    $insert->bindParam(":life",$life );
    $insert->bindParam(":location",$location );
    
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
            <h1 class="m-0">Products List</h1>
        
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
              
              <div class="col-md-4">
        <!-- general form elements -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Add Item</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="item.php" method="post">

            <div class="card-body">
              <div class="form-group">
                <label>Items Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name"
                  name="txtpname">
              </div>

              <div class="form-group">
                <label>Category</label>
                <select class="form-control" placeholder="Choose category to bind" name="txtselect_option" required>
                  <option value="" disabled selected>Select Category</option>

                  <?php
                        
                        
                        $select=$pdo->prepare("select *from tbl_category order by catid desc");
                            $select->execute();
                        while($row=$select->fetch(PDO::FETCH_ASSOC)){
                            
                            extract($row)
                                ?>
                  <option>

                    <?php echo $row['category']; ?>
                  </option>

                  <?php       
                        }
                        
                        
                        ?>

                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Buy Price</label>
                <input type="text" class="form-control" placeholder="Enter Email to be added" name="txtprice" required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Sell Price</label>
                <input type="text" class="form-control" placeholder="Enter Email to be added" name="txtsprice" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Default Location</label>
                <input type="text" class="form-control" placeholder="Enter Email to be added" name="txtlocation" required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Openning Stock</label>
                <input type="text" class="form-control" placeholder="Enter Quantity" name="txtstock" required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Life (Months)</label>
                <input type="text" class="form-control" placeholder="Enter Quantity" name="txtlife" required>
              </div>

              <div class="form-group">
                <label>Description</label>
                <textarea type="text" class="form-control" placeholder="Enter details" name="txtdesc"
                  rows="4"></textarea>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="btnaddproduct">Add Item</button>

            </div>

          </form>
        </div>
        <!-- /.card -->

      </div>


       <div class="col-md-8">
            
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Product Data</h3>
              </div>
              <div class="card-body">
        
        <form  action="" method="POST">
        <table id="example1" class="table table-bordered table-hover">
            
          <thead>
             <tr>
                 
                 <td>Code</td>
                 <td>Item Name</td>
                 <td>Category</td>
                 <td>Buy Price</td>
                 <td>Sell Price</td>
                 <td>Stock</td>
                 <td>Life Month</td>
                 
                 
                <!-- <td>EDIT</td> 
                
                 also add this in td below
                 
                 <td><button input type=\"submit\" value=\".$row->catid.\" class=\"btn btn-success\" name=\"btnedit\">EDIT</button></td>
                  
                   
                     -->
                     <td>Location</td>
                 <td>Description</td>
                 <td></td>
                
                 
             </tr>  
      
           </thead>
       
            <tbody>
     
           <?php
                
                $select=$pdo->prepare("select * from tbl_item order by pid desc");
                $select->execute();
                
                while($row=$select->fetch(PDO::FETCH_OBJ)){
                    
                  echo "
                    
                    <tr>
                    <td>"."ITEM-".$row->pid."</td>
                    <td>$row->pname</td>
                    <td>$row->pcategory</td>
                    <td>$row->buyprice</td>
                    <td>$row->saleprice</td>
                    <td>$row->pstock</td>
                    <td>$row->expm</td>
                    <td>$row->plocation</td>
                    <td>$row->pdescription</td>
                   
                    
                    
                    <td>
                    <a href=\"item_edit.php?id=".$row->pid."\" 
                    class= \"btn btn-info\" role=\"button\" ><span class=\"fas fa-edit\" name=\"editBtn\"    style=\"color:#ffffff\" data-toggle=\"tooltip\" title=\"EDIT\"></span>
                    </a>
                 
                    
                    <button id=".$row->pid." 
                    class= \"btn btn-danger dltBttn \" type=\"button\" ><span class=\"fas fa-trash\"   style=\"color:#ffffff\" data-toggle=\"tooltip\" title=\"DELETE\"></span>
                    </button>
                    </td>
                    
                    
                    
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
      "responsive": true, "lengthChange": false, "autoWidth": false, "order" : [[0,"asc"]],
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