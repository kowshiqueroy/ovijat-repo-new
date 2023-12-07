<?php
include_once ("header.php");
if(isset($_GET["s"]) and isset($_GET["q"])){


    $s = $_GET["s"];
    $q = $_GET["q"];
}else{

    $s = "All";
    $q = "20";
}
$dateget = "2023-11-1";
$dategetto = date("Y-m-d");
?>


<center>
        <h2>Stocks</h2>
        <form action="stockbyquantity.php" method="get">
        <input style="width:0px; height:0px; opacity:0;" type="submit">
        Search Item/Category <input style="width:150px; text-align:center;" type="text" value="<?php echo $s; ?>" name="s" id="expiring" >
        Quantity Below <input style="width:150px; text-align:center;" type="text" value="<?php echo $q; ?>" name="q" id="expiring" required>
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


                $ss="";
                if ($s!=="All"){

                    $ss=$s;
                }

                $select = $pdo->prepare("select distinct itemcategoryunit from entry where itemcategoryunit like '%$ss%'  order by itemcategoryunit desc");

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
if ($stock < $q) {
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