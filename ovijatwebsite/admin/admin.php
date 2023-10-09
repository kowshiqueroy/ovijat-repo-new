<?php 
session_start();
include("db_connect.php");

if(isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){
	
	$userid=$_COOKIE['adminid'];
$useremail=$_COOKIE['adminemail'];

$sqluser ="SELECT * FROM Administrator WHERE Password='$userid' && Email='$useremail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
			  $emails = $found['Email'];
			  	   $id= $found['Email'];			  
   
  	     
}		 
		 
}else{
	 header('location:index.php');
      exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="admin/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
 
 <!-- <script src="jquery.js"></script> -->    
<link href="css/animate.min.css" rel="stylesheet"/>   
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">

   
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>      

   
   <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
   <script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js'></script>

      <script>
      
      $(document).ready(function() {
    $('#example').DataTable( {
        
        
    } );
        } );
      
      </script>
<script type="text/javascript"> 
            $(document).on("click", ".open-Delete", function () {
                                  var myValue = $(this).data('id');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to dissmiss this staff!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, remove!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                  	var vals=myValue;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "upload.php",
                                                      data: { Valuedel: vals},
                                                      success: function(result) {
                                                      

                                                      if(result="ok"){
                                                                    swal({title: "Done!", text: "Staff has been dissmissed.", type: "success"},
                                                          function(){ 
                                                                          location.reload();
                                                                          }
                                                                      );                               	                        
                                                                 }

                                                       }
                                                  }); } else {
	                                                           swal("Cancelled", "This user is safe :)", "error");
                                                          }
                                         });
                                       
                                       });
                </script>

<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>
 	<!-- requried-jsfiles-for owl -->
									<!-- //requried-jsfiles-for owl -->
</head> 
<script type="text/javascript">
 $(document).on("click", ".open-Passwords", function () {
     

       var id = $(this).data('id');
     var f = $(this).data('ie');
       var s = $(this).data('if');
       var r = $(this).data('ig');
       var d = $(this).data('ih');
       var sid = $(this).data('ik');
       var nid = $(this).data('ij');
       var e = $(this).data('iem');
       var ph = $(this).data('im');
       var st = $(this).data('in');
       var p = $(this).data('io');
       var jd = $(this).data('ip');
       var dd = $(this).data('iq');


       
  $(".modal-title #name").val(p+ " " +f+ " " +s);

     $(".modal-body #pre").val(p);
       $(".modal-body #f").val(f);
       $(".modal-body #s").val(s);
       $(".modal-body #r").val(r);
       $(".modal-body #d").val(d);
     $(".modal-body #sid").val(sid);     
     $(".modal-body #nid").val(nid);
     $(".modal-body #e").val(e);
     $(".modal-body #ph").val(ph);
      $(".modal-body #id").val(id); 
      $(".modal-body #st").val(st); 
      $(".modal-body #jd").val(jd); 
      $(".modal-body #dd").val(dd); 
}); 
 </script>
