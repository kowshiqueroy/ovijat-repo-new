<?php

if(isset($_GET['i'])){

  $q = $_GET['i'];

}

?>

<div class="form-group">
  <label>Price</label>
  <select class="form-control" placeholder="Choose category to bind" name="price" readonly>

    <?php


$con = mysqli_connect('localhost','root','');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"pos_db");
$sql="SELECT * FROM tbl_item WHERE pname='$q'";
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {



  echo '<option value="'.$row['saleprice'].'">'.$row['saleprice'].'TK/'.$row['unit'].'</option>';

}


?>
</select>
</div>
<div class="form-group">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="text" class="form-control" placeholder="Enter Quantity" name="quantity" required>
              </div>

              <div class="form-group">
                <label>Unit</label>
                <select class="form-control" placeholder="Choose category to bind" name="unit" required>
                  <option>KG</option>
                  <option>PCS</option>
                  <option >G</option>
                  <option >ML</option>
                  <option >L</option>
                  <option >CTN</option>
                  <option >BAG</option>
                  <option >RIM</option>
                  <option  >DRUM</option>
                  <option >GALON</option>
                  <option  >GOJ</option>
                  <option  >FEET</option>
                  <option  >BOX</option>
                  <option >KG</option>
                  <option  >CM</option>
                  <option >M</option>


                

                </select>
              </div>

              <div class="form-group">
                <label>Note:</label>
                <textarea type="text" class="form-control" placeholder="Enter details" name="note"
                  rows="4"></textarea>
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="btnaddproduct">Add Order</button>

            </div>


</div>