

<?php

if(isset($_GET['c'])){

  $q = $_GET['c'];

}

?>



<div class="form-group">
                <label>Item name</label>

<select class="form-control" name="item" onchange="show(this.value)" require>
  <option value=""></option>
<?php


$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"pos_db");
$sql="SELECT * FROM tbl_item WHERE pcategory='$q'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {



  echo '<option value="'.$row['pname'].'">'.$row['pname'].'</option>';

}

mysqli_close($con);
?>




  </select>


<br>
<div id="t"><b></b></div>
