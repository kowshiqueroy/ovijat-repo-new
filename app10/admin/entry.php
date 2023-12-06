<?php
include_once("header.php");

?>

<div class="container ">
    <div class="row">
        <div class="col-sm">
<h3>New Item Entry (IN/OUT)</h3>
            <meta name="viewport" content="width=device-width, initial-scale=1">
           

            <?php


            if (isset($_POST["addsavebtn"])) {
             

                $id= $_POST["id"];
                $type = $_POST["type"];
                $dps = $_POST["dps"];
                $icu = $_POST["icu"];
                $unit = $_POST["unit"];
                $slip = $_POST["slip"];
                $expiring = $_POST["expiring"];
                $price = $_POST["price"];
                $notes = $_POST["notes"];
                $user = $_SESSION["usermail"];
              
               
             

             

                    $insert = $pdo->prepare("insert into entry(type,dps,itemcategoryunit,unit,slip,expiring,price,notes,entryby) values(:type,:dps,:icu,:unit,:slip,:expiring,:price,:notes,:user)");

                
                    $insert->bindParam(":type", $type);
                    $insert->bindParam(":dps", $dps);
                    $insert->bindParam(":icu", $icu);
                    $insert->bindParam(":unit", $unit);
                    $insert->bindParam(":slip", $slip);
                    $insert->bindParam(":expiring", $expiring);
                    $insert->bindParam(":price", $price);
                    $insert->bindParam(":notes", $notes);
                    $insert->bindParam(":user", $user);

                    $insert->execute();
                   

                    if($type=="In" or $type=="Lend Return" or $type=="Purchase" or $type=="Sell Return" or $type=="Gift Return") {


                        $ss = $pdo->prepare("SELECT * FROM `item`");
                        $ss->execute(array());
                        while ($row = $ss->fetch(PDO::FETCH_ASSOC)) {
                            $name = $row['categoryname'];
                          
                            $id_db = $row["id"];
                            $itemname_db = $row["itemname"];
                            $categoryname_db = $row["categoryname"];
                            $stock_db = $row["stock"];
                            $unit_db = $row["unit"];
                            $icud= $categoryname_db." " .$itemname_db.
                            " (".$unit_db.")";

                            if($icud== $icu) {
                                $insert = $pdo->prepare("update item set stock=:stock where id=:id_db");

                                $s=floatval($stock_db)+floatval($unit);
                                $insert->bindParam(":stock",$s);
                                $insert->bindParam(":id_db",$id_db);
                               
            
                                $insert->execute();

                            }

            
                        }



                    }
                    else {


                        $ss = $pdo->prepare("SELECT * FROM `item`");
                        $ss->execute(array());
                        while ($row = $ss->fetch(PDO::FETCH_ASSOC)) {
                            $name = $row['categoryname'];
                          
                            $id_db = $row["id"];
                            $itemname_db = $row["itemname"];
                            $categoryname_db = $row["categoryname"];
                            $stock_db = $row["stock"];
                            $unit_db = $row["unit"];
                            $icud= $categoryname_db." " .$itemname_db.
                            " (".$unit_db.")";

                            if($icud== $icu) {
                                $insert = $pdo->prepare("update item set stock=:stock where id=:id_db");

                $s=floatval($stock_db)-floatval($unit);
                                $insert->bindParam(":stock",$s);
                                $insert->bindParam(":id_db",$id_db);
                               
            
                                $insert->execute();

                            }

            
                        }



                    }
    
                  
                

               


            }


            $statement = $pdo->prepare("SELECT * FROM `item`");
            $statement->execute(array());












            if (isset($_GET["del"])) {
                $eid = $_GET["del"];

                $find = $pdo->prepare("select * from entry where id='$eid'");

                $find->execute();

                $rowfind = $find->fetch(PDO::FETCH_ASSOC);



                $ss = $pdo->prepare("SELECT * FROM `item`");
                $ss->execute(array());
                while ($row = $ss->fetch(PDO::FETCH_ASSOC)) {
                    $name = $row['categoryname'];

                    $id_db = $row["id"];
                    $itemname_db = $row["itemname"];
                    $categoryname_db = $row["categoryname"];
                    $stock_db = $row["stock"];
                    $unit_db = $row["unit"];



                    $icud = $categoryname_db . " " . $itemname_db .
                        " (" . $unit_db . ")";

                    $find2 = $pdo->prepare("select * from entry where id='$eid'");

                    $find2->execute();

                    $rowfind2 = $find2->fetch(PDO::FETCH_ASSOC);

                    $icu2 = $rowfind2["itemcategoryunit"];
                    $unit = $rowfind2["unit"];
                    $type = $rowfind2["type"];

                    if ($icud == $icu2) {
                        $insert = $pdo->prepare("update item set stock=:stock where id=:id_db");



                        if ($type == "In" or $type == "Lend Return" or $type == "Purchase" or $type == "Sell Return" or $type == "Gift Return") {
                            $s = floatval($stock_db) - floatval($unit);
                        } else {

                            $s = floatval($stock_db) + floatval($unit);
                        }




                        $insert->bindParam(":stock", $s);
                        $insert->bindParam(":id_db", $id_db);


                        $insert->execute();

                    }


                }




                $ipaddress = '';
                if (isset($_SERVER['HTTP_CLIENT_IP']))
                    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                else if (isset($_SERVER['HTTP_X_FORWARDED']))
                    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                else if (isset($_SERVER['HTTP_FORWARDED']))
                    $ipaddress = $_SERVER['HTTP_FORWARDED'];
                else if (isset($_SERVER['REMOTE_ADDR']))
                    $ipaddress = $_SERVER['REMOTE_ADDR'];
                else
                    $ipaddress = 'UNKNOWN';

                $data = "DELETED Entry " . implode($rowfind) . " " . date("Y-m-d") . " " . $_SESSION["usermail"] . " " . $ipaddress;

                $insert = $pdo->prepare("insert into logdel(data) values(:data)");


                $insert->bindParam(":data", $data);


                $insert->execute();



                $del = $pdo->prepare("delete from entry where id='$eid'");

                $del->execute();

                //  header("location: entry.php");
            

                echo '  <script> window.location.href = "entry.php";</script>';

            }









            ?>

            <form action="entry.php" method="post">
                <div class="containerform">

                    <input type="hidden" <?php #echo "value='" . $id_db . "'" ?> name="id" id="id">

                    <label for="type"><b>Type</b></label>
                    <select class="js-example-basic-single" style="width:100%;" id="type" name="type" required>

                        <?php #echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';?>

                        <option value="In">In +</option>
                        <option value="Out">Out -</option>

                        <option value="Damage">Damage -</option>
                        <option value="Return">Return -</option>

                        <option value="Lending">Lending -</option>
                        <option value="Lend Return">Lend Return +</option>

                        <option value="Purchase">Purchase +</option>
                        <option value="Purchase Return">Purchase Return -</option>

                        <option value="Sell">Sell -</option>
                        <option value="Sell Return">Sell Return +</option>

                       
                        <option value="Gift">Gift -</option>
                        <option value=" Return">Gift Return +</option>

                    </select>

                    <label for="dps"><b>Department/Person/Shop (ID Phone Address)</b></label>
                    <select class="js-example-basic-single" style="width:100%;" id="dps" name="dps" required>

                        <?php #echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';

                        $statement2 = $pdo->prepare("SELECT `departmentname` FROM `department`");
                        $statement2->execute(array());
                        while ($row = $statement2->fetch(PDO::FETCH_ASSOC)) {
                            $name2 = $row['departmentname'];
                          
                             echo '<option value="' . $name2 . '">' . $name2 . '</option>';
                        }


                        ?>

                    </select>


                    

                    <label for="icu"><b>Category Item (Stock Unit)</b></label>
                    <select class="js-example-basic-single" style="width:100%;" id="icu" name="icu" required>
                        <?php  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $name = $row['categoryname'];
              
                $id_db = $row["id"];
                $itemname_db = $row["itemname"];
                $categoryname_db = $row["categoryname"];
                $stock_db = $row["stock"];
                $unit_db = $row["unit"];
                echo '<option value="' . $categoryname_db." " .$itemname_db.
                " (".$unit_db.")". '">' . $categoryname_db." " .$itemname_db.
                " (". $stock_db."".$unit_db.")". '</option>';

            }
                  ?>

                    </select>

                    <label for="unit"><b>Unit</b></label>
                    <input type="float" placeholder="0.0" name="unit" id="unit" required>

                    <label for="slip"><b>Slip Number</b></label>
                    <input type="float" value="0" name="slip" id="slip"
                        required>

                    <label for="expiring"><b>Expiring</b></label>
                    <input type="text" value="Y.m.d" name="expiring" id="expiring" required>

                    <label for="price"><b>Price (BDT)</b></label>
                    <input type="float" value="0" name="price" id="price"
                        required>

                    <label for="notes"><b>Notes</b></label>
                    <input type="text" value="N/A" name="notes" id="notes" required>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>Entry List</p>

            <table id="dt" class="table table-striped" style="font-size:15px;">
                <tr>
                 
                    <th> Type</th>
                    <th> Dept/ Person/ Shop</th>
                    <th>Category Item (Unit)</th>
                    <th>Unit</th>
                    <th>Slip</th>
                    <th >Expiring</th>
                    <th>Price</th>
                    <th>Notes</th>

                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from entry order by id desc limit 5");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
 
    <td>$row->type</td>
    <td>$row->dps</td>
    <td>$row->itemcategoryunit</td>
    <td>$row->unit</td>
    <td>$row->slip</td>
    <td>$row->expiring</td>
    <td>$row->price</td>
    <td>$row->notes</td>    
   
    <td> 
    <a  href=\"entry.php?del=" . $row->id  . "\" ><i class='bi bi-x-circle'></i>    </a>
    </a>
</p>
    </td>
    </tr>
    ";
                }
                ?>

            </table>


      
                        <button onclick="window.location.href='entrydb.php';"  type="submit"  class="savebtn">Full Database</button>
                     
           
        </div>

    </div>
</div>






  
<?php
include_once("footer.php");

?>