<?php if(isset($_SESSION['memberadded'])){?>
 <script type="text/javascript"> 
 	          $(document).ready(function(){
 	          	                             swal({title: "Successful!", text: "Staff added successfully!!.", type: "success"});
                                  });
              </script>
            
           <?php 
	   session_destroy();		
		    }?>
		    <?php if(isset($_SESSION['memberexist'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "There is arleady a staff with those details in the database", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
            <?php if(isset($_SESSION['emptytextboxes'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "You did not fill all the textboxes on the form", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['tutor'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "User removed successfully",
                                         text: "Do you want to remove another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=2";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['cat'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "This category arleady in the system", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['category'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=3";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
       
                    </script>             
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['del'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category Deleted",
                                         text: "Do you want to delete another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=4";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
       
                </script>
           <?php 
       	   session_destroy();}  
           ?>
 


 
 <?php if(isset($_SESSION['pass'])) {?>
<script type="text/javascript"> 

$(document).ready(function(){  
 		                           swal({title: "Successful!", text: "Staff details edited!!.", type: "success"});

                               });
       
                    </script>
      <?php  session_destroy(); }?>
      
      
      <?php   $sqlid ="SELECT * FROM Users Order BY id DESC";
			       $ret = mysqli_query($db,$sqlid);				                
                     while($found = mysqli_fetch_array($ret))
	                 {
                       $idsx=$found['id'];
                     }
      
	  
	    

$sqluse ="SELECT * FROM Inorg ORDER BY id DESC ";
$retrieve = mysqli_query($db,$sqluse);
    while($foundk = mysqli_fetch_array($retrieve))
	     {
              $name = $foundk['name'];
		      $website= $foundk['website'];
              $phone= $foundk['Phone'];
              $year= $foundk['year'];
			  $mail= $foundk['email'];
			  $idz= $foundk['id'];
		 }	 

  ?>

 <div id="Taxreceipted" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	 Add/Modify HR Admin
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	     <form action="addhr.php" method="post" target="_blank">

             <p>Existing HRs: 



             <?php   $sqlid ="SELECT * FROM 	administrator ";
			       $ret = mysqli_query($db,$sqlid);				                
                     while($found = mysqli_fetch_array($ret))
	                 {
                       echo $found['Firstname'].': '.$found['Email'].' | ';
                     }?>

             </p>

             <br><br>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">First Name:</span>
    <input id="text" type="text" class="form-control" name="f" required>
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Sur Name: </span>
   <input type="text" class="form-control" name="s" required>
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Mail: </span>
   <input type="text" class="form-control" name="m" required >
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Password</span>
   <input type="password" class="form-control" name="p" >
  </div>
 
  

      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Submit" id="btns1" name="Change"> &nbsp;
      </div>
      </form> 
      </div>       
  </div>
  </div> 
 


<div id="Passwords" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
                   Edit details of <input style="border: none;background:#222d32" type="text" id="name" value="" readonly="readonly" />
	    	
        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
          <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Prefix:<input style="width:270px;" type="text" name="prefix" id='pre'></span></p>

        	      <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mfname" id='f'></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Surname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="msname" id='s'></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Department:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="minstitution"  id='d'></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mrank" id='r'></span></p>



               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mphone" id='ph'></span></p>

        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;Email:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="memail" id='e'></span></p>
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;NID:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mnid" id='nid'></span></p>

             
               <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Staff ID:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mid" id='sid'></span></p>
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Status:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mstatus" id='st'></span></p>
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Joining Date:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mjoin" id='jd'></span></p>
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Dissmissed Date:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mdissmissed" id='dd'></span></p>

               Add profile picture:<input name='filed' type='file' id='filed' >
                <input type="hidden" name="page" id="id"/>                                                       	      		
           
        </center>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Reset" id="amendreceipt" name="resetpass"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>
<div id="Updatepicture" class="modal fade" role="dialog">
  <div class="modal-dialog" style="float:right;width:20%">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">        	        	
        	</h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Select picture<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>
        	<input name='category' type='hidden' value='Administrator'>
        	 <input type="hidden" name="page" value="users.php"/>                                                        	      		

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>
 
 <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	ADD STAFF DETAILS
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="upload.php" enctype='multipart/form-data' style="width: 98%;">        		

            	
      	        <p style="margin-bottom:10px;">  
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:<input style="width:270px;" type="text" name="prefix"></span></p>		</p>
        		                                                           	      		
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mfname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Sirname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="msname"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Department:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="minstitution"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mrank"></span></p>
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mphone"></span></p>

        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;Email:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="memail"></span></p>
               <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NID:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mnid"></span></p>

               <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Staff ID:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="mid"></span></p>
               <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Status:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" value="active" name="mstatus"></span></p>
               <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Joining date:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" value="<?php $currentDate = date('d-m-Y'); echo $currentDate;?>" name="mjoin"></span></p>

               Add profile picture:<input name='filed' type='file' id='filed' >
                    
        		   <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-success" value="Submit" id="addmember" name="addmember"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 
  
  <div id="Initialisation" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	SYSTEM INFORMATION INITIALISATION
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >       	
      	<center> 
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Org Name:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgphone"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgemail"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Website:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgwebsite"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Address:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" name="orgyear"></span></p>
        	        Attach Organisation Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>)<input name='filed' type='file' id='filed' >
                                   	 <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Finish" id="addmember" name="orginitial"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>
  
 <div id="Initialisation2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	EDIT SYSTEM INFORMATION
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >       	
      	<center> 
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Org Name:<label style="color: red;font-size:20px;">*</label>
        			<input style="width:270px;" type="text" name="orgname" value="<?php if(isset($name)){echo$name;} ?>"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label style="color: red;font-size:20px;">*</label>
        	    	<input style="width:270px;" type="text" name="orgphone" value="<?php if(isset($phone)){echo$phone;} ?>"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email:<label style="color: red;font-size:20px;">*</label>
        			<input style="width:270px;" type="text" name="orgemail" value="<?php if(isset($mail)){echo$mail;} ?>"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Website:<label style="color: red;font-size:20px;">*</label>
        	     	<input style="width:270px;" type="text" name="orgwebsite" value="<?php if(isset($website)){echo$website;} ?>"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Address:<label style="color: red;font-size:20px;">*</label>
        	     	<input style="width:270px;" type="text" name="orgyear" value="<?php if(isset($year)){echo$year;} ?>"></span></p>
        	                         	   Attach Organisation Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>)<input name='filed' type='file' id='filed' >
                                          	      	 <input type="hidden" name="page" value="admin.php"/>                                                        	      		
                          	      	<input type="hidden" name="pageid" value="<?php echo$idz; ?>"/> 	
      	
         </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Update" id="addmember" name="orgupdate"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 


  <body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
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
										echo"<center><img src='media/$profile'    height='120px' alt=''></center>";	   
                               }
							else{
														     	
								
										
           ?>
            <h1>
            	<a class="navbar-brand" href="index.html"><span class="fa fa-area-chart">
            		
            	</span>KowshiqueRoy<span class="dashboard_text"></span>
            	</a>
           </h1>
           <?php } ?> 

           </div>
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
               <li class="treeview">
                <a href="#">
                <i class="fa fa-institution"></i>
                <span>Comapny Info</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a data-toggle='modal' data-id='' href='#Initialisation' class='open-Initial'><i class="fa fa-calendar-plus-o"></i>Add Company Info</a></li>
                  <li><a data-toggle='modal' data-id='' href='#Initialisation2' class='open-Initial2'><i class="fa fa-edit"></i>Edit Comapny Info</a></li>
                </ul>
              </li>
                            
              <li class="treeview">
                  <a data-toggle='modal' data-id='' href='#Useradd' class='open-adduser'><i class="fa fa-user-plus"></i>Add Employee</a>
         
              </li>
              <li class="treeview">
              	  <a  href="bulk.php" ><i class='fa fa-file-code-o'></i>Bulk registration</a>
               </li>
               <li class="treeview">
              	  <a  href="database.php" ><i class='fa fa-group'></i>Database</a>
               </li>
               <li class="treeview">
              	  <a  href="jobs.php" ><i class='fa fa-newspaper-o'></i>Job Post</a>
               </li>
               <li class="treeview">
              	  <a  href="notice.php" ><i class='fa fa-paper-plane-o'></i>Notice</a>
               </li>
              <li class="treeview">
              	  <a data-toggle='modal' href="#Taxreceipted" class="Open-Taxreceipted"><i class='fa fa-plus'></i>Add/Modify HR</a>
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
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				
				<div class="profile_details" >		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<?php   
								
												           	echo"<img src='images/man.jpg' height='50px' width='50px' alt=''>";	   
														     	
										
										?>
										 </span> 
									<div class="user-name" >
										<p style="color:#1D809F;"><?php if(isset($sirname))
                                            {echo"<strong>".$firstname." ".$sirname."! </strong>";} ?>
				                         </p>
										<span>Admin &nbsp;<img src='images/dot.png' height='15px' width='15px' alt=''>
										</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 <!-- <li>
                                  <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#Updatepicture' class='open-Updatepicture'><i class="fa fa-user"></i>Change profile picture</a>
                                 </li> -->
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
		<div id="page-wrapper"  >
			<div class="main-page" >
	
		
		
				
				
				
	
			<div class="charts" >		
			<div class="mid-content-top charts-grids">
				<div class="middle-content" >
						<h4 class="title">Users</h4>
					<!-- start content_slider 
				<div class="alert alert-info">
                             <i class="fa fa-envelope"></i>&nbsp;This screen displays 50 records use the search box to spool more records
                         </div>
					-->

<style>
@media screen and (max-width: 600px) {



  #example {
    font-size: 5px;
    padding-top:2px;
    padding-bottom:0px;
    padding-left:0px;
    padding-right:0px;
   
   
  }
td{

 

}
  
 

 
}

@media screen and (min-width: 601px) {
  #example {
    font-size: 20px;

    
  }

 
}


  </style>


					     <table id="example" class="display warp" style="width:100%;">
        <thead>
            <tr>
            <th style="text-size:0px;"></th>
                <th>Name</th>
                <th>ID</th>
                           
                <th>Department</th>
                <th>Rank</th>  
                
                 
              
                
                <th> </th>
                <th> </th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
        	 <?php   $sqlmember ="SELECT * FROM Users WHERE MStatus!='dissmissed' ORDER BY MStatus";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                       $title=$found['Mtitle'];$firstname=$found['Firstname'];$sirname=$found['Sirname'];$rank=$found['Rank'];
                       $id=$found['id'];$dept=$found['Department'];$email=$found['Email'];$phone=$found['Phone'];$nid=$found['NID'];$mstatus=$found['MStatus'];$mjoin=$found['Joining'];$mdissmissed=$found['Dissmissed'];
			                $count=$count+1;  $get_time=$found['Time']; $time=time(); $sid=$found['Staffid'];
			              $names=$firstname." ".$sirname;
                    if ($mstatus =="active"){
                      echo"<tr style='color:green'> 

            

                      
                      <td style='opacity:0;font-size:0px;'>active all</td>                 
                                       <td>$title $firstname $sirname</td>        	
                                       <td>$sid</td>
                                       <td>$dept</td>
                                       <td>$rank</td>
                                      
                                   
                                 
                                     
                                       
                                   
                               
                                 <td>
                                   <a  href='card.php?id=$sid' id='p' class='btn  btn-success' title='click to print ID Card'  target='_blank'><span class='glyphicon glyphicon-print' style='color:white;'></span></a>
                                        </td>
                                 <td>
                                   <a data-toggle='modal' id='e' data-id='$id'  data-ie='$firstname'   data-if='$sirname' data-ig='$rank' data-ih='$dept' data-ij='$nid' data-ik='$sid' data-iem='$email' data-im='$phone' data-in='$mstatus' data-io='$title' data-ip='$mjoin' data-iq='$mdissmissed' class='open-Passwords btn  btn-info' title='edit user details' href='#Passwords'><span class='glyphicon glyphicon-edit' style='color:white;'></span></a>
                         
                                 </td>				                 
                                 <td>
                                   <a data-id='$id' id='d' class='open-Delete btn  btn-danger' title='delete user' ><span class='glyphicon glyphicon-remove-sign' style='color:white;'></span></a>
                         
                                 </td>			 
                                       </tr>"; 


                    }

                    else if ($mstatus =="dissmissed"){

                      echo"<tr style='color:red'>  

            
                      <td style='opacity:0;font-size:0px;'>dissmissed all</td>  
                                       <td>$title $firstname $sirname</td>        	
                                       <td>$sid</td>
                                       <td>$dept</td>
                                       <td>$rank</td>
                                    
                                  
                                       
                                   
                               
                                 <td>
                                   <a  href='card.php?id=$sid' class='btn  btn-success' title='click to print ID Card'  target='_blank'><span class='glyphicon glyphicon-print' style='color:white;'></span></a>
                                        </td>
                                 <td>
                                 <a data-toggle='modal'  data-id='$id'  data-ie='$firstname'   data-if='$sirname' data-ig='$rank' data-ih='$dept' data-ij='$nid' data-ik='$sid' data-iem='$email' data-im='$phone' data-in='$mstatus' data-io='$title' data-ip='$mjoin' data-iq='$mdissmissed' class='open-Passwords btn  btn-info' title='edit user details' href='#Passwords'><span class='glyphicon glyphicon-edit' style='color:white;'></span></a>
                         
                                 </td>				                 
                                 <td>
                               
                               </td>	
                                       </tr>"; 


                    }

                    else {
                      echo"<tr style='color:black'> 

            
                      <td style='opacity:0;font-size:0px;'>$mstatus active all</td>  
                                                           
                                       <td>$title $firstname $sirname</td>        	
                                       <td>$sid</td>
                                       <td>$dept</td>
                                       <td>$rank</td>
                                     
                                   
                                       
                                   
                               
                                 <td>
                                   <a  href='card.php?id=$id' class='btn  btn-success' title='click to print ID Card'  target='_blank'><span class='glyphicon glyphicon-print' style='color:white;'></span></a>
                                        </td>
                                 <td>
                                   <a data-toggle='modal'  data-id='$id'  data-ie='$firstname'   data-if='$sirname' data-ig='$rank' data-ih='$dept' data-ij='$nid' data-ik='$sid' data-iem='$email' data-im='$phone' data-in='$mstatus' data-io='$title' data-ip='$mjoin' data-iq='$mdissmissed' class='open-Passwords btn  btn-info' title='edit user details' href='#Passwords'><span class='glyphicon glyphicon-edit' style='color:white;'></span></a>
                         
                                 </td>				                 
                                 <td>
                                   <a data-id='$id'  class='open-Delete btn  btn-danger' title='delete user' ><span class='glyphicon glyphicon-remove-sign' style='color:white;'></span></a>
                         
                                 </td>			 
                                       </tr>"; 


                    }
			    
					 
					 } 
		
		           	?>
            </tbody>
        
    </table>
             <button id="clear-all-button">Clear All Filters</button>
                           
				        </div>
		
				</div>

					<!--//sreen-gallery-cursual---->
			</div>
		 </div>
		</div>
	<!--footer-->
	<div class="footer">
	  <p>Developed by kowshiqueroy@gmail.com
			</p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="admin/js/Chart.bundle.js"></script>
    <script src="admin/js/utils.js"></script>
	
		
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
		
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js""> </script>
	<!-- //Bootstrap Core JavaScript -->
	 	<script src="css/bootstrap-dropdownhover.js"></script>
	
</body>
</html>