
<?php
session_start();
include("db_connect.php");
require "vendor/autoload.php";


include_once("db_connect.php");

$profile= "";
$cname = '';
$cphone = '';
$cemail = '';
$cweb = '';
$cyear = '';
$cp='';


$sqluse ="SELECT * FROM Inorg WHERE id=1 ";
$retrieve = mysqli_query($db,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($foundk = mysqli_fetch_array($retrieve))
	                                     {
                                              $profile= $foundk['pname'];
											  $cname = $foundk['name'];
											  $cphone = $foundk['Phone'];
											  $cemail = $foundk['email'];
											  $cweb = $foundk['website'];
											  $cyear = $foundk['year'];

											  
											  $cp=$profile;
		                                  }
if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
      exit;}


	  if(!isset($_GET['id'])){ 
echo '<center> <br><br>';
		if($numb!=0 ){
			
			
			if($profile!=""){echo"<img src='media/$profile' style='  max-width:150px'  alt=''><br><br>";
			
		
			}
			else{
				 echo"<img src='images/noimage.png' alt='Avatar' style='  max-width:150px'  ><br><br>";
				}	   
	   }else{

		echo"<img src='images/ovie.png' alt='Avatar' style='  max-width:150px'  ><br><br>";
 }
echo '</center>';

echo '
<center>
<br>


<h1>'.$cname. ' Employee ID Search APP</h1><br>
<form action="card.php" method="get">
ID: <input style="  border-style: solid;
border-width: 5px; ;" type="text" name="id">

<input style=" border-style: block;
border-width: 5px; padding:10px;" type="submit">
</form>

<a href="https://'. $cweb.'">Visit '. $cweb.'</a>
</center>
<style>

#bg{


	display:none;
}
</style>

';
		}
	


?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>card</title>
<style>
  body{
		  	background:white;
		  }
#bg {
  width: 1000px;
  height: 450px;
  margin:60px;
  float: left; 
 		
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 1;
font-family: sans-serif;

		  	transition: 0.4s;
		  	background-color: #FFFFFF;

			
		  	border-radius: 0%;
		}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  /*if you want to change the background image replace logo.png*/

  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
 
}
 .container{
		  	font-size: 12px;
		  	font-family: sans-serif;
		    
		  }
		 .id-1{
		  	transition: 0.4s;
		  	width:250px;
		  	height:450px;
		  	background: #FFFFFF;
		  	text-align:center;
		  	font-size: 16px;
		  	font-family: sans-serif;
		  	float: left;
		  	margin:auto;		  	
		  	margin-left:270px;
		  	border-radius:0%;

		  	
		  }
</style>
	</head>
<?php 

?>
	<body>

	
		<script type="text/javascript">	
 		
 	//window.print();
  setTimeout(function(){
   // window.close()
  },3000)


  function dis(){
	
	document.getElementById("p").style.display = "none";
	
	window.print(); 

	document.getElementById("p").style.display = "initial";
	

  }
 </script>

      <div id="bg">
	  <center>

<div id="p" >

<?php if($numb!=0 ){
                                    if($profile!=""){echo"<img src='media/$profile' style='  max-width:150px'  alt=''><br><br>";}
									else{
										 echo"<img src='images/noimage.png' alt='Avatar' style='  max-width:150px'  ><br><br>";
									    }	   
                               }else{

								echo"<img src='images/noimage.png' alt='Avatar' style='  max-width:150px'  ><br><br>";
			?>
        	<br><br> <?php }
			
			
			?>
<h1><?php echo $cname;?> Employee ID Search APP</h1><br>

	  <button  onclick = "window.location.href='https://www.ovijatfood.com';" style=" border-style: dotted;
  border-width: 5px; padding:20px;">Ovijat Group</button>
  
 <button  onClick=dis(); style=" margin-bottom:80px; border-style: dotted;
  border-width: 5px; padding:20px;">Print</button>
   <button  onclick = "window.location.href='card.php';" style=" border-style: dotted;
  border-width: 5px; padding:20px;">New Search</button>
