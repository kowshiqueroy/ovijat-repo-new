<?php
if (session_id() == '') {

    session_start();
}
$company = $_SESSION["company"];


$db = "mysql:host=localhost;dbname=" . $company;
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($db, $dbuser, $dbpass);


} catch (PDOException $f) {

    // echo $f->getmessage();
    echo "No Company Found: " . $f->getMessage() . "";
    echo "Error";
    header('refresh:1;index.php');

}


?>