<?php
include_once("header.php");

?>

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

                /* Full-width input fields */
                input[type=text],
                input[type=password],
                select {
                    width: 100%;
                    padding: 15px;
                    margin: 5px 0 22px 0;
                    display: inline-block;
                    border: none;
                    background: #f1f1f1;
                }

                input[type=text]:focus,
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
             


                $d = $_POST["departmentnamef"];
                $id = $_POST["departmentid"];
               
             

             

                    $insert = $pdo->prepare("insert into department(id,departmentname) values(:id,:d) ON DUPLICATE KEY UPDATE departmentname='$d'");

                    $insert->bindParam(":d", $d);

                    $insert->bindParam(":id", $id);
                    $insert->execute();
                   
    
                  
                

               


            }


          
            $dep_db = "";

            $depid_db = "";



                if (isset($_GET["departmentid"])) {
                    $did = $_GET["departmentid"];

                

                    $select = $pdo->prepare("select * from department where id='$did'");

                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);

                    $dep_db = $row["departmentname"];
                    $depid_db = $row["id"];

                        
                  
                 
                   


                }

                if (isset($_GET["del"])) {
                    $cid = $_GET["del"];

                

                    $del = $pdo->prepare("delete from department where id='$cid'");

                    $del->execute();
                

                        
                  
                 
                   


                }








            
            ?>

            <form action="department.php" method="post">
                <div class="containerform">
                    <h1>Add new</h1>
                    <p>Please fill in this form.</p>
                    <hr>
                    <input type="hidden" <?php echo "value='" . $depid_db . "'" ?> name="departmentid" id="email" required>

                    <label for="email"><b>Name</b></label>
                    <input type="text" <?php echo "value='" . $dep_db . "'" ?> name="departmentnamef" id="email" required>

                   

                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>Department/Person List</p>

            <table
        id="dt"
        class="table table-striped"
      >
                <tr>
                <th> ID</th>
                    <th>Department/Person Name</th>
                  
                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from department order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->id</td>
    <td>$row->departmentname</td>
    
   
    <td> <p>
    <a  href=\"department.php?departmentid=" . $row->id  . "\" >Edit    </a>
    </a> </p> <p>
    <a  href=\"department.php?del=" . $row->id  . "\" >Delete    </a>
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