

<?php

include 'head.php';

if ( !isset($_REQUEST['email'])){

echo '<script> window.location.replace("email.php"); </script>';

}
else {

    $email= $_REQUEST['email'];

    if ( isset($_REQUEST['otp'])){
    $password=$_REQUEST['otp'];
    $passworddb='';
    

    $sql = "SELECT password FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $passworddb=$row['password'];
        }
      } else {
        echo "0 results";
      }

      if (md5($password)!=$passworddb){

        echo '<script> window.location.replace("otp.php?msg=Invalid OTP&email='.$email.'"); </script>';
      }


}
    else {


        $password="";
    }

  



}



?>   



        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">New Password</h1>
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
                    
                    <p>Hey, <?php echo $_REQUEST['email'];?> Setup Your</p>
                    <h1 class="mb-3">New Password</h1>   
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <form action="profile.php" name="form1" method="get" >
                                <div class="row g-3">
                                   
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="<?php if ( !isset($_REQUEST['otp'])){echo 'text" placeholder="Old Password"';} else {echo 'hidden"';}?>" class="form-control" name="oldpass" id="oldpass" value="<?php echo $password;?>" required>
                                            <?php if ( !isset($_REQUEST['otp'])){echo ' <label for="oldpass">Old Password</label>';}?>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="newpass" id="newpass" placeholder="New Password"  required>
                                            <label for="newpass">New Password</label>
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