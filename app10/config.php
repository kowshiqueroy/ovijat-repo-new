<?php
if (session_id() == '') {

    session_start();
}
$company = $_SESSION["company"];


if(

    $_SERVER['SERVER_NAME']=="localhost" &&
    
       $_SERVER['HTTP_HOST']=="localhost"
    
    
    ) {


    $dbname=$company;
$dbuser = "root";
$dbpass = "";
    }
    
    else{

        $dbname="u105067261_".$company;
        $dbuser = "u105067261_kush";
       // $dbpass = "B?b)*^XhRc6j";
       $dbpass = "kushwebapp1212A";
   
    
    }



$dbhost="localhost";


$dbp = "mysql:host=".$dbhost.";dbname=" . $dbname;

try {
    $pdo = new PDO($dbp, $dbuser, $dbpass);


} catch (PDOException $f) {

    // echo $f->getmessage();
    echo "No Company Found: " . $f->getMessage() . "";
    echo "Error";
    header('refresh:1;index.php');

}


?>