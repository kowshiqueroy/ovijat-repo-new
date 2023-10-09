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
	     header('Content-Description: File Transfer');
         header('Content-Type: application/octet-stream');
         header("Content-length:". $size);
         header("Content-type:". $type);
         header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
		 header('Content-Transfer-Encoding: binary');
         header('Expires: 0');
         header('Cache-Control: must-revalidate');
     ob_clean();
       flush();
	       readfile('media/'.$name);	
                mysqli_close();
                exit;      
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Revenue Agency</title>
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

<?php if(isset($_SESSION['Import'])) {?>
<script type="text/javascript">
	$(document).ready(function() {
		swal({
				title: "Successfully",
				text: "File uploaded successfully",
				type: "success",
				showCancelButton: true,
				confirmButtonColor: "green",
				confirmButtonText: "OK!",
				closeOnConfirm: true,
				closeOnCancel: true,
				buttonsStyling: false
			},
			function(isConfirm) {
				if (isConfirm) {
					window.location = "admin.php";
				} else {
					window.location = "bulk.php";
				}
			});
	});
</script>
<?php  session_destroy(); }?>


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
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page" style="margin-top:0%">

			</div>
			<div class="charts">
				<div class="mid-content-top charts-grids">

					<div class="middle-content">
						<h4 class="title">

						</h4>
						<!-- start content_slider -->

						<div class="middle-content">

							<table id="example" class="display nowrap" style="width:100%">
								<thead>
									<tr>
										<th>Bulk entry upload via CSV</th>

										<th>&nbsp;</th>

										<?php
            				                                      
		           echo"<th><a href='bulk.php?ids=1'>  Edit this Sample CSV File <i class='fa fa-download'></i></a>&nbsp;</th>";										             			 	
				                        
		         ?>

									</tr>
								</thead>
								<tbody>

								</tbody>

							</table>

						</div>
					</div>
					<!--//sreen-gallery-cursual---->
				</div>

				<div class="charts">
					<div class="mid-content-top charts-grids">

						<!-- start content_slider -->

						<form method="post" action="upload.php" enctype='multipart/form-data'>

							<p style="margin-bottom:10px;">
								<input name='file' type='file' id='file'>
							</p>

							<button class="btn btn-success" name="bulk" id="btns3">&nbsp;
								<span class="glyphicon glyphicon-import" style="color: #F0F0F0"> </span> &nbsp;Import
							</button>

						</form>

						<!--//sreen-gallery-cursual---->
					</div>
				</div>

			</div>
		</div>
		<!--footer-->
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