<?php
include_once("header.php");

?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="container ">
    <div class="row">
        <div class="col-sm">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                /* Add padding to containers */
                .containerform {
                    padding: 16px;
                    background-color: white;
                }


                label{

                    margin-top: 20px;
                    margin-bottom: 10px;
                }

                /* Full-width input fields */
                input[type=text],
                input[type=float],
                input[type=password],
                select {
                    width: 100%;
                    display: inline-block;
                    border: none;
                    background: #f1f1f1;
                    font-size: 20px;
                   
                }

                input[type=text]:focus,
                input[type=float]:focus,
                input[type=password]:focus,
                select:focus {
                    background-color: #ddd;
                    outline: none;
                }

                /* Overwrite default styles of hr */
                hr {
                    border: 1px solid #f1f1f1;
                    margin-bottom: 25px;
                }

                /* Set a style for the submit button */
                .savebtn {
                    background-color: #04AA6D;
                    color: white;
                    padding: 16px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                    opacity: 0.1;
                }

                .savebtn:hover {
                    opacity: 1;
                }
            </style>

            <?php


            if (isset($_POST["addsavebtn"])) {
             


                $i = $_POST["itemnamef"];
                $c = $_POST["categorynamef"];
                $s = $_POST["stockf"];
                $u = $_POST["unitf"];
                $id= $_POST["id"];
               
             

             

                    $insert = $pdo->prepare("insert into item(id,itemname,categoryname,stock,unit) values(:id,:i,:c,:s,:u) ON DUPLICATE KEY UPDATE id='$id',itemname='$i',categoryname='$c',stock='$s',unit='$u'");

                    $insert->bindParam(":id", $id);
                    $insert->bindParam(":i", $i);
                    $insert->bindParam(":c", $c);
                    $insert->bindParam(":s", $s);
                    $insert->bindParam(":u", $u);
                    $insert->execute();
                   
    
                  
                

               


            }


            $statement = $pdo->prepare("SELECT * FROM `item`");
            $statement->execute(array());
          

       

         

          
           



                if (isset($_GET["id"])) {
                    $eid = $_GET["id"];

                

                    $select = $pdo->prepare("select * from item where id='$eid'");

                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);

                    $id_db = $row["id"];
                    $itemname_db = $row["itemname"];
                    $categoryname_db = $row["categoryname"];
                    $stock_db = $row["stock"];
                    $unit_db = $row["unit"];



                        
                  
                 
                   


                }

                if (isset($_GET["del"])) {
                    $iid = $_GET["del"];

                

                    $del = $pdo->prepare("delete from item where id='$iid'");

                    $del->execute();
                

                        
                  
                 
                   


                }








            
            ?>

            <form action="item.php" method="post">
                <div class="containerform">
                    <h1>Add new</h1>
                    <p>Please fill in this form.</p>
                    <hr>
                    <input type="hidden" <?php #echo "value='" . $id_db . "'" ?> name="id" id="email" required>
                    
                    <label for="role"><b>Department/Person</b></label>
                    <select class="js-example-basic-single"  id="role2" name="categorynamef" required>

                        <?php echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';

                        $statement = $pdo->prepare("SELECT `departmentname` FROM `department`");
                        $statement->execute(array());
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                            $name = $row['departmentname'];
                          
                             echo '<option value="' . $name . '">' . $name . '</option>';
                        }


                        ?>

                        
                    </select>


                    <label for="role"><b>Type</b></label>
                    <select  id="role22" name="type" required>

                        <?php #echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';?>

                       <option value="In">In</option>
                       <option value="In">Out</option>

                       <option value="In">Damage</option>
                       <option value="In">Return</option>

                       <option value="In">Lending</option>
                       <option value="In">Lend Return</option>

                    </select>

                    <label for="email"><b>Item Category (Stock Unit)</b></label>
                    <select class="js-example-basic-single" id="role" name="categorynamef" required>
                  <?php  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $name = $row['categoryname'];
              
                $id_db = $row["id"];
                $itemname_db = $row["itemname"];
                $categoryname_db = $row["categoryname"];
                $stock_db = $row["stock"];
                $unit_db = $row["unit"];
                echo '<option value="' . $itemname_db." " .$categoryname_db.
                " (". $stock_db." ".$unit_db.")". '">' . $itemname_db." " .$categoryname_db.
                " (". $stock_db." ".$unit_db.")". '</option>';

            }
                  ?>

        </select>
                  

                    <label for="email"><b>Opening Stock</b></label>
                    <input type="float" <?php #echo "value='" . $stock_db . "'" ?> name="stockf" id="email" required>
                   
                    <label for="email"><b>Unit</b></label>

                    <select  class="js-example-basic-single" name="unitf" required>
                    <?php echo '<option value="' . $unit_db . '">' . $unit_db . '</option>';?>
                    <option>PCS</option>
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
                  <option >G</option>
                  <option  >CM</option>
                  <option >M</option>
                  <option >CONTAINER</option>
                  <option >Other</option>




                

                </select>


                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>Entry List</p>

            <table
        id="dt"
        class="table table-striped"
      >
                <tr>
                <th> ID</th>
                <th>Item Name</th>
                    <th>Category Name</th>
                    <th>Stock</th>
                    <th>Unit</th>
                  
                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from item order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->id</td>
    <td>$row->itemname</td>
    <td>$row->categoryname</td>
    <td>$row->stock</td>
    <td>$row->unit</td>
    
   
    <td> <p>
    <a  href=\"item.php?id=" . $row->id  . "\" >Edit    </a>
    </a> </p> <p>
    <a  href=\"item.php?del=" . $row->id  . "\" >Delete    </a>
    </a>
</p>
    </td>
    </tr>
    ";
                }
                ?>

            </table>


            

        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

<script>

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
    </script>
<?php
include_once("footer.php");

?>