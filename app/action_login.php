<?php
session_start();
if ( isset($_SESSION["last_login_time"]) AND (time()- (int)$_SESSION["last_login_time"]) <30 ){ 


    header('location: admin/dashboard.php');



   echo 'logged in';
}

else {



$c= $_POST['c'];
$r= $_POST['r'];
$u= $_POST['u'];
$p= md5($_POST['p']);

include 'db_config.php';




$query = "SELECT * FROM user WHERE company_name='$c' AND role_name='$r' AND user_name='$u' AND BINARY user_password='$p'";
$result = $con->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        $_SESSION["company_name"] = $c;
        $_SESSION["role_name"] = $r;
        $_SESSION["user_name"] = $u;
        $_SESSION["last_login_time"] = time();


echo $_SESSION["last_login_time"];
echo '<br>';
echo time();


    }
}else{
    echo 'No user';
}
header('location: admin/dashboard.php');
}


?>
