<?php
include 'index-head.php';
session_start();
$_SESSION["last_login_time"] = "";

?>

<link rel="stylesheet" href="login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<h2>Select</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="action_login.php" method="POST">
   

  <?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "app_db";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);
?>


    <div class="container">



    <label for="f1">Company</label>
				
    <input type="text" placeholder="Enter company name" name="c" id="f1" required>



    <label for="f2">Role</label>
		<select class="form-control" name="r" id="f2" required>
			<option value="">Select</option>
				
		</select>
    <br>
	<br>

			


      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="u" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="p" required>
        
      <button type="submit">Login</button>
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript">
    $(document).ready(function(){
      // f1 dependent ajax
      $("#f1").on("change",function(){
        var d1 = String($(this).val());

        
        $.ajax({
          url :"action.php",
          type:"POST",
          cache:false,
          data:{d1:d1},
          success:function(data){
            $("#f2").html(data);
          }
        });			
      });

     
    });

    
  


  </script>

<?php
include 'index-foot.php';
?>