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

        echo "connecting......";



        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        
        $data= "IN ".$_SESSION["usermail"]." ".$ipaddress;
        
        $insert = $pdo->prepare("insert into log(data) values(:data)");
        
        
        $insert->bindParam(":data", $data);
        
        
        $insert->execute();


        header('refresh:1;'.$row["role"]);
    } else {


        echo "Error";
        header('refresh:1;index.php');

    }

} catch (PDOException $f) {

    // echo $f->getmessage();
    echo "No Data Found: " . $f->getMessage() . "";
    echo "Error";
    header('refresh:1;index.php');

}

?>