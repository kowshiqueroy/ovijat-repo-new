<?php
include_once("header.php");

?>

<div class="container ">
    <div class="row">
        <div class="col-sm">

            <meta name="viewport" content="width=device-width, initial-scale=1">
          

            <?php


            if (isset($_POST["addsavebtn"])) {
             


                $c = $_POST["categorynamef"];
                $id = $_POST["categoryid"];
               
             

             

                    $insert = $pdo->prepare("insert into category(id,categoryname) values(:id,:c) ON DUPLICATE KEY UPDATE categoryname='$c'");

                    $insert->bindParam(":c", $c);

                    $insert->bindParam(":id", $id);
                    $insert->execute();
                   
    
                  
                

               


            }


          
            $cat_db = "";

            $catid_db = "";



                if (isset($_GET["categoryid"])) {
                    $cid = $_GET["categoryid"];

                

                    $select = $pdo->prepare("select * from category where id='$cid'");

                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);

                    $cat_db = $row["categoryname"];
                    $catid_db = $row["id"];

                        
                  
                 
                   


                }

                if (isset($_GET["del"])) {
                    $cid = $_GET["del"];

                

                    $del = $pdo->prepare("delete from category where id='$cid'");

                    $del->execute();
                
                    echo '  <script>
                    window.location.href = "category.php";
                </script>';
                        
                  
                 
                   


                }








            
            ?>

            <form action="category.php" method="post">
                <div class="containerform">
                    <h1>Add new</h1>
                    <p>Please fill in this form.</p>
                    <hr>
                    <input type="hidden" <?php echo "value='" . $catid_db . "'" ?> name="categoryid" id="email" required>

                    <label for="email"><b>Category Name</b></label>
                    <input type="text" <?php echo "value='" . $cat_db . "'" ?> name="categorynamef" id="email" required>

                   

                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>Category List</p>

            <table
        id="dt"
        class="table table-striped"
      >
                <tr>
          
                    <th>Category Name</th>
                  
                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from category order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
   
    <td>$row->categoryname</td>
    
   
    <td> <p>
    <a  href=\"category.php?categoryid=" . $row->id  . "\" ><i class='bi bi-pencil'></i>    </a>
    </a> </p> <p>
    <a  href=\"category.php?del=" . $row->id  . "\" ><i class='bi bi-x-circle'></i>    </a>
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

<?php
include_once("footer.php");

?>