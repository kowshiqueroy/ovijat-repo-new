<?php

   
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


$usermail = $_POST["email"];
$userpassword = $_POST["password"]."5877";
$userpassword=md5($userpassword);


include_once("config.php");

//echo"<center><br><br>Hello".$_SESSION["username"]." ".$usermail."</center>";


try {


    $select = $pdo->prepare("select * from users where usermail= '$usermail' AND userpassword='$userpassword' ");

    $select->execute();

    $row = $select->fetch(PDO::FETCH_ASSOC);


//echo $row['userpassword'];
//echo $userpassword;
//&& $row['userpassword'] == $userpassword 

    if ($row && $row['usermail'] == $usermail && $row['status'] == "active" )

    {
        
  



        $_SESSION["usermail"] = $row["usermail"];
        $_SESSION["role"] = $row["role"];

        echo "    <center><h1>connecting to the cloud server......    </center><h1>";



        $ip = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ip = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ip = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ip = $_SERVER['REMOTE_ADDR'];
        else
            $ip = 'UNKNOWN';

              


      $data= "IN ".$_SESSION["usermail"]." ".$ip;



        $selectip = $pdo->prepare("select * from ip where ipname= '$ip' ");

        $selectip->execute();
    
        $rowip = $selectip->fetch(PDO::FETCH_ASSOC);
    
    
        if ($rowip && $rowip['ipname'] == $ip){

            $insert = $pdo->prepare("insert into log(data) values(:data)");
        
        
            $insert->bindParam(":data", $data);
            
            
            $insert->execute();

            $_SESSION["ip"] = $ip;

            header('refresh:1;'.$row["role"]);

        }

        else {

            
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    

        $detailsip=$ip. " ".$details->city. " ".$details->region
        . " ".$details->country. " ".$details->loc. " ".$details->org
        . " ".$details->postal. " ".$details->timezone;
      

      echo  "<center>Failed<br>".$detailsip."</center>";

      echo  "<center><h1>Your IP: ".$ip."<br>is not Permitted</h1><br></center><br>
      
      <center><a  href='https://api.whatsapp.com/send?phone=8801632950179&text=$ip'>Click Here to Get Access Request via WHATSAPP  </a></center>";
       
    
//

      $data= "Try ".$_SESSION["usermail"]." ".$detailsip." ".time();

            $insert = $pdo->prepare("insert into logtry(data) values(:data)");
        
        
            $insert->bindParam(":data", $data);
            
            
            $insert->execute();


            header('refresh:60;index.php');
        }








      
    } else {


        echo "    <center>Error Username/Password/Status  </center>";
        header('refresh:5;index.php');

    }

} catch (PDOException $f) {

     echo $f->getmessage();



    echo "    <center>No Data Found.";
    echo "<br>Error    </center>";
    header('refresh:5;index.php');

}

?>