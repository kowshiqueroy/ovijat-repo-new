<?php

include 'head.php';



if ( !isset($_REQUEST['itemid']) AND !isset($_SESSION['email'])){

echo '<script> window.location.replace("index.php"); </script>';

}

  

$user=$_SESSION['email'];
  
if(isset($_REQUEST['submit'])){




    $photo="";

    // Check image using getimagesize function and get size
    // if a valid number is got then uploaded file is an image
    if (isset($_FILES["image"])) {
        // directory name to store the uploaded image files
        // this should have sufficient read/write/execute permissions
        // if not already exists, please create it in the root of the
        // project folder

    
        $targetDir = "items/";
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
            $photo=$targetFile;
            
        
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }











$name=$_REQUEST['name'];
$category=$_REQUEST['category'];

$detail=$_REQUEST['detail'];
$type=$_REQUEST['type'];
$stock=$_REQUEST['stock'];
$recuring=$_REQUEST['recuring'];
$period=$_REQUEST['period'];
$regularprice=$_REQUEST['regularprice'];
$saleprice=$_REQUEST['saleprice'];

$user=$_SESSION['email'];


$sql = "INSERT INTO item (user, name,category, photo,detail, type,stock, recuring,period,regularprice,saleprice)
VALUES ('$user', '$name','$category','$photo', '$detail','$type', '$stock',
'$recuring', '$period', '$regularprice', '$saleprice')";

if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}











}






?>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Item</h1>
            <p>We are happy to see you are with us</p>
        </div>
        <div class="row g-4">

            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <form action="add.php" name="form1" method="post" enctype="multipart/form-data">
                        <div class="row g-3">

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                        <?php //if ($name){ echo "value='".$name."'";}?> required>
                                    <label for="name">Name</label>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="category" id="category"
                                        placeholder="Category" <?php //if ($category){ echo "value='".$category."'";}?>
                                        required>
                                    <label for="category">Category</label>

                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-floating">

                                    <img style=" border-radius: 10%;"
                                        src="<?php if (!isset($itemphoto)){ echo "items/logo.png";} else{echo $itemphoto;} ?>"
                                        Height="80" width="80" alt="Photo">

                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-floating">

                                    <input class="btn btn-primary w-100 py-3" type="file" name="image" required>

                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="detail" id="detail"
                                        placeholder="Detail" <?php //if ($detail){ echo "value='".$detail."'";}?>
                                        required>
                                    <label for="detail">Detail</label>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <input type="number" class="form-control" name="regularprice" id="regularprice"
                                        placeholder="Regular Price" <?php //if ($detail){ echo "value='".$detail."'";}?>
                                        required>
                                    <label for="regularprice">Regular Price</label>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <input type="number" class="form-control" name="saleprice" id="saleprice"
                                        placeholder="Sale Price" <?php //if ($detail){ echo "value='".$detail."'";}?>
                                        required>
                                    <label for="saleprice">Sale Price</label>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <select name="type" class="form-select border-1 py-3">
                                        <option selected>Sell</option>
                                        <option>Rent</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <input type="text" class="form-control" name="stock" id="stock" placeholder="Stock"
                                        <?php //if ($stock){ echo "value='".$stock."'";}?> required>
                                    <label for="stock">Stock</label>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <select name="recuring" class="form-select border-1 py-3">
                                        <option value="0">One Time</option>
                                        <option value="1">Recuring</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">

                                    <input type="number" class="form-control" name="period" id="period"
                                        placeholder="Durtarion (Months)"
                                        <?php //if ($period){ echo "value='".$period."'";} else { echo "value='"0'";}?>
                                        required>
                                    <label for="period">Durtarion (Months)</label>

                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

                    <div class="phppot-container">

                        <p>Table here</p>

                        <div class="row g-1">

                            <?php
                        $sql = "SELECT * FROM item WHERE user='$user' ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];

                                $user = $row['user'];

                                $ts = $row['ts'];

                                $name = $row['name'];

                                $type = $row['type'];

                                $category = $row['category'];

                                $detail = $row['detail'];

                                $stock = $row['stock'];

                                $recuring = $row['recuring'];

                                $period = $row['period'];

                                $regularprice = $row['regularprice'];

                                $saleprice = $row['saleprice'];

                                $photo = $row['photo'];

                                if ($recuring==0){ $r= "One Time";}
                                else { $r= "Recuring";}






                                echo '
                                
                                
                                
                                
                                
                                
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img height="50" class="img-fluid" src="'.$photo.'" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">'.$category.'</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">For '.$type.' by '.$user.'</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"><s style="color:grey; font-size:10px;">'.$regularprice.'</s> '.$saleprice.' BDT</h5>
                                        <a class="d-block h5 mb-2" href="">'.$name.'</a>
                                        <p><i class="fa fa-sticky-note text-primary me-2"></i>'.$detail.'</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-boxes text-primary me-2"></i>'.$stock.'</small>
                                        <small class="flex-fill text-center border-end py-2">'.$r.'</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-calendar text-primary me-2"></i>'.$period.'</small>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comments text-primary me-2"></i> <a class="d-block h6 mb-2" href="chat.php?to='.$user.'">Chat</a></small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comments text-primary me-2"></i> <a class="d-block h6 mb-2" href="request.php?id='.$id.'">Deal</a></small>
                                </div>
                                </div>
                            </div>
                                
                                ';
                            }
                        }
                        ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
include  "foot.php";
?>