<?php
session_start();
include_once("header.php");

?>

<?php
$mail = $_SESSION["usermail"];

$select = $pdo->prepare("select * from users where usermail='$mail'");

$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);

$usermail_db = $row["usermail"];
$userpassword_db = $row["userpassword"];
$role_db = $row["role"];
$status_db = $row["status"];


$role = $role_db;
$status = $status_db;

echo"<center><i class='bi bi-arrow-up'></i> Click Here to Open/Close Menu <i class='bi bi-arrow-up'></i>";
echo "<h4><br>Hello,<br></h4><h1>" . $_SESSION["usermail"] . "</h1><h4><br>Your Role: </h4><h2>" . $role . "<br></h2><h4><br>Your Status: </h4><h2>" . $status . "</h2></center>";

if($role=="admin"){


  echo "<center>
  <a href='dbbackup.php'>Database Backup</a>
  </center>";
}


?>


<?php
include_once("dbbackup.php");
include_once("footer.php");

?>


