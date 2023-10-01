<?php

$c= $_POST['c'];
$r= $_POST['r'];
$u= $_POST['u'];
$p= md5($_POST['p']);


include 'db_config.php';


$query = "SELECT * FROM user WHERE company_name='$c' AND role_name='$r' AND user_name='$u' AND BINARY user_password='$p'";
$result = $con->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['user_name'];
    }
}else{
    echo 'No user';
}




?>