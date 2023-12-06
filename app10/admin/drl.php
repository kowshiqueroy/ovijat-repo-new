<?php
include_once ("header.php");
if(isset($_GET["date"]) and isset($_GET["to"])){


    $dateget = $_GET["date"];
    $dategetto = $_GET["to"];
}else{

    $dateget = date("Y-m-d");
    $dategetto = date("Y-m-d");
}

?>


<center>
        <h2>DRL</h2>
        <form action="drl.php" method="get">
        <input style="width:0px; height:0px; opacity:0;" type="submit">
        <input style="width:150px; text-align:center;" type="text" value="<?php echo $dateget; ?>" name="date" id="expiring" required>
        to <input style="width:150px; text-align:center;" type="text" value="<?php echo $dategetto; ?>" name="to" id="expiring" required>
        <input style="width:0px; height:0px; opacity:0;" type="submit">
</form>
        
            
</center>
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
               

                    

                </tr>

                <?php
                $from=$dateget;
                $to=$dategetto." 23:59:59";

                $select = $pdo->prepare("select * from entry where entrytime >= '$from' and entrytime <= '$to' and (type !='In' and type !='Purchase' and type !='Lend Return' and type !='Sell Return' and type !='Gift Return') order by id desc");

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
    <!--<td>$row->entrytime</td>  --!>
 
   
 
    </tr>
    ";
                }
                ?>

            </table>

        
<?php
include_once ("footer.php");

?>