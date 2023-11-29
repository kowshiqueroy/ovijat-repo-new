
<?php
session_start();
include("db_connect.php");
require "vendor/autoload.php";
if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
      exit;}
	



$f=$_POST['f'];
$s=$_POST['s'];
$e=$_POST['m'];
$p=$_POST['p'];





?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>card</title>

	</head>

	<body>
		<script type="text/javascript">	
 		
 	
 </script>
 
		 
    <?php
	include ("db_connect.php");


	$query = "INSERT INTO Administrator ( Firstname, Sirname, Password, Email) VALUES('$f','$s','$p','$e') ON DUPLICATE KEY UPDATE    
Firstname='$f', Sirname='$s', Password='$p', Email='$e'";
	$db->query($query) or die('Error1, query failed');
	
	if($db){
	header("Location: admin.php");
	}
	else{

echo '<script>

alert("failed");
header("Location: admin.php");
</script>';

	}
	?>
	</body>
</html>
