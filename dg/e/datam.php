<?php

include "config.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  
}
//$from="";

$user=$_SESSION['email'];
$fromm=$_SESSION['from'];




$sql = "SELECT * FROM chats WHERE (frommail='$user' AND tomail='$fromm') OR (tomail='$user' AND frommail='$fromm') ORDER BY id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $msg = $row['msg'];
        $ts = $row['ts'];
        $frommail = $row['frommail'];

        if ($frommail==$user) {

                echo '<p style=" background-color: green ; color:white; margin-left:50%; padding:10px; border-radius:20px;">';

        } else {

            echo '<p style="background-color: grey; color:white; margin-right:50%; padding:10px; border-radius:20px;">';
        }
      

       

        echo ''. $msg.'</p>';
        
        if ($frommail==$user) {

            echo '<p class="ts" style=" font-size:10px; color:grey; margin-left:70%">';

    } else {

        echo '<p class="ts" style="font-size:10px; color:green; margin-left:20%;">';
    }
        echo $ts.'</p> ';
    }
}


?>