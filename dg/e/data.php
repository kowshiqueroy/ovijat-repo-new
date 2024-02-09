<?php

include "config.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  
}


$user=$_SESSION['email'];
$sql = "SELECT  * FROM (
SELECT  tomail FROM chats WHERE frommail='$user'   
UNION
SELECT  frommail FROM chats WHERE tomail='$user' ) AS tomail 
";
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