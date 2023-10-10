<?php
session_start();

if (isset($_SESSION['company2']))
{

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME',$_SESSION['company2']);
    
  
    
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
else{

    header("Location: index.php");


}



?>
