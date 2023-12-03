<?php
include_once ("..\config.php");

echo $_SESSION["company"];
echo $_SESSION["usermail"];
echo $_SESSION["role"];

if ($_SESSION["role"]!==basename(dirname(__FILE__))){
    header('location:..\\'.$_SESSION["role"]);

}





?>

