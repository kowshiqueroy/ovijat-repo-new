<?php

if (session_id() == '') {

    session_start();
}
$_SESSION["company"] = $_POST["company"];
include_once("config.php");
$usermail = $_POST["email"];
$userpassword = $_POST["password"];

try {


    $select = $pdo->prepare("select * from users where usermail= '$usermail' AND userpassword='$userpassword' ");

    $select->execute();

    $row = $select->fetch(PDO::FETCH_ASSOC);


    if ($row && $row['usermail'] == $usermail && $row['userpassword'] == $userpassword && $row['status'] == "active" )
    // if($row['useremail']==$useremail AND $row['password']==$password)
    {



        $_SESSION["usermail"] = $row["usermail"];
        $_SESSION["role"] = $row["role"];

        echo "    <center>connecting......    </center>";



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
    

        $detailsip=$details->hostname. " ".$details->city. " ".$details->region
        . " ".$details->country. " ".$details->loc. " ".$details->org
        . " ".$details->postal. " ".$details->timezone;
      

      echo  "<center>Failed<br>".$detailsip."</center>";

      echo  "<center><h1>Your IP: ".$ip."<br>is not Permitted</h1><br><h2>Developer: kowshiqueroy@gmail.com<br>Whatsapp: 01632950179</h2></center>";


      $data= "Try ".$_SESSION["usermail"]." ".$detailsip." ".time();

            $insert = $pdo->prepare("insert into logtry(data) values(:data)");
        
        
            $insert->bindParam(":data", $data);
            
            
            $insert->execute();


            header('refresh:60;index.php');
        }








      
    } else {


        echo "    <center>Error    </center>";
        header('refresh:1;index.php');

    }

} catch (PDOException $f) {

     echo $f->getmessage();



    echo "    <center>No Data Found: " . $f->getMessage() . "";
    echo "<br>Error    </center>";
    header('refresh:1;index.php');

}

?>