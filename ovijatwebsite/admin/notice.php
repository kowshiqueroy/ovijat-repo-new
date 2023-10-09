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


<!DOCTYPE HTML>
<html>

<head>
	<title>notice post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- //the next plugin link below are for date -->
	<link rel="stylesheet" href="css/zebra_datepicker.min.css" type="text/css">

	<!-- Bootstrap Core CSS -->
	<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->

	<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="admin/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS-->

	<!-- side nav css file -->
	<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css' />
	<!-- //side nav css file -->

	<!-- js-->
	<script src="admin/js/jquery-1.11.1.min.js"></script>
	<script src="admin/js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
		rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="admin/js/metisMenu.min.js"></script>
	<script src="admin/js/custom.js"></script>
	<link href="admin/css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
	<script src="script/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
	<!-- //the links below are for date plugin -->
	<script src="script.js"></script>

</head>



<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target=".collapse" aria-expanded="false">
						
							
						</button>
						<?php   
				$sqln ="SELECT * FROM Inorg ";
                     $rgetb = mysqli_query($db,$sqln);
	                   $numb=mysqli_num_rows($rgetb);
                   if($numb!=0){
                            while($foundl = mysqli_fetch_array($rgetb))
	                                     {
                                              $profile= $foundl['pname'];
		                                  }
										echo"<center><img src='media/$profile'   height='120px' alt=''></center>";	   
                               }
							else{
														     	
								
										
            } ?> </div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">
								<h4>Administrator</h4>
							</li>
							<li class="treeview">
								<a href="admin.php">
									<i class="fa fa-tv"></i> <span>Control Panel</span>
								</a>
							</li>

						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				
				<!--notification menu end -->
				
			</div>
			<div class="header-right">

				<!--search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">

									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">

								<li> <a href="logout.php"><i class="fa fa-sign-out"></i></a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>


        <style>


#content {
  margin-left:250px;
  margin-right:50px;
}
  

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }

  #content {
   
  margin-left:5px;
  margin-right:5px;
}
}
</style>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
<div id="content">


<br><br><br>


<div class="row">
  <div class="column">
   
<h3>Post a new Notice</h3>
<br>




  
<div>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

  <label for="lname">Date [YYYY.MM.DD]</label>
    <input type="text" id="lname" name="deadline" value="<?php  
echo date("Y.m.d"); ?>" required>




    <label for="fname">Notice Title</label>
    <input type="text" id="fname" name="jobtitle" value="" required>

    

    <label for="lname">Details</label>
    <input type="text" id="lname" name="details" value="" required>
  
    <input type="submit" value="Submit" name="submit">
  </form>
  </div>

<?php

if(isset($_POST['submit'])) {

    $d=$_POST["deadline"].": ".$_COOKIE['adminemail'];
    $t=$_POST["jobtitle"];
    $jd=$_POST["details"];

  

    $notice_person="";
    $sqlmember ="SELECT * FROM Users WHERE MStatus!='dissmissed' ORDER BY MStatus";
    $retrieve = mysqli_query($db,$sqlmember);
                     $count=0;
      while($found = mysqli_fetch_array($retrieve))
      {

echo $found['Email'];


$to=$found['Email'];
$subject="Notice: ".$t;
$msg=$jd." by: ".$_COOKIE['adminemail'];





$head="From: Ovijat Group< it@ovijatfood.com>\r\nReply-To: ".$_COOKIE['adminemail'];
$sub=$subject;

if(
mail($to,$sub,$msg,$head))





{

	$notice_person.=$to.";";
}
else{
    echo '<script>alert("Failed Mailing to: '.$to.'")</script>';

}



      }

	  $enter="INSERT INTO Notices (notice_date,notice_title,notice_details,notice_person) VALUES('$d','$t','$jd','$notice_person')";
	  $db->query($enter);

  echo "
  
  <script type = 'text/javascript'>
  
  window.location = 'notice.php';
  </script>
  
  
  ";

}



?>

  <div class="column">
  <br><br>
  <h2>Recent Notices</h2>


<br><br>
    <table>
      <tr>
        <th>Posted</th>
        <th>Title</th>
        <th>Details</th>
		<th>Persons</th>
    
      </tr>
     

<?php

$sqlmember = "SELECT * FROM Notices ORDER BY id DESC";;
 

$retrieve = mysqli_query($db,$sqlmember);
                 $count=0;
  while($row = mysqli_fetch_array($retrieve))
  {
    echo "<tr> <td>" . $row["notice_date"]. "</td><td>" . $row["notice_title"]. "</td><td>" . $row["notice_details"]. "</td><td style='font-size:10px;'>".$row["notice_person"]."</tr>";
  }

?>
    
    </table>






</div>









<div class="footer">
			<p> <a href="#" target="">Developed by kowshiqueroy@gmail.com</a></p>
		</div>
		<!--//footer-->
	</div>

	<!-- Classie -->
	<!-- for toggle left push menu script -->
	<script src="admin/js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById('cbp-spmenu-s1'),
       
			showLeftPush = document.getElementById('showLeftPush'),
			body = document.body;
		showLeftPush.onclick = function() {
			classie.toggle(this, 'active');
			classie.toggle(body, 'cbp-spmenu-push-toright');
			classie.toggle(menuLeft, 'cbp-spmenu-open');
			disableOther('showLeftPush');
		};

		function disableOther(button) {
			if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
			}
		}
	</script>
	<!-- //Classie -->
	<!-- //for toggle left push menu script -->

	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
		$('.sidebar-menu').SidebarNav()
	</script>
	<!-- //side nav js -->

	<!-- //for index page weekly sales java script -->

	<!-- // the two links below are for date picker calendar -->
	<script type="text/javascript" src="js/zebra_datepicker.min.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	<!-- //the link below used for form slidng on click -->
	<script src="js/index.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="admin/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>

</html>