<?php
include_once("header.php");

?>

<div class="container ">
    <div class="row">
        <div class="col-sm">

            <meta name="viewport" content="width=device-width, initial-scale=1">


            <?php


            if (isset($_POST["addsavebtn"])) {



                $i = $_POST["itemnamef"];
                $c = $_POST["categorynamef"];
                $s = $_POST["stockf"];
                $u = $_POST["unitf"];
                $id = $_POST["id"];
                $entryname = $c . " " . $i . " (" . $u . ")";





                $id_db1="";

                $flag = 0;

                $sold=$s;
                $ounit="";

                $select = $pdo->prepare("SELECT * FROM `item` where categoryname='$c' and itemname='$i'");

                $select->execute();

              if(  $row = $select->fetch(PDO::FETCH_ASSOC))
                {    $flag++;
                    $id_db1 =(string) $row["id"];

                    $ounit =(string) $row["unit"];
                    
                    $sold += $row["stock"];


                  
                
                
                }

                



                    //oldid
                    if ($_POST["id"] !== '') {

                        $select = $pdo->prepare("select * from item where id='$id'");

                        $select->execute();
                        $row = $select->fetch(PDO::FETCH_ASSOC);

                        $id_db = $row["id"];
                        $itemname_db = $row["itemname"];
                        $categoryname_db = $row["categoryname"];
                        $stock_db = $row["stock"];
                        $unit_db = $row["unit"];

                        $oldenrtyname= $categoryname_db." ".$itemname_db." (".$unit_db.")";

                        

                        
                        if ($flag == 1) {

                         $select = $pdo->prepare("update item set stock= '$sold',unit='$u' where id='$id_db1'");

                        $select->execute();

                        }


                        //update entry names


                        $select = $pdo->prepare("update entry set itemcategoryunit= '$entryname' where itemcategoryunit='$oldenrtyname'");

                        $select->execute();


                        //

                       

                        $del = $pdo->prepare("delete from item where id='$id'");
                        $del->execute();

                    }

                    if($ounit!==$u){
                        $flag=0;
                    }
                if ($flag == 0) {




                    $insert = $pdo->prepare("insert into item(id,itemname,categoryname,stock,unit) values(:id,:i,:c,:s,:u) ON DUPLICATE KEY UPDATE id='$id',itemname='$i',categoryname='$c',stock='$s',unit='$u'");

                    $insert->bindParam(":id", $id);
                    $insert->bindParam(":i", $i);
                    $insert->bindParam(":c", $c);
                    $insert->bindParam(":s", $s);
                    $insert->bindParam(":u", $u);
                    $insert->execute();




                }



            }



            $id_db = "";
            $itemname_db = "";
            $categoryname_db = "";
            $stock_db = "0.0";
            $unit_db = "PCS";



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



                echo '  <script>
      window.location.href = "item.php";
  </script>';




            }









            ?>

            <form action="item.php" method="post">
                <div class="containerform">
                    <h1>Add new</h1>
                    <p>Please fill in this form.</p>
                    <hr>
                    <input type="hidden" <?php echo "value='" . $id_db . "'" ?> name="id" id="email" required>

                    <label for="catt"><b>Category Name</b></label>
                    <select id="catt" class="js-example-basic-single" style="width:100%;" name="categorynamef" required>

                        <?php echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';

                        $statement = $pdo->prepare("SELECT `categoryname` FROM `category`");
                        $statement->execute(array());
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                            $name = $row['categoryname'];

                            echo '<option value="' . $name . '">' . $name . '</option>';
                        }


                        ?>


                    </select>

                    <label for="email"><b>Item Name</b></label>
                    <input type="text" <?php echo "value='" . $itemname_db . "'" ?> name="itemnamef" id="email"
                        required>


                    <label for="email"><b>Opening Stock</b></label>
                    <input type="hidden" 
                    <?php echo "value='" . $stock_db . "'";
                    if (isset($_GET["id"])) {
                        echo " readonly ";
                    } ?>
                     name="stockf" id="email" required>

                    <label for="email"><b>Unit</b></label>

                    <select class="js-example-basic-single" style="width:100%;" name="unitf" required>
                        <?php echo '<option value="' . $unit_db . '">' . $unit_db . '</option>'; ?>
                        <option>PCS</option>
                        <option>ML</option>
                        <option>L</option>
                        <option>CTN</option>
                        <option>BAG</option>
                        <option>RIM</option>
                        <option>DRUM</option>
                        <option>GALON</option>
                        <option>GOJ</option>
                        <option>FEET</option>
                        <option>BOX</option>
                        <option>KG</option>
                        <option>G</option>
                        <option>CM</option>
                        <option>M</option>
                        <option>CONTAINER</option>
                        <option>Other</option>






                    </select>


                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>Merge Duplicate Items by Editing Name</p>

            <table style="margin-top:20px;" id="dt" class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Item Name</th>
                    <th>Unit</th>
                    <th>Stock</th>


                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from item order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
                             <tr>
                             <td>$row->id</td>
                             <td>$row->categoryname</td>
                             <td>$row->itemname</td>
                             <td>$row->unit</td>
                             <td>$row->stock</td>
                         
    
   
                             <td>";


                    echo " <p>  <a  href=\"item.php?id=" . $row->id . "\" ><i class='bi bi-pencil'></i>    </a>  </a> </p> <p>  <a  href=\"item.php?del=" . $row->id . "\" ><i class='bi bi-x-circle'></i>    </a>  </a></p>";
                    echo " </td> </tr> ";
                }
                ?>

            </table>




        </div>

    </div>
</div>

<?php
include_once("footer.php");

?>