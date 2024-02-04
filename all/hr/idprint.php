<?php

if (!isset($_REQUEST['id'])){

 
  echo '<script> window.location.replace("index.php"); </script>';

}
else {

  $id=$_REQUEST['id'];
include  "config.php";

//Fetch one row
 
  $stmt = $conn->prepare("SELECT * FROM emp WHERE eid='$id'");
  $stmt->execute();
  $row=$stmt->fetch();
 





    $eid=$row['eid'];
    $n=$row['n'];
    $dg=$row['dg'];
    $dp=$row['dp'];
    $em=$row['em'];
    $ph=$row['ph'];
    $bg=$row['bg'];
    $d=$row['date'];
    $photo=$row['photo'];}
  
    ?>


<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      height: 1020px;
      width: 660px;
      margin: auto;
      text-align: center;
      font-family: arial;
      border-color: black;

      border-radius: 10px;
    }

    #upcolor {


      padding: 0px;
      background-color: #63bb47;
      width: 100%;
      height: 50px;
      border-radius: 10px 10px 0 0;


    }

    #upcolor4 {


      padding: 0px;
      background-color: #63bb47;
      width: 100%;
      height: 50px;



    }

    #upcolor5 {


      padding: 0px;
      background-color: #63bb47;
      width: 100%;
      height: 50px;
      border-radius: 0 0 10px 10px;



    }

    #upcolor2 {


      padding: 0px;
      color: white;
      background-color: #f69322;
      width: 100%;
      height: 5px;


    }

    #upcolor3 {




      background-color: #63bb47;
      margin: auto;
      margin-top: -20px;
      margin-bottom: 15px;
      width: 50%;
      height: 5px;


    }

    #img1 {
      margin-top: 20px;
      height: 200px;



    }

    #img2 {
      margin-top: 20px;
      height: 300px;
      object-fit: cover;
      border-radius: 10px;


    }


    .card2 {
      margin-top: 10px;

    }

    .title {
      color: black;
      font-size: 30px;
      margin-top: -10px;
    }

    .name {
      color: black;
      font-size: 40px;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover,
    a:hover {
      opacity: 1;
    }
  </style>
</head>

<body>

  <h2 style="text-align:center"><?php  if ($d=="EXPIRED")echo "This ID is EXPIRED/No Longer Valid<br><br>"; ?>
  
  
  ID Card Front Side</h2>

  <div class="card">

    <div id="upcolor"></div>
    <div id="upcolor2"></div>
    <div></div>
    <img id="img1" src="img/ovie.png" alt="John"> <br>
    <img id="img2" src="<?php echo $photo; ?>" alt="John">
    <h1 class="name"><strong><?php echo $n; ?></strong></h1>
    <p class="title"  style="font-size:29px;"><strong><strong><?php echo $dg; ?> (<strong><?php echo $dp; ?>)</strong></p>

    <p class="title"><?php echo $em; ?></p>
    <div id="upcolor3"></div>
    <p class="title"><?php echo $ph; ?></p>

    <div style="background-color:grey; height:100px; padding-top:5px;" id="upcolor4">
      <p style="color:white; margin-top:5px;" class="title">info@ovijatfood.com</p>
      <p style="color:white;" class="title">+88 02 951 3985</p>
      <p style="color:white;" class="title">www.ovijatfood.com</p>

    </div>
    <div id="upcolor2"></div>
    <div id="upcolor5"></div>
  </div>
  <h2 style="text-align:center; margin-top:500px;">ID Card Back Side</h2>

  <div class="card2">
    <div class="card">

<div id="upcolor"></div>
<div id="upcolor2"></div>
<div></div>
<h1 class="name"><strong>Ovijat Group</strong></h1>
<img id="img1" style="height:50px; margin-top:-20px;" src="img/ovie.png" alt="John"> <br>
<img id="img2" src="img/qr.png" alt="John">
<br> <br>
<p class="title">Employee ID: <strong><?php echo $eid; ?></strong></p>
<p class="title">Name: <strong><?php echo $n; ?></strong></p>
<p class="title">Blood Group: <strong><?php echo $bg; ?></strong></p>
<p class="title">Issue Date: <strong><?php echo $d; ?></strong></p>


<div  id="upcolor3"></div>
<p style="font-size:15px;" class="title">This ID Card is non-transferable</p>
<p style="font-size:15px;" class="title">Always carry this card during office hours</p>
<p style="font-size:15px;" class="title">In case of loss, inform issuing authority</p>
<p style="font-size:18px;" class="title">If found, post it to given address</p>

<div style="background-color:grey; height:100px; padding-top:22px;" id="upcolor4">
  <p style="color:white; margin-top:5px; font-size:25px;" class="title">OVIJAT FOOD & BEVERAGE INDUSTRIES LTD.</p>
  <p style="color:white; font-size:20px;" class="title">Shadharan Bima Bhaban 2, 139, Motijheel C/A, Dhaka - 1000</p>
 <p style="color:white; margin-top:38px;" class="title">Factory: Ramgonj, Nilphamari</p>

</div>
<div id="upcolor2"></div>
<div id="upcolor5"></div>
    </div>
  </div>

</body>

</html>