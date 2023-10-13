<?php

try{
$pdo = new PDO("mysql:host=localhost;dbname=pos_db","root","");
//echo "connection Sucessfull";

}catch(PDOException $f){
    
    echo $f->getmessage();
}




//include_once"conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" ){
    
    //header("location:index.php");
}



$id=$_GET['q'];

$select=$pdo->prepare("select * from tbl_person where name = :ppid");
$select->bindParam(':ppid',$id);
$select->execute();
$row=$select->fetch(PDO::FETCH_ASSOC);



//echo ("value of thid selection id : ".$id);
?>




    
<p  style=" padding-top: 10px;" id="address"><?php  echo $row['address'];?></p>


      <a   id="phone"><?php  echo $row['phone'];?></a>



      <a  id="mail"><?php  echo $row['mail'];?></a>

     

