<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>


<?php




define('DB_HOST','localhost');
$dbinitial="ovijattt_";


if(

    $_SERVER['SERVER_NAME']=="localhost" &&
    
       $_SERVER['HTTP_HOST']=="localhost"
    
    
    ) {
        
        define('DB_USER','root');
        define('DB_PASS','');

        if (isset($_REQUEST['staffid']) && isset($_REQUEST['company'])){

            $id=$_REQUEST['staffid'];
            $company=$_REQUEST['company'];

        define('DB_NAME', $company);

        }
    }
    
    else{


        define('DB_USER','ovijattt_admin');
        define('DB_PASS','B?b)*^XhRc6j');

        if (isset($_REQUEST['staffid']) && isset($_REQUEST['company'])){

            $id=$_REQUEST['staffid'];
            $company=$_REQUEST['company'];

      
        define('DB_NAME',$dbinitial.$company);
  
        }
    
    }
   


if (isset($_SESSION['company2']) &&  !isset($_REQUEST['staffid']))
{

    if(

        $_SERVER['SERVER_NAME']=="localhost" &&
        
           $_SERVER['HTTP_HOST']=="localhost"
        
        
        ) {
          
            define('DB_NAME',$_SESSION['company2']);
        }
        
        else{
    
          
         
            define('DB_NAME',$dbinitial.$_SESSION['company2']);
      
        
        
        }
    

    
  
    
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
        $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die("Error");    }
    catch (PDOException $e)
    {
        header("Location: new_company.php");
    exit("Error: " . $e->getMessage());
    }



}
else{

    if(!isset($_SESSION['idcardvisit'])){

        header("Location: index.php");

    }
    


}



?>
