<?php

include 'head.php';
?>

<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">



        <?php

if (isset($_REQUEST['cancel'])){


$id=$_REQUEST['cancel'];
$status=$_REQUEST['value'];


$sql = "UPDATE request SET status='$status' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
 //echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}







}
                        $sql = "SELECT * FROM request WHERE byuser='$email' ORDER BY id DESC";
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
                                $status = $row['status'];
                                echo '      <div class="col-md-7">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <p class="form-control " >'.$itemname.'<br>From: '.$foruser.'<br>'.$ts.
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
                                        <p class="form-control border-0 py-3" >'.$price.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                        <form action="chat.php" method="get">
                                        <input type="hidden" name="to" value="'.$byuser.'">
                            <button class="btn btn-dark border-0 w-100 py-3">Chat</button>
                            </form>
                        </div>
                            ';
                            
                            if ($status==0) {
                                echo '<div class="col-md-1">
                                <form action="deal.php" method="get">
                                <input type="hidden" name="cancel" value="'.$id.'">
                                <input type="hidden" name="value" value="2">
                    <button class="btn btn-dark border-0 w-100 py-3">Approve</button>
                    </form>                            </div>';


                    echo '<div class="col-md-1">
                                <form action="deal.php" method="get">
                                <input type="hidden" name="cancel" value="'.$id.'">
                                <input type="hidden" name="value" value="4">
                    <button class="btn btn-dark border-0 w-100 py-3">Reject</button>
                    </form>                            </div>';

                    
                    echo '<div class="col-md-1">
                                <form action="deal.php" method="get">
                                <input type="hidden" name="cancel" value="'.$id.'">
                                <input type="hidden" name="value" value="3">
                    <button class="btn btn-dark border-0 w-100 py-3">End</button>
                    </form>                            </div>';



                            }

                            if ($status==1) {
                                echo '<div   class="col-md-2">
                              
                    <button style="background-color:black;" class="btn btn-dark border-0 w-100 py-3">Canceled by User</button>
                                  </div>';



                            }

                            if ($status==2) {
                                echo '<div   class="col-md-2">
                              
                    <button style="background-color:green;" class="btn btn-dark border-0 w-100 py-3">Approved</button>
                                  </div>';

                                  echo '<div class="col-md-1">
                                  <form action="deal.php" method="get">
                                  <input type="hidden" name="cancel" value="'.$id.'">
                                  <input type="hidden" name="value" value="3">
                      <button class="btn btn-dark border-0 w-100 py-3">End</button>
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