<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" OR $_SESSION["role"]=="user"){
    
    header("location:index.php");
    
}
include_once"header.php";

$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 

$select=$pdo->prepare("select * from tbl_item where pid='$id'");
$select->execute();
$row=$select->fetch(PDO::FETCH_ASSOC);
$id_db=$row["pid"];
$productname_db=$row["pname"];
$category_db=$row["pcategory"];
$unit_db=$row["unit"];
$life_db=$row["expm"];
$purchaseprice_db=$row["buyprice"];
$sellprice_db=$row["saleprice"];
$location=$row["plocation"];
$stock_db=$row["pstock"];
$description_db=$row["pdescription"];


if (isset($_POST["btnupdateproduct"]))
{
    
    $productname_txt= $_POST["txtpname"];
    $category_txt=$_POST["txtselect_option"];
    $purchaseprice_txt=$_POST["buyprice"];
    $sellprice_txt=$_POST["sellprice"];
    $location_txt=$_POST["location"];
    $stock_txt=$_POST["txtstock"];
    $description_txt=$_POST["txtdesc"];

 $update=$pdo->prepare("update tbl_item SET pname=:pname ,plocation=:location , buyprice=:buyprice , pcategory=:pcategory , saleprice=:saleprice , pstock=:pstock , pdescription=:pdescription where pid= $id ");
    
     $update->bindparam(":pname", $productname_txt);
    $update->bindparam(":pcategory", $category_txt);
    $update->bindparam(":saleprice", $sellprice_txt);
    $update->bindparam(":pstock", $stock_txt);
    $update->bindparam(":pdescription", $description_txt);
    $update->bindparam(":location", $location_txt);
    $update->bindparam(":buyprice", $purchaseprice_txt);
    
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
              <form  action="" method="post">
               
                <div class="card-body">
                  <div class="form-group">
                    <label>Items Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="txtpname" value= "<?php echo $productname_db; ?>" readonly>
                  </div>
                  
                  <div class="form-group">
                    <label>Category</label>
                    <select  class="form-control"  placeholder="Choose category to bind" name="txtselect_option" readonly>
                    <option value="" disabled selected>Select Category</option>
                    
                    <?php
                        
                        
                        $select=$pdo->prepare("select *from tbl_category order by catid desc");
                            $select->execute();
                        while($row=$select->fetch(PDO::FETCH_ASSOC)){
                            
                            extract($row);
                                ?>
                                <option<?php
                                    if($row['category']==$category_db){
                                    ?>
                                    selected="selected"
                                    <?php } ?> >
                                    
                                    <?php echo $row['category']; ?>
                                </option>
                                
                         <?php       
                        }
                        
                        
                        ?>
                    
                    
                    
                    
                    
                      </select>
                  </div>
                   
                   
                  <div class="form-group">
                    <label for="exampleInputPassword1">Buy Price</label>
                    <input type="text" class="form-control"  value="<?php echo $purchaseprice_db; ?>" name="buyprice" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sell Price</label>
                    <input type="text" class="form-control"  value="<?php echo $sellprice_db; ?>" name="sellprice" required>
                  </div>
                 
                 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Stock</label>
                    <input type="text" class="form-control"  value="<?php echo $stock_db; ?>" name="txtstock" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Unit</label>
                    <input type="text" class="form-control"  value="<?php echo $unit_db; ?>" name="txtunit" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Life Month</label>
                    <input type="text" class="form-control"  value="<?php echo $life_db; ?>" name="txtlife" readonly>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input type="text" class="form-control"  value="<?php echo $location; ?>" name="location" required>
                  </div>
                 
                  <div class="form-group">
                    <label>Description</label>
                      <textarea type="text" class="form-control"   name="txtdesc" rows="4"> <?php echo $description_db; ?> </textarea>
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