<?php






include_once "conectdb.php";
session_start();
if ($_SESSION["useremail"]=="" OR $_SESSION["role"]=="user"){
    
    header("location:index.php");
    
}
//$id=29;
$id=$_POST["pidd"];
//$sql="delete from tbl_item where pid=$id";
$sql="delete tbl_in_info , tbl_in_data FROM tbl_in_info INNER JOIN tbl_in_data ON tbl_in_info.invoice_id = tbl_in_data.invoice_id where tbl_in_info.invoice_id=$id";
$delete=$pdo->prepare($sql);

if ($delete->execute()){
    
    
}else{
    
    
    echo"error in deleting";
}

?>