<?php
include_once ("header.php");
if(isset($_GET["date"]) and isset($_GET["to"])){


    $dateget = $_GET["date"];
    $dategetto = $_GET["to"];
}else{

    $dateget = "2023-11-1";
    $dategetto = date("Y-m-d");
}

?>


<center>
        <h2>Stocks</h2>
        <form action="stockbydate.php" method="get">
        <input style="width:0px; height:0px; opacity:0;" type="submit">
        <input style="width:150px; text-align:center;" type="text" value="<?php echo $dateget; ?>" name="date" id="expiring" required>
        to <input style="width:150px; text-align:center;" type="text" value="<?php echo $dategetto; ?>" name="to" id="expiring" required>
        <input style="width:0px; height:0px; opacity:0;" type="submit">
</form>
        
            
</center>






<table id="dt" class="table table-striped" style="font-size:15px;">
                <tr>
             
                 
                    <th>Category Item (Unit)</th>
                    <th>Stock</th>
                   

                    

                </tr>

                <?php
                $from=$dateget;
                $to=$dategetto." 23:59:59";

                $select = $pdo->prepare("select distinct itemcategoryunit from entry   order by itemcategoryunit desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
     


$stock=0.0;

$select2 = $pdo->prepare("select * from entry where entrytime >= '$from' and entrytime <= '$to' and itemcategoryunit='$row->itemcategoryunit'");

$select2->execute();

while ($row2 = $select2->fetch(PDO::FETCH_OBJ)) {

$type=$row2->type;
    if ($type == "In" or $type == "Lend Return" or $type == "Purchase" or $type == "Sell Return" or $type == "Gift Return") {
    
    
        $stock=$stock+ (float)$row2->unit;
    
    }

else{

    $stock=$stock- (float)$row2->unit;

}

}
if ($stock != 0) {
echo "
<tr>


<td>$row->itemcategoryunit</td>





";
echo "<td>".$stock."</td>";}


                }
                ?>
</tr>
            </table>











            

        
<?php
include_once ("footer.php");

?>