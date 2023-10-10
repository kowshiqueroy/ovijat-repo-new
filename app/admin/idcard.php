<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$_SESSION['idcardvisit']="true";
include('../includes/config.php'); ?>


<?php

//Terminal code  :  composer require endroid/qr-code
require "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;






if (isset($_REQUEST['staffid']) && isset($_REQUEST['company'])){

    $id=$_REQUEST['staffid'];
    $company=$_REQUEST['company'];
    
   // echo "ID Card for ".$id." From ".$company;


    $file_pointer = "qr/".$company.$id.".png";
    if (file_exists($file_pointer)) {
        //echo "The file $file_pointer exists";
    }else {
       // echo "The file $file_pointer does not exists";
                         
                               
                               
                               $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                               
                               
                               $qr_code= QrCode::create($actual_link)
                               
                                                   ->setSize(200)
                                                   ;
                               
                               $writer=new PngWriter;
                               $result=$writer->write($qr_code);
                               
                               
                               //header("Content-type: ".$result->getMimeType());
                               
                               //echo $result-> getString();
                               
         $result->SaveToFIle("qr/".$company.$id.".png");




       
         
       
         
         // Establish database connection.
         try
         {
         $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
         }
         catch (PDOException $e)
         {
             header("Location: new_company.php");
         exit("Error: " . $e->getMessage());
         }
     
         try
         {
             $conn = mysqli_connect('localhost','root','',$_SESSION['company2']) or die("Error");    }
         catch (PDOException $e)
         {
             header("Location: new_company.php");
         exit("Error: " . $e->getMessage());
         }
























    }
    
    
    
  

   


}

else{

    echo "Invalid ID";

}


?>




<center>
<div id="savebtn">
<p>Set Proper Paper size [A4] and Margins [Default] while printing/saving this as PDF</p>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width -->

<button onclick="savepdf()"class="btn"><i class="fa fa-print"></i> Print</button>

</div>
<div class="flex-container">

  <div class="flex-child magenta">
    Flex Column 1
  </div>
  
  <div class="flex-child green">
    Flex Column 2
  </div>
  
</div>

</center>



<script>
function savepdf() {
  var x = document.getElementById("savebtn");
 
    x.style.display = "none";
   print();
    x.style.display = "block";
  
}
</script>
<style>


/* Style buttons */
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;

}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
.flex-container {
    display: block;
    flex: 1;
    border: 1px solid red;
    width: 760px;
}

.flex-child {
    flex: 1;
    border: 1px solid black;
    width: 660px;
    height: 1020px;
   
    margin-bottom:60px;
}  

.flex-child:first-child {
  
   margin-top:40px;
   
} 


</style>




