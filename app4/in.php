<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" OR $_SESSION["role"]=="user" ){
    
    header("location:index.php");
    
}



include_once "header.php";





function fill_product($pdo){
    
    $output="";
    $select=$pdo->prepare("select * from tbl_item order by pname asc");
    $select->execute();
    
    $result=$select->fetchAll();
    
    foreach($result as $row){
        
        $output.='<option value="'.$row["pid"].'">'.$row["pname"].'</option>';
        
    }
    
    return $output;
    
    
    
}





if(isset($_POST["btnsaveorder"])){
   // $datee=$_POST['orderdate'];
    //$d1 = date('Y-m-d H:i:s',(strtotime($datee)));
    
    $customer_name=$_POST["txtname"];
    $order_date=date("Y-m-d H:i:s",strtotime($_POST['orderdate']));
    $order_time=date("Y-m-d H:i:s",strtotime($_POST['orderdate']));
    $subtotal=$_POST["txtsubtotal"];
    $comment=$_POST["comment"];
    $discount=$_POST["txtdiscount"];
    $total=$_POST["txttotal"];
    $paid=$_POST["txtpaid"];
    $due=$_POST["txtdue"];
    $payment_type=$_POST["rb"];
    
    
    $arr_productid=$_POST['productid'];
    $arr_productname=$_POST['productname'];
    $arr_stock=$_POST['stock'];
    $arr_location=$_POST['location'];

    $arr_qty=$_POST['qty'];
    $arr_life=$_POST['life'];

    $arr_buyprice=$_POST['price'];
    $arr_sellprice=$_POST['price2'];
    $arr_total=$_POST['total'];
    
    
    
    
    
    
    
    
    
    
    //echo ($due.$customer_name.$order_date);
    $insert=$pdo->prepare("insert into tbl_in_info(cname,order_date,order_time,subtotal,comment,discount,total,paid,due,payment_type) values(:cust,:orderdate,:ordertime,:stotal,:comment,:disc,:total,:paid,:due,:ptype)");
    
    $insert->bindParam(':cust',$customer_name);
    $insert->bindParam(':orderdate',$order_date);
    $insert->bindParam(':ordertime',$order_date);
    $insert->bindParam(':stotal',$subtotal);
    $insert->bindParam(':comment',$comment);
    $insert->bindParam(':disc',$discount);
    $insert->bindParam(':total', $total);
    $insert->bindParam(':paid',$paid);
    $insert->bindParam(':due', $due);
    $insert->bindParam(':ptype',$payment_type);
    
    $insert->execute();
    
    $invoice_id=$pdo->lastInsertId();
    if($invoice_id !=null){
        
        for($i=0 ; $i<count($arr_productid); $i++){
            
            
            
            $rem_qty= $arr_stock[$i]+$arr_qty[$i];
            
            if($rem_qty<0){
                return"Order is Not Complete";
            }else{
                
                
                $update=$pdo->prepare("update tbl_item SET pstock ='$rem_qty' where pid='".$arr_productid[$i]."'");
                $update->execute();
            } 
            
            
            $insert=$pdo->prepare("insert into tbl_in_data(invoice_id,item_id,item_name,qty,plocation,buyprice,sellprice,order_date,order_time,expm)values(:invid,:pid,:pname,:qty,:location,:buyprice,:sellprice,:orderdate,:ordertime,:life)");
            
            $insert->bindParam(":invid",$invoice_id);
                 $insert->bindParam(":pid",$arr_productid[$i]);
                 $insert->bindParam(":pname", $arr_productname[$i]);
                 $insert->bindParam(":qty", $arr_qty[$i]);
                 $insert->bindParam(":location",$arr_location[$i]);
                 $insert->bindParam(":buyprice",$arr_buyprice[$i]);
                 $insert->bindParam(":sellprice",$arr_sellprice[$i]);
                 $insert->bindParam(":life",$arr_life[$i]);
                 $insert->bindParam(":orderdate",$order_date);
            $insert->bindParam(":ordertime",$order_time);
            
                 
            $insert->execute();
        }
        
     //echo "succesfully created order";
          //header("location:orderlist.php");
        //Redirect('orderlist.php', false);
       // http_redirect('orderlist.php');
        
        echo '<script type="text/javascript">
           window.location = "in_list.php"
           
      </script>';
        
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
    <!--    <div class="row">-->

    <!-- left column -->

    <!-- general form elements -->
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
                            <h4> New In Date: <?php echo $date;?></h4>

                        </center>      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <div class="card-body">
        <form role="form" action="" method="post">
          <div class="row">
            <div class="col-md-3">

              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><a href="person.php"><i class="fas fa-user-plus"></i></a></span>

                  </div>
                  <select class="form-control" id="cname" onchange="showUser(this.value)" name="txtname"
                    required>
                    <option value="" disabled selected></option>

                    <?php
                        
                        
                        $select=$pdo->prepare("select *from tbl_person order by sid desc");
                            $select->execute();
                        while($row=$select->fetch(PDO::FETCH_ASSOC)){
                            
                            extract($row)
                                ?>
                    <option value="<?php echo $row['name']; ?>">

                      <?php echo $row['name']; ?>
                    </option>

                    <?php       
                        }
                        
                        
                        ?>

                  </select>
                </div>
              </div>

            </div>

            <script>
              function showUser(str) {
                if (str == "") {
                  document.getElementById("txtHint").innerHTML = "";
                  return;
                }
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                  }
                }

                //
                xmlhttp.open("GET", "person_get.php?q=" + str, true);
                xmlhttp.send();
              }
            </script>

            <div class="col-md-6 "  id="txtHint">
            <label>Detals:</label>
            </div>
            

            <div class="col-md-3" >
              <div class="form-group">
                <label>Date:</label>
                <div class="input-group date" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"
                    id="reservationdate" name="orderdate" required>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-md-12">

              <table id="producttable" class="table table-bordered table-hover responsive">

                <thead>
                  <tr>

                    <th></th>
                    <th>Item Name</th>
                    <th>Stock</th>
                    <th>Unit</th>
                    <th>Location</th>
                    <th>BuyPrice</th>
                    <th>SellPrice</th>
                    <th>Life</th>
                    <th>Quantity</th>

                    <!-- <td>EDIT</td> 
                
                 also add this in td below
                 
                 <td><button input type=\"submit\" value=\".$row->catid.\" class=\"btn btn-success\" name=\"btnedit\">EDIT</button></td>
                  
                   
                     -->
                    <th>Total</th>
                    <th><button type="button" name="add" class="btn btn-success btn-sm btnadd"><span
                          class="fas fa-plus"></span>
                      </button></th>

                  </tr>

                </thead>

                <tbody>

                </tbody>

              </table>

            </div>

            <div class="col-md-6">

              <div class="form-group">
                <label>Subtotal</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                  </div>
                  <input type="text" class="form-control" name="txtsubtotal" id="txtsubtotal" required readonly>
                </div>
              </div>

             

              <div class="form-group">
                <label>Discount</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                  </div>

                  <input type="text" class="form-control" name="txtdiscount" id="txtdiscount" required>
                </div>

              </div>


              
              <div class="form-group">
                <label>Comment</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-comment"></i></span>
                  </div>

                  <input type="text" class="form-control" name="comment" id="comment" value="N/A" required>
                </div>

              </div>

            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Total</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-wallet"></i></span>
                  </div>

                  <input type="text" class="form-control" name="txttotal" id="txttotal" required readonly>
                </div>
              </div>

              <div class="form-group">
                <label>Paid</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-wallet"></i></span>
                  </div>

                  <input type="text" class="form-control" name="txtpaid" id="txtpaid" required>
                </div>
              </div>

              <div class="form-group">
                <label>Remaining</label>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-wallet"></i></span>
                  </div>

                  <input type="text" class="form-control" name="txtdue" id="txtdue" required readonly>
                </div>
              </div>

              <!-- radio -->
              <label>Payment Method:</label>
              <div class="form-group clearfix">

                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary1" name="rb" value="cash" checked>
                  <label for="radioPrimary1">Cash
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary2" name="rb" value="accounts">
                  <label for="radioPrimary2">Accounts
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary3" name="rb" value="others">
                  <label for="radioPrimary3">
                    Others
                  </label>
                </div>
              </div>

            </div>

          </div>

          <hr>
          <div align="center">
         
            <input type="submit" name="btnsaveorder" value="Save" class="btn btn-info">

          </div>
          <!-- /.card-body -->

        </form>
      </div>

      <!-- /.card -->

      <!--/.col (left) -->
      <!-- right column -->

      <!-- /.form group -->

      <!-- /.form group -->

      <!-- /.card-body -->

    </div>

    <!-- /.right column -->

    <!--   </div> -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  $(document).ready(function() {
    $('.btnadd').click(function() {
      //     alert("You clicked the element with and ID of 'test-element'");
      var html = '';
      html += '<tr>';
      html += '<td><input type="hidden" class="form-control pname" name="productname[]" ></td>';
      html +=
        '<td><select class="form-control productid" name="productid[]" style="width: 200px;" ><option  value="">Select Option</option> <?php echo fill_product($pdo);  ?> </select></td>';
      html += '<td><input type="text" class="form-control stock" name="stock[]" readonly></td>';
      html += '<td><input type="text" class="form-control unit" name="unit[]" style="width:50px;font-size: 10px;" readonly></td>';
      html += '<td><input type="text" class="form-control location" name="location[]" style="width:100px;font-size: 12px;" required></td>';
      html += '<td><input type="text" class="form-control price" name="price[]" required></td>';
      html += '<td><input type="text" class="form-control price2" name="price2[]" required></td>';
      html += '<td><input type="text"  class="form-control life" name="life[]" style="width:100px;font-size: 12px;" required></td>';
      html += '<td><input type="number" min="1" class="form-control qty" name="qty[]" required></td>';
      html += '<td><input type="text" class="form-control total" name="total[]" readonly></td>';
      html +=
        '<td><button type="button" name="add" class= "btn btn-danger btn-sm btntbldlt" ><span class="fas fa-trash"   ></span></button></td>';
      $('#producttable').append(html);
      $('.productid').select2()
      $('.productid').on('change', function(e) {
        var productid = this.value;
        var tr = $(this).parent().parent();
        //var id = productid;
        $.ajax({
          url: 'in_get.php',
          method: 'get',
          data: {
            myyid: productid
          },
          success: function(data) {
            //   alert(id);
            //  console.log(data);
            tr.find(".pname").val(data["pname"]);
            tr.find(".stock").val(data["pstock"]);
            tr.find(".unit").val(data["unit"]);
            tr.find(".location").val(data["plocation"]);
            tr.find(".price").val(data["buyprice"]);
            tr.find(".price2").val(data["saleprice"]);
            tr.find(".life").val(data["expm"]);
            tr.find(".qty").val(1);
            tr.find(".total").val(tr.find(".qty").val() * tr.find(".price").val());
            calculate(0, 0);
          }
        });
      });
    });
    //   $('.btntbldlt').click(function(){
    // $(document).on("click","btntbldlt",function(){ 
    //$(this).cloest("tr").remove();
    //   });
    //dom ready codes
    $("#producttable").delegate(".qty", "keyup change", function() {
      var quantity = $(this);
      var tr = $(this).parent().parent();
      if ((quantity.val() - 0) > (tr.find(".stock").val() - 0)) {
        swal.fire("warning!", "Sorry Quantity not available");
        quantity.val(1);
        tr.find(".total").val(quantity.val() * tr.find(".price").val());
        calculate(0, 0);
      } else {
        tr.find(".total").val(quantity.val() * tr.find(".price").val());
        calculate(0, 0);
      }
    });
    $("#producttable").delegate(".price", "keyup change", function() {
      var quantity = $(this);
      var tr = $(this).parent().parent();
      tr.find(".total").val(quantity.val() * tr.find(".price").val());
     
      calculate(0, 0);
    });

    function calculate(dis, paid) {
      var subtotal = 0;
      var tax = 0;
      var discount = dis;
      var nrt_total = 0;
      var paid_amt = paid;
      var due = 0;
      $(".total").each(function() {
        subtotal = subtotal + ($(this).val() * 1);
      })
      tax = 0.00 * subtotal;
      net_total = tax + subtotal;
      net_total = net_total - discount;
      due = net_total - paid_amt;
      $("#txtsubtotal").val(subtotal.toFixed(2));
    
      $("#txttotal").val(net_total.toFixed(2));
     
      $("#txtdiscount").val(discount);
      $("#txtdue").val(due.toFixed(2));
    } //function calculate end here
    $("#txtdiscount").keyup(function() {
      var discount = $(this).val();
      calculate(discount, 0);
    });
    $("#txtpaid").keyup(function() {
      var paid = $(this).val();
      var discount = $("#txtdiscount").val();
      calculate(discount, paid);
    });
  });
</script>

<script>
  $(document).on("click", ".btntbldlt", function() {
    $(this).closest('tr').remove();
    calculate(0, 0);
    $("#txtpaid").val(0);
  });
</script>

<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    /*  //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      //Money Euro
      $('[data-mask]').inputmask()
      
      */
    //Date range picker
    // $('#reservationdate').datetimepicker({
    //  format: 'L'
    //    });
    /*
      /Date range picker
    $('#reservation').daterangepicker()
    */
    //$("#reservationdate").datetimepicker();
    //$("#reservationdate").datepicker("setDate", new Date());
    // $("#reservationdate").datepicker(); 
  });
</script>

<script>
  $(document).ready(function() {
    $("#reservationdate").datetimepicker({
      pickTime: true
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