

<?php

include 'head.php';

if (!isset($_REQUEST['email'])){

echo '<script> window.location.replace("email.php"); </script>';

}
else {

    $email= $_REQUEST['email'];
    $password=rand(100000,999999);
   

$passwordh=md5($password);
    if (!isset($_REQUEST['msg'])){

$sql = "REPLACE INTO user (email, password,status)
VALUES ('$email', '$passwordh','$password')";

if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}
    }

}



?>   



        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Verification</h1>
                    <p>We are happy to see you are with us</p>
                    <?php

                    if (isset($_REQUEST['msg'])){

echo '<p style="color:red;">'.$_REQUEST['msg'].'</p>';

}

?>
                </div>
                <div class="row g-4">
                   
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    
                    <p>Check Your Mailbox <?php echo $_REQUEST['email'];?> for a</p>
                    <h1 class="mb-3">One Time Password (OTP)</h1>   
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <form action="password.php" name="form1" method="get" >
                                <div class="row g-3">
                                   
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="otp" id="otp" placeholder="OTP" required>
                                            <label for="otp">OTP</label>

                                            <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $_REQUEST['email'];?>">

                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <?php
include  "foot.php";
?>