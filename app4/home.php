<?php

include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" ) {
    
    header("location:index.php");
    
}
include_once "header.php";

include 'footer.php';

?>