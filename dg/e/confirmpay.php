<?php

include 'head.php';
?>

<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">

<center><h1>Confirm Payments</h1></center>

        <?php


if(isset($_REQUEST['confirm']) ){
    $iid=$_REQUEST['confirm'];
   
    $d=date("Y-m-d");
    
    
    $sql = "UPDATE pay SET confirm='1' WHERE id='$iid'";
    
    if ($conn->query($sql) === TRUE) {
     //echo "New record created successfully";
    } else {
     // echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    }

if(isset($_REQUEST['id']) AND isset($_REQUEST['txid'])){
    $iid=$_REQUEST['id'];
    $txid=$_REQUEST['txid'];
    $d=date("Y-m-d");
    
    
    $sql = "UPDATE pay SET txid='$txid', pts='$d' WHERE id='$iid'";
    
    if ($conn->query($sql) === TRUE) {
     //echo "New record created successfully";
    } else {
     // echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    }




                        $sql = "SELECT * FROM pay WHERE  fromuser='$email' ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $pay = $row['pay'];
                                $fromuser = $row['fromuser'];
                                $item = $row['item'];
                                $price = $row['price'];
                                $ts = $row['ts'];
                                $pts = $row['pts'];
                                $foruser = $row['foruser'];
                                $banking = $row['banking'];
                                $txid = $row['txid'];
                                $confirm = $row['confirm'];

                   
                                echo '      <div class="col-md-10">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <p class="form-control " >'.$item.'<br>For: '.$foruser.'<br>'.$ts.
                                        '<br>Paid: '.$pts; 
                                        
                                       
                                        echo 
                                        
                                        '</p>
                                     
                                    </div>
                                    <div class="col-md-3">
                                        <p class="form-control border-0 py-3" >'.$price.'/=<br>'.$banking.'</p>
                
                                    </div>
                                    <div class="col-md-5">
                                  
                                    <input  class="form-control border-0 py-3" type="text" class="" name="txid" placeholder="Cash/Banking Transaction ID"';
                                    if($txid!=""){

                                        echo 'value="'.$txid.'" readonly';
                                    }
                                
                                    echo ' >
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-1">';



                    

                if ($confirm==1){
echo '<button style="background-color:green; font-size:15px;"class="btn btn-dark border-0 w-100 py-3">Confirmed </button>';

                }

                else{

                    echo ' <form action="confirmpay.php" method="post">
                    <input type="hidden" name="confirm" value="'.$id.'">
          <button class="btn btn-dark border-0 w-100 py-3">Confirm</button>
          </form>';
                }
                echo '
            </div>
                            <div class="col-md-1">
                                        <form action="chat.php" method="post">
                                        <input type="hidden" name="to" value="'.$foruser.'">
                            <button class="btn btn-dark border-0 w-100 py-3">Chat</button>
                            </form>
                        </div>
                            ';
                            
                           
                            
                            
                


                            }}?>




           

        </div>
    </div>
</div>
<!-- Search End -->

<?php
include  "foot.php";
?>