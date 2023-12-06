<?php
include_once("header.php");

if(isset($_GET["iname"])){


    $iname = $_GET["iname"];

}else{

    $iname = "";
    
}

?>


      <center>      <h2>Stocks</h2>
            <p><?php 
            
            
            $t=time();
           
            echo(date("Y-m-d",$t));


?></p>

<form action="stockbyitem.php" method="get">
        <input style="width:0px; height:0px; opacity:0;" type="submit">
        <input style="width:150px; text-align:center;" type="text" value="<?php echo $iname; ?>" name="iname" id="expiring" required>
        <input style="width:0px; height:0px; opacity:0;" type="submit">
</form>
            <center>  
            <table
        id="dt"
        class="table table-striped"
      >
                <tr>
                <th>Category Item (Unit)</th>
                
                    <th>Stock</th>
                   
                  
                

                </tr>

                <?php

                $select = $pdo->prepare("select * from item where categoryname like '%$iname%' or itemname like '%$iname%' or unit like '%$iname%' order by categoryname");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {

                    $i=$row->categoryname." ".$row->itemname."(". $row->unit.")";
                    echo "
    <tr>
    <td>$i</td>
    <td>$row->stock</td>
  
    
   
    
    </tr>
    ";
                }
                ?>

            </table>


            

   

<?php
include_once("footer.php");

?>