<?php


if (isset($_POST['submit'])){

if ($_POST['setup_type']=="license_code"){








$company_name= $_POST['c'];
$role_name="admin";
$user_name=$_POST['u'];
$p=md5($_POST['p']);
$user_password=md5($p);
$license_code=$_POST['license_code'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app_db";
$conn = mysqli_connect($servername, $username, $password , $dbname) or die($con);

$sql = "SELECT * FROM company WHERE company_name = '$company_name' AND license_code='$license_code'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

  echo "successful<br>";

//user1

$sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
VALUES ('$user_name','$user_password','$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";


  session_start();
         
          $_SESSION["company_name"] = $company_name;
          $_SESSION["role_name"] = $role_name;
          $_SESSION["user_name"] = $user_name;
          $_SESSION["last_login_time"] = time();
  
  
  echo $_SESSION["last_login_time"];
  echo '<br>';
  echo time();
  header('location: admin/dashboard.php');
  
  
}

else {
  echo "Error: License Code";
}
         
        
  
  
}} else {
    echo "Error: License Code";
}
}



else{


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app_db";
    
    
    $company_name= $_POST['c'];
    $role_name="admin";
    $user_name=$_POST['u'];
    $p=md5($_POST['p']);
    $user_password=md5($p);
    
    //company1
    
    $license_code="0";
    $license_date="";
    $sql = "INSERT INTO company (company_name,license_code,license_date)
    VALUES ('$company_name', '$license_code', '$license_date')";
      $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully<br>";
      $conn->close();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $sql = "INSERT INTO role (role_name,company_name)
    VALUES ('$role_name','$company_name')";
      $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully<br>";
      $conn->close();
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    
    //user1
    
    $sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
    VALUES ('$user_name','$user_password','$role_name','$company_name')";
      $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully<br>";
    
    
      session_start();
             
              $_SESSION["company_name"] = $company_name;
              $_SESSION["role_name"] = $role_name;
              $_SESSION["user_name"] = $user_name;
              $_SESSION["last_login_time"] = time();
      
      
      echo $_SESSION["last_login_time"];
      echo '<br>';
      echo time();
      header('location: admin/dashboard.php');
      
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }











}  
?>