<?php
session_start();

include_once("..\config.php");
$ipaddress = '';
if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
else
    $ipaddress = 'UNKNOWN';

$data= "OUT ".$_SESSION["usermail"]." ".$ipaddress;

$insert = $pdo->prepare("insert into log(data) values(:data)");


$insert->bindParam(":data", $data);


$insert->execute();

include_once("dbbackup.php");

session_destroy();


?>

<p>    <center>Loging out....    </center></p>


<script>
   
window.location.replace("../index.php");
 
</script>

