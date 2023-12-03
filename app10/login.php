<?php

$comapny=$_GET["company"];
$usermail=$_GET["email"];
$userpassword=$_GET["password"];



$db="mysql:host=localhost;dbname=".$comapny;
$dbuser="root";
$dbpass="";

try{
$pdo = new PDO($db,$dbuser,$dbpass);


}

catch(PDOException $f){
    
    echo $f->getmessage();
}



$select= $pdo->prepare("select * from users where usermail= 'a@a.a' AND userpassword='a' "); 
    
$select->execute();
    
$row=$select->fetch(PDO::FETCH_ASSOC);


if($row && $row['usermail']==$usermail && $row['userpassword']==$userpassword AND $row["role"]=="admin")
   // if($row['useremail']==$useremail AND $row['password']==$password)
    
    {
        session_start();
        
        $_SESSION["company"]=$comapny;
        $_SESSION["usermail"]=$row["usermail"];
        $_SESSION["role"]=$row["role"];


        header('refresh:1;admin');
        }

        else{


echo"Error";
header('refresh:1;index.php');

        }

?>