</div>
</center>
            <div id="id" style=" margin-left:80px; border-style: solid;
  border-width: 1px; padding:30px;"   >
            	<center>
        	<?php if($numb!=0 ){
                                    if($profile!=""){echo"<img src='media/$profile' style='  max-height:100px'  alt=''><br><br>";}
									else{
										 echo"<img src='images/noimage.png' alt='LOGO' style='  max-height:100px'  ><br><br>";
									    }	   
                               }else{

								echo"<img src='images/noimage.png' alt='LOGO' style='  max-height:100px'  ><br><br>";
			?>
        	<br><br> <?php }?>
							   </center>
        	<center>
        <?php  
     $idx = $_GET['id'];
      $sqlmember ="SELECT * FROM Users WHERE Staffid LIKE '%-$idx' OR Staffid = '$idx' ";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                       $title=$found['Mtitle'];$firstname=$found['Firstname'];$sirname=$found['Sirname'];$rank=$found['Rank'];
                       $id=$found['id'];$sid=$found['Staffid'];$dept=$found['Department'];$mail=$found['Email'];$phone=$found['Phone'];
			                $count=$count+1;  $get_time=$found['Time']; $time=time(); $pass=$found['Staffid'];
			              $names=$firstname." ".$sirname;
						  $profile= $found['Picname'];$nid= $found['NID'];$jd= $found['Joining'];$dd= $found['Dissmissed'];$st= $found['MStatus'];
					 }  	 

             	 	
             	 	if($profile!=""){          
										   echo"<img src='images/$profile' ' height='120px' alt='' style='  border-radius: 50%;' >";	   
									    }
								else{
									echo"<img src='images/noimage.png'  height='120px' alt='' style='  border-radius: 50%;'>";	   
														     	
									} 
             	 	 ?>   </center>              <div class="" align="center">

        <h3 style="">ID: <?php if(isset($id)){ echo$sid;} ?></h3>
      	<h3 style="color:red;margin-top:-5%;"><?php if(isset($names)){ $namez=$title.' '.$names; echo $namez;} ?></h3>
		  <p style="margin-top:-5%;"><?php if(isset($id)){ echo$rank;} ?></p>
		  <p style="margin-top:-5%;"><?php if(isset($id)){ echo$dept;} ?></p>
		  <hr align="center" style="border: 1px solid black;width:100%;margin-top:3%"></hr> 
		<h4 align="center" style="color:green;margin-top:-2%"><?php if(isset($id)){ echo$cname;} ?></h4>
		<p align="center" style="margin-top:-5%"><?php if(isset($id)){ echo $cweb;} ?></p>
		<p align="center" style="margin-top:-5%; font-size:14px;"><?php if(isset($id)){ echo $cphone. '  '.$cemail;} ?></p>
	

      	
      	
              
      </div>
            </div>
            <div class="id-1" style="  margin-left:500px; border-style: solid;
  border-width: 1px; padding:30px;">
    	 
                     	 <img src="images/qr.png" onerror="this.src='images/noimage.png';" alt="card page qr" height="150px" style="margin-top:-5%;" >        
       <div class="container" align="center">
      <p style="margin:auto">Please scan the QR code to verify</p><br>


	  <center>
		
	  <?php 
	  
	  if($numb!=0 ){
                                    if($profile!=""){echo"<img src='media/$cp' style='margin-top:-5%;  max-height:70px'  alt='sgsgs'><br><br>";}
									else{
										 echo"<img src='images/noimage.png' alt='Avatar' style='margin-top:-5%;  max-height:70px'  ><br><br>";
									    }	   
                               }else{

								echo"<img src='images/noimage.png' alt='Avatar' style='margin-top:-5%;  max-height:70px'  ><br><br>";
			?>
        	<br><br> <?php }
			
			
			?>
							   </center>


      	<h3 style="color:green;margin-top:-5%;"><?php if(isset($id)){ echo$cname;} ?></h3>
      <p style="margin-top:-2%;">ID: <?php if(isset($id)){ echo$sid;} ?></p></p>
	  <p style="margin-top:-3%;">NID: <?php if(isset($id)){ echo$nid;} ?></p>
	  <p style="margin-top:-3%;">Joining Date: <?php if(isset($id)){ echo$jd;} ?></p>
	<?php
	

	if(isset($id) && $st=='dissmissed'){ 
		
		
		
		
		
		echo '<h2 style="margin-top:-5%;margin-bottom:2%; color:red;">Expired Date: '.$dd . '</h2>';
	
	}
	?>
	
	
	
	  <p style="margin-top:-3%;">Phone: <?php if(isset($id)){ echo$phone;} ?></p>
		  <p style="margin-top:-3%;">Mail: <?php if(isset($id)){ echo$mail;} ?></p>
	
        <hr align="center" style="border: 1px solid green;width:100%;margin-top:3%"></hr> 
		<p align="center" style="margin-top:0%; color:red;">IF FOUND PLEASE CONTACT/RETURN TO</p>
      	<p align="center" style="margin-top:-2%"><?php if(isset($id)){ echo$cyear;} ?></p>
		 
		  
      		<p> 
      			</p>


				

      		 
     </div>
</div>

        </div>
	</body>
</html>
