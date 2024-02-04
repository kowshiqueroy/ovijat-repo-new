<?php
include  "config.php";

if(!isset($_SESSION['email'])){

echo '<script> window.location.replace("index.php"); </script>';
}

$email= $_SESSION['email'];


if(isset($_REQUEST['logout'])){
session_destroy();
 echo '<script> window.location.replace("index.php"); </script>';}

if(isset($_REQUEST['ex'])){
$eid=$_REQUEST['ex'];



//Update
  
  $sql = "UPDATE  emp SET date='EXPIRED' WHERE eid='$eid'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  echo $stmt->rowCount() . " records UPDATED successfully";





}

if(isset($_REQUEST['submit'])){





  $photo="";

  // Check image using getimagesize function and get size
  // if a valid number is got then uploaded file is an image
  if (isset($_FILES["image"])) {
      // directory name to store the uploaded image files
      // this should have sufficient read/write/execute permissions
      // if not already exists, please create it in the root of the
      // project folder

  
      $targetDir = "eimg/";
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
  if ($_FILES["image"]["size"] > 5000000) {
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



$n=$_REQUEST['n'];

$dg=$_REQUEST['dg'];

$dp=$_REQUEST['dp'];

$em=$_REQUEST['em'];

$ph=$_REQUEST['ph'];

$eid=$_REQUEST['eid'];

$bg=$_REQUEST['bg'];

$d=$_REQUEST['d'];

$admin=$_SESSION['email'];


//Insert
  
  $sql = "INSERT INTO emp (n, dg,dp,em,ph,eid,bg,date,photo,admin)
  VALUES ('$n', '$dg','$dp','$em','$ph','$eid','$bg','$d','$photo','$admin')";
   $conn->exec($sql);
  echo "New record created successfully";





}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
  * {
    box-sizing: border-box;
  }

  /* Create two equal columns that floats next to each other */
  .c1 {
    float: left;
    width: 20%;
    padding: 10px;
   
    /* Should be removed. Only for demonstration */
  }
  .c2 {
    float: left;
    width: 45%;
    padding: 10px;
   
    /* Should be removed. Only for demonstration */
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
    }
  }
</style>

<body>
<h1>Add new <a href="add.php?logout=1">Logout</a></h1> 
  <div class="row">
    <div class="column c1" style=" margin-left:20px;">

      <form action="add.php" method="post" enctype="multipart/form-data">
        <br>
        <input type="text" id="n" name="n" placeholder="Full Name" required><br><br>

        <input type="text" id="dg" name="dg" placeholder="Designation" required><br><br>

        <input type="text" id="dp" name="dp" placeholder="Department" required><br><br>

        <input type="text" id="em" name="em" placeholder="Email" required><br><br>

        <input type="text" id="ph" name="ph" placeholder="Phone" required><br><br>

        <input type="text" id="eid" name="eid" placeholder="Employee ID" required><br><br>

        <input type="text" id="bg" name="bg" placeholder="Blood Group" required><br><br>

        <input type="text" id="d" name="d" placeholder="Issue Date" required><br><br>

        <input type="file" id="photo" name="image" placeholder="Photo" required><br><br>

        
        <input type="submit" name="submit" value="Submit">
        <br><br>
      </form>

    </div>
    <div class="column c2" style="">
<h1>Database</h1>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: auto;
        }

        td,
        th {
          border: 1px solid black;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
      </style>

      <table>
        <tr>
          <th>Emp ID</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Department</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Blood Group</th>
          <th>Issue Date</th>
          <th>Photo</th>
          <th>Action</th>
          <th>Print</th>
        </tr>
        <?php


 //Fetch many row
  
  $stmt = $conn->prepare("SELECT * FROM emp");
  $stmt->execute();
  while ($row=$stmt->fetch()){
 

    $eid=$row['eid'];
    $n=$row['n'];
    $dg=$row['dg'];
    $dp=$row['dp'];
    $em=$row['em'];
    $ph=$row['ph'];
    $bg=$row['bg'];
    $d=$row['date'];
    $photo=$row['photo'];



    echo "
<tr>
<td>$eid</td> 
<td>$n</td>   
<td>$dg</td>
<td>$dp</td>
<td>$em</td>   
<td>$ph</td> 
<td>$bg</td> 
<td>$d</td> 

<td ></img>
<a href='$photo'><img style='height:80px; width:80px;' src='$photo'></a></td>



<td>  <p>
<a  href=\"add.php?ex=" . $eid. "\" > Expire   </a>
</a></p><br><p>    
<a     </a>
</a>
</p>
</td>
<td>  <p>
<a  href=\"idprint.php?id=" . $eid. "\" > Print   </a>
</a></p><br><p>    
<a     </a>
</a>
</p>
</td>
</tr>
";
}



 
 
 
 
?>
      </table>

    </div>
  </div>

  

</body>

</html>