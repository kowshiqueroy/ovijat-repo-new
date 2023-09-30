<?php
include 'index-head.php';
?>

<link rel="stylesheet" href="login.css">


<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_login.php" method="post">
   

  <?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "app_db";
	$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);
?>


    <div class="container">



    <label for="f1">Company</label>
				<select class="form-control" id="f1" required>
					<option value=""></option>
					<?php 
					$query = "SELECT * FROM company";
					$result = $con->query($query);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="'.$row['company_name'].'">'.$row['company_name'].'</option>';
						}
					}else{
						//echo '<option value="">Country not available</option>'; 
					}
					?>
				</select>




                <label for="f1">Role</label>
				<select class="form-control" id="f1" required>
					<option value=""></option>
					<?php 
					$query = "SELECT * FROM role";
					$result = $con->query($query);
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							echo '<option value="'.$row['role_name'].'">'.$row['role_name'].'</option>';
						}
					}else{
						//echo '<option value="">Country not available</option>'; 
					}
					?>
				</select>
                <br>      <br>




      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
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


<?php
include 'index-foot.php';
?>