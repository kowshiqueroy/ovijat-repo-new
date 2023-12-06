<?php
include_once ("header.php");

?>

<div class="container ">
    <div class="row">
        <div class="col-sm">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            

            <?php


            if (isset($_POST["addsavebtn"])) {




                $id = $_POST["id"];
                $n = $_POST["n"];
                $p = $_POST["p"];
                $m = $_POST["m"];
                $d = $_POST["d"];






                $update = $pdo->prepare("update company set name='$n',phone='$p',mail='$m',details='$d'
           where id='$id'");

      

                $update->execute();
                echo "<br>Updated";

                echo '  <script>
                window.location.href = "companyinfo.php";
            </script>';






            }










            $select = $pdo->prepare("select * from company");

                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);
                    $id_db = $row["id"];
                    $name_db = $row["name"];
                    $phone_db = $row["phone"];
                    $mail_db = $row["mail"];
                    $details_db = $row["details"];
                    
        
                        
                  
                 
                   


                

               


            
            ?>

            <form action="companyinfo.php" method="post">
                <div class="containerform">
                    <h1>Company Details</h1>
                    <p>Contact developer for new company setup.</p>
                    <hr>
                   
                    <input type="hidden" <?php echo "value='" . $id_db . "'" ?> name="id" id="email"
                        required>
                    <label for="email"><b>Company Name</b></label>
                    <input type="text" <?php echo "value='" . $name_db . "'" ?> name="n" id="email"
                        required>
                        <label for="email"><b>Phone</b></label>
                    <input type="text" <?php echo "value='" . $phone_db . "'" ?> name="p" id="email"
                        required>
                        <label for="email"><b>Mail</b></label>
                    <input type="text" <?php echo "value='" . $mail_db . "'" ?> name="m" id="email"
                        required>
                        <label for="email"><b>Details</b></label>
                    <input type="text" <?php echo "value='" . $details_db . "'" ?> name="d" id="email"
                        required>
                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>

    </div>
</div>

<?php
include_once ("footer.php");

?>