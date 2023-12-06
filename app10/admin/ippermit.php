<?php
include_once("header.php");

?>

<div class="container ">
    <div class="row">
        <div class="col-sm">

            <meta name="viewport" content="width=device-width, initial-scale=1">
          

            <?php


            if (isset($_POST["addsavebtn"])) {
             


                $i = $_POST["ip_f"];
                $d = $_POST["ipd_f"];
               
             

             

                    $insert = $pdo->prepare("insert into ip(ipname,details) values(:i,:d) ON DUPLICATE KEY UPDATE details='$d'");

                    $insert->bindParam(":i", $i);

                    $insert->bindParam(":d", $d);
                    $insert->execute();
                   
    
                  
                

               


            }


          
            $ip_db = "";

            $ipd_db = "";



                if (isset($_GET["ip"])) {
                    $ipg = $_GET["ip"];

                

                    $select = $pdo->prepare("select * from ip where ipname='$ipg'");

                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);

                    $ip_db = $row["ipname"];
                    $ipd_db = $row["details"];

                        
                  
                 
                   


                }

                if (isset($_GET["del"])) {
                    $ip = $_GET["del"];

                

                    $del = $pdo->prepare("delete from ip where ipname='$ip'");

                    $del->execute();
                
                    echo '  <script>
                    window.location.href = "ippermit.php";
                </script>';
                        
                  
                 
                   


                }








            
            ?>

            <form action="ippermit.php" method="post">
                <div class="containerform">
                    <h1>Add new</h1>
                    <p>Please fill in this form.</p>
                    <hr>

                    <label for="email"><b>IP</b></label>
                    <input type="text" <?php echo "value='" . $ip_db . "'" ?> name="ip_f" id="email" required>
                    <label for="email"><b>Person/Name/Place</b></label>
                    <input type="text" <?php echo "value='" . $ipd_db . "'" ?> name="ipd_f" id="email" required>

                   

                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>IP List</p>

            <table
        id="dt"
        class="table table-striped"
      >
                <tr>
                <th> IP</th>
                    <th>Person/Name/Place</th>
                  
                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from ip order by ipname desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->ipname</td>
    <td>$row->details</td>
    
   
    <td> <p>
    <a  href=\"ippermit.php?ip=" . $row->ipname  . "\" ><i class='bi bi-pencil'></i>   </a>
    </a> </p> <p>
    <a  href=\"ippermit.php?del=" . $row->ipname  . "\" ><i class='bi bi-x-circle'></i>    </a>
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