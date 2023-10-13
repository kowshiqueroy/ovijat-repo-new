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
                            <h4> MRR Date: <?php echo $date;?></h4>

                        </center>

                    </div>
                    <div class="card-body">

                        <!--  <form  action="" method="POST"> -->
                        <table id="example2" class="table table-bordered table-hover">

                            <thead>
                                <tr>

                                    <td>Invoice ID</td>
                                    <td>Item Name</td>
                                    <td>Quantity</td>
                                    <td>Date</td>
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

           $date=date("Y-m-d");
                
                $select=$pdo->prepare("select * from tbl_in_data where order_date='$date'");
                $select->execute();
                
                while($row=$select->fetch(PDO::FETCH_OBJ)){
                    
                  echo "
                    
                    <tr>
                    <td>$row->invoice_id</td>
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
            "responsive": true,
            "lengthChange": false,
            "paging": false,
            "autoWidth": false,
            "order": [
                [3, "desc"]
            ]
        });
    });
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });
    $(document).ready(function() {
        $(".dltBttn").click(function() {
            var tdh = $(this);
            var id = $(this).attr("id");
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
                            url: "orderdelete.php",
                            type: "post",
                            data: {
                                pidd: id
                            },
                            success: function(data) {
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