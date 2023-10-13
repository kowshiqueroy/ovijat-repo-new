<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" ) {
    
    header("location:index.php");
    
}
include_once "header.php";








?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    

   
   
   
   
   
   
    <!-- Main content -->
    <section class="content container-fluid">
              <div class="row">
              
               <!-- left column -->
         
            

          <!--/.col (left) -->
          <!-- right column -->


       <div class="col-md-12">
            
            <div class="card card-warning">
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
                            <h4> Exipiring Data Date: <?php echo $date;?> to </h4>


                            <form action="expiring.php" method="get">
                              <input style="width:50px;"type="number" name="days" value="30"> <input type="submit" name="submit" value="Days">

</form>

                        </center>
              </div>
              <div class="card-body">
        
      <!--  <form  action="" method="POST"> -->
        <table id="example2" class="table table-bordered table-hover">
            
          <thead>
             <tr>
                 
               
                 <td>Item Name</td>
                 <td>Quantity</td>
                 <td>Entry Date</td>
                 <td>Location</td>
                 
                 
                <!-- <td>EDIT</td> 
                
                 also add this in td below
                 
                 <td><button input type=\"submit\" value=\".$row->catid.\" class=\"btn btn-success\" name=\"btnedit\">EDIT</button></td>
                  
                   
                     -->
                 <td>Life</td>
                
                
                 
             </tr>  
      
           </thead>
       
            <tbody>
     
           <?php
                $newDate = date('Y.m.d', strtotime(' + 30 days'));
           
                $Date = date('Y.m.d');
if(isset($_GET['submit'])){
$days=$_GET['days'];

$newDate = date('Y.m.d', strtotime(' + '.$days.' days'));

}

          
                $select=$pdo->prepare("select * from tbl_in_data where expm <'$newDate' && expm >'$Date'");
                $select->execute();
                
                while($row=$select->fetch(PDO::FETCH_OBJ)){
                    
                  echo "
                    
                    <tr>
                   
                    <td>$row->item_name</td>
                    <td>$row->qty</td>
                    <td>$row->order_date</td>
                    <td>$row->plocation</td>
                    <td>$row->expm</td>
           
                    
                    
                    
                    </tr>";
                    
                }
                
                
                
                
                ?>
                    
                    
                
                
            </tbody>
            
            
        </table>
                  <!-- </form> -->
         
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
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "paging":false, "autoWidth": false, "order" : [[4,"desc"]]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    $("[data-toggle='tooltip']").tooltip();
  });
    
    
    
      $(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
                
          
});
    
$(document).ready(function() {
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
       
       url:"orderdelete.php",
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
      'Order has been deleted.',
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