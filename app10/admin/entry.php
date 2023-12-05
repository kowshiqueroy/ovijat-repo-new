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


                label {

                    margin-top: 15px;
                    margin-bottom: 5px;
                }

                /* Full-width input fields */
                input[type=text],
                input[type=float],
                input[type=password],
                select {
                    width: 100%;

                    display: inline-block;
                    border: 1px solid #ccc;
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
                   

                    if($type=="In" or $type=="Lend Return") {


                        $ss = $pdo->prepare("SELECT * FROM `item`");
                        $ss->execute(array());
                        while ($row = $ss->fetch(PDO::FETCH_ASSOC)) {
                            $name = $row['categoryname'];
                          
                            $id_db = $row["id"];
                            $itemname_db = $row["itemname"];
                            $categoryname_db = $row["categoryname"];
                            $stock_db = $row["stock"];
                            $unit_db = $row["unit"];
                            $icud= $itemname_db." " .$categoryname_db.
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
                            $icud= $itemname_db." " .$categoryname_db.
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
                        $icud= $itemname_db." " .$categoryname_db.
                        " (".$unit_db.")";

                        $find2 = $pdo->prepare("select * from entry where id='$eid'");

                        $find2->execute();
    
                        $rowfind2 = $find2->fetch(PDO::FETCH_ASSOC);

                        $icu2=$rowfind2["itemcategoryunit"];
                        $unit=$rowfind2["unit"];

                        if($icud== $icu2) {
                            $insert = $pdo->prepare("update item set stock=:stock where id=:id_db");

            $s=floatval($stock_db)-floatval($unit);
                            $insert->bindParam(":stock",$s);
                            $insert->bindParam(":id_db",$id_db);
                           
        
                            $insert->execute();

                        }

        
                    }




                    $ipaddress = '';
                    if (isset($_SERVER['HTTP_CLIENT_IP']))
                        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    else if(isset($_SERVER['HTTP_X_FORWARDED']))
                        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                    else if(isset($_SERVER['HTTP_FORWARDED']))
                        $ipaddress = $_SERVER['HTTP_FORWARDED'];
                    else if(isset($_SERVER['REMOTE_ADDR']))
                        $ipaddress = $_SERVER['REMOTE_ADDR'];
                    else
                        $ipaddress = 'UNKNOWN';

                $data= "DELETED Entry ".implode($rowfind)." ".date("Y-m-d")." ".$_SESSION["usermail"]." ".$ipaddress;

                    $insert = $pdo->prepare("insert into logdel(data) values(:data)");

                
                    $insert->bindParam(":data", $data);


                    $insert->execute();



                    $del = $pdo->prepare("delete from entry where id='$eid'");

                    $del->execute();

      //  header("location: entry.php");


      echo '  <script>
      window.location.href = "entry.php";
  </script>';

                }








            
            ?>

            <form action="entry.php" method="post">
                <div class="containerform">

                    <input type="hidden" <?php #echo "value='" . $id_db . "'" ?> name="id" id="id">

                    <label for="type"><b>Type</b></label>
                    <select id="type" name="type" required>

                        <?php #echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';?>

                        <option value="In">In +</option>
                        <option value="Out">Out -</option>

                        <option value="Damage">Damage -</option>
                        <option value="Return">Return -</option>

                        <option value="Lending">Lending -</option>
                        <option value="Lend Return">Lend Return +</option>

                    </select>

                    <label for="dps"><b>Department/Person/Shop (ID Phone Address)</b></label>
                    <select class="js-example-basic-single" id="dps" name="dps" required>

                        <?php #echo '<option value="' . $categoryname_db . '">' . $categoryname_db . '</option>';

                        $statement2 = $pdo->prepare("SELECT `departmentname` FROM `department`");
                        $statement2->execute(array());
                        while ($row = $statement2->fetch(PDO::FETCH_ASSOC)) {
                            $name2 = $row['departmentname'];
                          
                             echo '<option value="' . $name2 . '">' . $name2 . '</option>';
                        }


                        ?>

                    </select>

                    <label for="icu"><b>Item Category (Stock Unit)</b></label>
                    <select class="js-example-basic-single" id="icu" name="icu" required>
                        <?php  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $name = $row['categoryname'];
              
                $id_db = $row["id"];
                $itemname_db = $row["itemname"];
                $categoryname_db = $row["categoryname"];
                $stock_db = $row["stock"];
                $unit_db = $row["unit"];
                echo '<option value="' . $itemname_db." " .$categoryname_db.
                " (".$unit_db.")". '">' . $itemname_db." " .$categoryname_db.
                " (". $stock_db."".$unit_db.")". '</option>';

            }
                  ?>

                    </select>

                    <label for="unit"><b>Unit</b></label>
                    <input type="float" value="0" name="unit" id="unit" required>

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
                    <th>Item Category (Unit)</th>
                    <th>Unit</th>
                    <th>Slip</th>
                    <th >Expiring</th>
                    <th>Price</th>
                    <th>Notes</th>

                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from entry order by id desc");

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

        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            matcher: function(term, text) {
                // If search is empty we return everything
                if ($.trim(term.term) === '') return text;
                // Compose the regex
                var regex_text = '.*';
                regex_text += (term.term).split('').join('.*');
                regex_text += '.*'
                // Case insensitive
                var regex = new RegExp(regex_text, "i");
                // If no match is found we return nothing
                if (!regex.test(text.text)) {
                    return null;
                }
                // Else we return everything that is matching
                return text;
            }
        });
    });
</script>





  
<?php
include_once("footer.php");

?>