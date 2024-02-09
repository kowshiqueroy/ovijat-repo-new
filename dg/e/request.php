<?php

include 'head.php';
?>

<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">

        <center><h1>Requests</h1></center>

        <?php

if(isset($_REQUEST['pay'])){
    $rid=$_REQUEST['pay'];
    $for=$_REQUEST['for'];
    $from=$_REQUEST['from'];
    $item=$_REQUEST['item'];
    $price=$_REQUEST['price'];
    $banking= "";
    
$sql = "SELECT * FROM user WHERE email='$from'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $banking = $row['banking'];}}

    
    $sql = "INSERT INTO pay  (pay,fromuser,item,price,foruser,banking) VALUES ('$rid','$from','$item','$price','$for','$banking') ";
    
    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    } else {
   //  echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    }


if (isset($_REQUEST['id'])){

$id=$_REQUEST['id'];



$sql = "SELECT * FROM item WHERE id='$id' ORDER BY id DESC";
$result = $conn->query($sql);


$byuser = "";
$foruser =$email;
$itemname = "";
$category = "";
$details ="";
$type = "";
$recuring = "";
$period = "";
$price = "";

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      
        $byuser = $row['user'];
    
        $itemname = $row['name'];
        $category = $row['category'];
        $details = $row['detail'];
        $type = $row['type'];
        $recuring = $row['recuring'];
        $period = $row['period'];
        $price = $row['saleprice'];
        $stock=$row['stock'];

    }}


    $sql = "INSERT INTO request (stock,iid,byuser, foruser,category, itemname,details, type, recuring,period,price)
    VALUES ('$stock','$id','$byuser', '$foruser','$category','$itemname', '$details','$type', 
    '$recuring', '$period', '$price')";

    if ($conn->query($sql) === TRUE) {
     //echo "New record created successfully";
    } else {
     // echo "Error: " . $sql . "<br>" . $conn->error;
    }


}
if (isset($_REQUEST['cancel'])){


$id=$_REQUEST['cancel'];


$sql = "UPDATE request SET status='1' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
 //echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}

}
                        $sql = "SELECT * FROM request WHERE foruser='$email' ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $byuser = $row['byuser'];
                                $foruser = $row['foruser'];
                                $itemname = $row['itemname'];
                                $category = $row['category'];
                                $details = $row['details'];
                                $type = $row['type'];
                                $recuring = $row['recuring'];
                                $period = $row['period'];
                                $price = $row['price'];
                                $ts = $row['ts'];
                                $sts = $row['sts'];
                                $ets = $row['ets'];
                                $status = $row['status'];
                                echo '      <div class="col-md-8">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <p class="form-control " >'.$itemname.'<br>'.$byuser.'<br>'.$ts.
                                        '<br>'.$type.' in '.$category.'<br>'; 
                                        
                                        if ($recuring==1) {
                                            echo "Recuring". "Months: ".$byuser;


                                        } else{

                                            echo "One Time Purchase";
                                        }
                                        echo 
                                        
                                        '</p>
                                     
                                    </div>
                                    <div class="col-md-5">
                                        <p class="form-control border-0 py-3" >'.$details.'</p>
                
                                    </div>
                                    <div class="col-md-3">
                                        <p class="form-control border-0 py-3" >'.$price.'/=<br>'.$sts.'<br>'.$ets.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                        <form action="chat.php" method="post">
                                        <input type="hidden" name="to" value="'.$byuser.'">
                            <button class="btn btn-dark border-0 w-100 py-3">Chat</button>
                            </form>
                        </div>
                            ';
                            
                            if ($status==0) {
                                echo '<div class="col-md-2">
                                <form action="request.php" method="post">
                                <input type="hidden" name="cancel" value="'.$id.'">
                    <button class="btn btn-dark border-0 w-100 py-3">Cancel</button>
                    </form>                            </div>';



                            }

                            if ($status==1) {
                                echo '<div   class="col-md-2">
                              
                    <button style="background-color:black;" class="btn btn-dark border-0 w-100 py-3">Canceled</button>
                                  </div>';



                            }

                            if ($status==2) {
                                echo '<div   class="col-md-1">
                              
                    <button style="background-color:green;" class="btn btn-dark border-0 w-100 py-3">Approved</button>
                                  </div>';

                                  echo '<div class="col-md-1">
                                  <form action="request.php" method="post">
                                  <input type="hidden" name="pay" value="'.$id.'">
                                  <input type="hidden" name="from" value="'.$byuser.'">
                                  <input type="hidden" name="for" value="'.$email.'">
                                  <input type="hidden" name="item" value="'.$itemname.'">
                                  <input type="hidden" name="price" value="'.$price.'">
                      <button class="btn btn-dark border-0 w-100 py-3">Pay</button>
                      </form>                            </div>';



                            }

                            if ($status==3) {
                                echo '<div   class="col-md-2">
                              
                    <button style="background-color:grey;" class="btn btn-dark border-0 w-100 py-3">Ended</button>
                                  </div>';



                            }


                            if ($status==4) {
                                echo '<div   class="col-md-2">
                              
                    <button style="background-color:red;" class="btn btn-dark border-0 w-100 py-3">Rejected</button>
                                  </div>';



                            }
                            
                            
                


                            }}?>




<?php


            
?>
           

        </div>
    </div>
</div>
<!-- Search End -->

<?php
include  "foot.php";
?>