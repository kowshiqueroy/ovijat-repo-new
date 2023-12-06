<?php
include_once ("header.php");




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


    echo '  <script> window.location.href = "entrydb.php";</script>';

}





?>


<center>
        <h2>Database</h2>
            <p>Full Entry List</p>
</center>
            <table id="dt" class="table table-striped" style="font-size:15px;">
                <tr>
                <th> ID</th>
                    <th> Type</th>
                    <th> Dept/ Person/ Shop</th>
                    <th>Category Item (Unit)</th>
                    <th>Unit</th>
                    <th>Slip</th>
                    <th >Expiring</th>
                    <th>Price</th>
                    <th>Notes</th>
                    <th>Enty By</th>
                    <th>Entry Time Stamp</th>

                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from entry order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->id</td>
    <td>$row->type</td>
    <td>$row->dps</td>
    <td>$row->itemcategoryunit</td>
    <td>$row->unit</td>
    <td>$row->slip</td>
    <td>$row->expiring</td>
    <td>$row->price</td>
    <td>$row->notes</td>  
    <td>$row->entryby</td>  
    <td>$row->entrytime</td>    
   
    <td> 
    <a  href=\"entrydb.php?del=" . $row->id  . "\" ><i class='bi bi-x-circle'></i>    </a>
    </a>
</p>
    </td>
    </tr>
    ";
                }
                ?>

            </table>

        
<?php
include_once ("footer.php");

?>