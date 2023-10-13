<?php





include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" ){
    
    //header("location:index.php");
}



$id=$_GET['myyid'];
//$id= 20;
//$id = 17;
$select=$pdo->prepare("select * from tbl_item where pid = :ppid");
$select->bindParam(':ppid',$id);
$select->execute();
$row=$select->fetch(PDO::FETCH_ASSOC);




$newDate = date('Y.m.d', strtotime(' + '.$row['expm'].' months'));
$row['expm']=$newDate;


$response=$row;
header('Content-Type: application/json');
echo json_encode($response);

//echo ("value of thid selection id : ".$id);
?>


