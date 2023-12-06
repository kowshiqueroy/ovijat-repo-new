<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
date_default_timezone_set("Asia/Dhaka");


$company = $_SESSION["company"];




if(

    $_SERVER['SERVER_NAME']=="localhost" &&
    
       $_SERVER['HTTP_HOST']=="localhost"
    
    
    ) {

      $dbname=$_SESSION["company"]."";
$dbname=$company;
$dbuser = "root";
$dbpass = "";
    }
    
    else{

       // $dbname="u105067261_".$company."";
          //$dbname="u105067261_ovi";
          $dbname="u105067261_".$_SESSION["company"]."";
        $dbuser = "u105067261_kush";
       // $dbpass = "B?b)*^XhRc6j";
       $dbpass = "kushwebapp1212A";
   
    
    }



$dbhost="localhost";


$dbp = "mysql:host=".$dbhost.";dbname=" . $dbname;

try {
    $pdo = new PDO($dbp, $dbuser, $dbpass);
   
    //echo "PDO OK";


} catch (PDOException $f) {

  
   // echo "<center>No Company Found: <br>" . $f->getMessage() . "";
    echo "<center><br><br><br><h1>Cloud Server Busy.<br>Session Not Working.</h1>Error</center>";
   // header('refresh:10;index.php');
   
   echo"<script>
location.reload();
</script>";

}


?>