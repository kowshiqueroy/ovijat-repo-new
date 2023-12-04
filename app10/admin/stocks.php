<?php
include_once("header.php");

?>


      <center>      <h2>Inventory Stock</h2>
            <p><?php 
            
            
            $t=time();
           
            echo(date("Y-m-d",$t));


?></p>
            <center>  
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
    
   
    
    </tr>
    ";
                }
                ?>

            </table>


            

   

<?php
include_once("footer.php");

?>