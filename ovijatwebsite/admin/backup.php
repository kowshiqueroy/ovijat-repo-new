<?php 
session_start();
include("db_connect.php");

if(isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){
$adminid = $_COOKIE['adminid'];
$adminemail = $_COOKIE['adminemail'];

$sqluser ="SELECT * FROM Administrator WHERE Password='$adminid' && Email='$adminemail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
              $id= $found['Email'];
		 }	   
 }else{
	 header('location:index.php');
      exit;
}
	

if(isset($_GET['ids'])) 
          {	           
			  $id=$_GET['ids'];
              $query = "SELECT Name,Type,Size,content FROM Files WHERE id='$id' ";         
         $result = mysqli_query($db,$query) or die('Error, query failed');		 
     list($name, $type, $content) = mysqli_fetch_array($result);
	       $path = 'media/'.$name;
		   $size = filesize($path);
	    
	       readfile('media/'.$name);	
                mysqli_close();
                exit;      
	}
?>











<?php
include 'db_connect.php';
 
   

//Enter your database information here and the name of the backup file
$dbName =$dbd;
$dbUsername =$ud;
$dbPassword =$pd;
$dbHost =$sd;



backupDatabaseTables($dbHost,$dbUsername,$dbPassword,$dbName,$tables = '*');
function backupDatabaseTables($dbHost,$dbUsername,$dbPassword,$dbName,$tables = '*'){
  //connect & select the database
  $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

  //get all of the tables
  if($tables == '*'){
      $tables = array();
      $result = $db->query("SHOW TABLES");
      while($row = $result->fetch_row()){
          $tables[] = $row[0];
      }
  }else{
      $tables = is_array($tables)?$tables:explode(',',$tables);
  }
  $return ="";
  //loop through the tables
  foreach($tables as $table){
      $result = $db->query("SELECT * FROM $table");
      $numColumns = $result->field_count;

      $return .= "DROP TABLE $table;";

      $result2 = $db->query("SHOW CREATE TABLE $table");
      $row2 = $result2->fetch_row();

      $return .= "\n\n".$row2[1].";\n\n";

      for($i = 0; $i < $numColumns; $i++){
          while($row = $result->fetch_row()){
              $return .= "INSERT INTO $table VALUES(";
              for($j=0; $j < $numColumns; $j++){
                  $row[$j] = addslashes($row[$j]);
                  $row[$j] = preg_replace("/\n/","/\\n/",$row[$j]);
                  if (isset($row[$j])) { $return .= '"'.$row[$j].'"' ; } else { $return .= '""'; }
                  if ($j < ($numColumns-1)) { $return.= ','; }
              }
              $return .= ");\n";
          }
      }

      $return .= "\n\n\n";
  }
$n=date("Y.m.d.h.i.s").'.sql';
 





$to="it.ovijat@gmail.com";
$head="From: Ovijat Group< it@ovijatfood.com>\r\nReply-To: career.ovijat@gmail.com";
$sub="DB Backup HRM ".date("d-m-Y-");
$msg=$return;
if(
mail($to,$sub,$msg,$head))

{echo "Done";}

else{
    
    
    echo "Failed";
}


  //save file
  $handle = fopen('backup/'.$n,'w+');

  if(  fwrite($handle,$return)){

    fclose($handle);


/*
$file_url = 'backup/'.$n;  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
*/
echo'

<script>

alert("Success");
</script>

';

$folderName="backup/";
if (file_exists($folderName)) {
    foreach (new DirectoryIterator($folderName) as $fileInfo) {
        if ($fileInfo->isDot()) {
            continue;
        }
        if ($fileInfo->isFile() && time() - $fileInfo->getCTime() >= 7*24*60*60) {
            unlink($fileInfo->getRealPath());
        }
    }
}



//header('Location: admin.php');

  }

  else{


    echo'

<script>

alert("Failed");
</script>

';

//header('Location: admin.php');
  }

 
}

?>