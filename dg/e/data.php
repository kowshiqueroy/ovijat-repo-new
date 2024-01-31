<?php

include "config.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  
}


$user=$_SESSION['email'];
$sql = "SELECT DISTINCT(tomail) FROM chats WHERE frommail='$user' OR tomail='$user' ORDER BY id DESC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $id = $row['tomail'];
      

       

        echo '<a style=" background-color: green ; color:white; padding-left:5%; margin:1px; width: auto;
        display: block; " href="chat.php?to='.$id.'">'.$id.'</a>';
    }
}


?>