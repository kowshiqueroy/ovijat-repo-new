<?php

include 'head.php';



if ( !isset($_REQUEST['email']) AND !isset($_SESSION['email'])){

echo '<script> window.location.replace("index.php"); </script>';

}
else {

    if(isset($_REQUEST['email'])){

    $email= $_REQUEST['email'];
    $_SESSION['email']=$email;

    }

    if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];

    }


    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $email=$row['email'];

            $password=$row['password'];

            $name=$row['name'];
            
            $address=$row['address'];
            
            $phone=$row['phone'];
            
            $institute=$row['institute'];
            
            $nid=$row['nid'];
            
            $banking=$row['banking'];
        }
      } else {
        echo "0 results";

        $email="";

        $name="";
        
        $address="";
        
        $phone="";
        
        $institute="";
        
        $nid="";
        
        $banking="";
      }

      if(isset($_REQUEST['pass'])){

        if (md5($_REQUEST['pass'])!=$password){

            echo '<script> window.location.replace("login.php?msg=Invalid Password&email='.$email.'"); </script>';
          }

          else {

            if ( isset($_REQUEST['re']) AND $_REQUEST['re']==1){

                echo '<script> window.location.replace("profile.php"); </script>';
                
                }


          }

      }
   






    if ( isset($_REQUEST['oldpass'])){
    $password=$_REQUEST['oldpass'];
    $newpass=$_REQUEST['newpass'];
    $newpass=md5($newpass);
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

        echo '<script> window.location.replace("password.php?msg=Invalid Old Password&email='.$email.'"); </script>';
      }

      else{
        $sql = "UPDATE user  SET password='$newpass' WHERE email='$email'";
        
        if ($conn->query($sql) === TRUE) {
        //  echo "New record created successfully";
        } else {
         // echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
      }


}
    else {

     
    }

  
if(isset($_REQUEST['submit'])){



$email=$_REQUEST['email'];

$name=$_REQUEST['name'];

$address=$_REQUEST['address'];

$phone=$_REQUEST['phone'];

$institute=$_REQUEST['institute'];

$nid=$_REQUEST['nid'];

$banking=$_REQUEST['banking'];



$sql = "UPDATE  user SET 
name='$name',address='$address',phone='$phone',institute='$institute',
nid='$nid',banking='$banking' WHERE email='$email'";

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
            <h1 class="mb-3">Profile</h1>
            <p>We are happy to see you are with us</p>
        </div>
        <div class="row g-4">

            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

                    <p>Hey, <?php echo $email;?> Setup Your</p>
                    <h1 class="mb-3">Profile</h1>
                    <?php
if (isset($_POST["submitphoto"])) {

    // Check image using getimagesize function and get size
    // if a valid number is got then uploaded file is an image
    if (isset($_FILES["image"])) {
        // directory name to store the uploaded image files
        // this should have sufficient read/write/execute permissions
        // if not already exists, please create it in the root of the
        // project folder
        $targetDir = "users/";
        $targetFile = $targetDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $targetFile = $targetDir . time().".".$imageFileType;
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if the file already exists in the same path
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size and throw error if it is greater than
    // the predefined value, here it is 500000
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check for uploaded file formats and allow only 
    // jpg, png, jpeg and gif
    // If you want to allow more formats, declare it here
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
           
           
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            $sql = "UPDATE  user SET photo='$targetFile' WHERE email='$email'";
            
            if ($conn->query($sql) === TRUE) {
            //  echo "New record created successfully";
            } else {
             // echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
        
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

                    <div class="phppot-container">

                    <?php
                    
                    $sql = "SELECT photo FROM user WHERE email='$email'";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $photo=$row['photo'];
                        }
                      } else {
                        echo "0 results";
                      }
                
                  ?>
            <img  style=" border-radius: 50%;" src="<?php if (!$photo){ echo "users/logo.png";} else{echo $photo;} ?>" width="200" alt="Uploaded Image">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-6">
                <br> 
                <input  class="btn btn-primary w-100 py-3" type="file" name="image" required>
               
                    </div>
                <div class="col-6">
                <br> 
                                <button class="btn btn-primary w-100 py-3" name="submitphoto" type="submit">Save</button>
                            </div>
            </div>
        </form>

      
    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form action="profile.php" name="form1" method="post">
                        <div class="row g-3">
                            <input type="hidden" class="form-control" name="email" id="email"
                                value="<?php echo $email;?>">

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Full Name" <?php if ($name){ echo "value='".$name."'";}?> required>
                                    <label for="name">Full Name</label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Address" <?php if ($address){ echo "value='".$address."'";}?> required>
                                    <label for="address">Address</label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" <?php if ($phone){ echo "value='".$phone."'";}?>
                                        required>
                                    <label for="phone">Phone</label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="institute" id="institute"
                                        placeholder="Institute" <?php if ($institute){ echo "value='".$institute."'";}?> required>
                                    <label for="institute">Institute</label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="nid" id="nid" placeholder="NID" <?php if ($nid){ echo "value='".$nid."'";}?>
                                        required>
                                    <label for="nid">NID</label>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="banking" id="banking"
                                        placeholder="Banking Details" <?php if ($banking){ echo "value='".$banking."'";}?> required>
                                    <label for="banking">Banking Details</label>

                                </div>
                            </div>

                         

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Save</button>
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