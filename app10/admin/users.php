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

                $m = $_POST["m"];
                $p = $_POST["p"];
                $r = $_POST["r"];
                $s = $_POST["s"];
                $by = $_SESSION["usermail"];

                $insert = $pdo->prepare("insert into users(usermail,userpassword,role,status,regby) values(:m,:p,:r,:s,:by) ON DUPLICATE KEY UPDATE usermail='$m',userpassword='$p',role='$r',status='$s',regby='$by'");

                $insert->bindParam(":m", $m);
                $insert->bindParam(":p", $p);
                $insert->bindParam(":r", $r);
                $insert->bindParam(":s", $s);
                $insert->bindParam(":by", $by);

                $insert->execute();



            }


            $usermail_db = "";
            $userpassword_db = "";
            $role_db = "";
            $status_db = "";

            if (isset($_GET["action"])) {

                $action = $_GET["action"];

                if ($action == "edit") {
                    $mail = $_GET["email"];

                    $select = $pdo->prepare("select * from users where usermail='$mail'");

                    $select->execute();
                    $row = $select->fetch(PDO::FETCH_ASSOC);

                    $usermail_db = $row["usermail"];
                    $userpassword_db = $row["userpassword"];
                    $role_db = $row["role"];
                    $status_db = $row["status"];


                }






                if ($action == "delete") {
                    $usermail = $_GET["email"];
                    $delete = $pdo->prepare("delete from users where usermail='$usermail'");


                    $delete->execute();
                    echo '  <script>
                    window.location.href = "users.php";
                </script>';

                }


            }
            ?>

            <form action="users.php" method="post">
                <div class="containerform">
                    <h1>Add new</h1>
                    <p>Please fill in this form.</p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="text" <?php echo "value='" . $usermail_db . "'" ?> name="m" id="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" <?php echo "value='" . $userpassword_db . "'" ?> name="p" id="psw" required>

                    <label for="role"><b>Role</b></label>
                    <select id="role" name="r" required>

                        <?php echo '<option value="' . $role_db . '">' . $role_db . '</option>'; ?>

                        <option value="viewer">viewer</option>
                        <option value="typist">typist</option>
                        <option value="requisitioner">requisitioner</option>
                        <option value="purchaser">purchaser</option>
                        <?php
                    if ($_SESSION['role']=="manager"){

                        echo "<option value='manager'>manager</option>";
                    }
                    
                    if ($_SESSION['role']=="approver"){

                        echo "<option value='manager'>manager</option>";
                        echo "<option value='approver'>approver</option>";
                    }
                    
                  
                    if ($_SESSION['role']=="admin"){
                        echo "<option value='manager'>manager</option>";
                        echo "<option value='approver'>approver</option>";

                        echo "<option value='admin'>admin</option>";
                    }
                    
                    ?>
                        
                    </select>

                    <label for="status"><b>Status</b></label>
                    <select id="status" name="s" required>
                        <?php echo '<option   value="' . $status_db . '">' . $status_db . '</option>'; ?>
                        <option value="active">active</option>
                        <option value="inactive">inactive</option>

                    </select>

                    <hr>

                    <button type="submit" name="addsavebtn" class="savebtn">Save</button>
                </div>

            </form>

        </div>
        <div class="col-sm">

            <h2>Database</h2>
            <p>User List</p>

            <table
        id="dt"
        class="table table-striped"
      >
                <tr>

                
                    <th>Mail</th>
                    <th>Role</th>
                    <th>Reg Date</th>
                    <th>Reg By</th>
                    <th>Status</th>
                    <th></th>

                </tr>

                <?php

                $select = $pdo->prepare("select * from users order by regdate desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {

                    if($row->role!=="admin"){

                        echo "
                        <tr>
                      
                        <td>$row->usermail</td>
                        <td>$row->role</td>
                    
                        <td>$row->regdate</td>
                        <td>$row->regby</td>
                        <td>$row->status</td>
                       
                    
                        
                        <td> <p>
                        <a  href=\"users.php?email=" . $row->usermail . "&action=edit" . "\" >Edit    </a>
                        </a>
                        <a  href=\"users.php?email=" . $row->usermail . "&action=delete" . "\" >Delete    </a>
                    </p>
                        </td>
                        </tr>
                        ";

                    }

                    else{

                        echo "
                        <tr>
                      
                        <td>$row->usermail</td>
                        <td>$row->role</td>
                    
                        <td>$row->regdate</td>
                        <td>$row->regby</td>
                        <td>$row->status</td>
                       
                    
                        
                        <td> </td>
                        </tr>
                        ";




                    }


                   
                }
                ?>

            </table>


            

        </div>

    </div>
</div>

<?php
include_once("footer.php");

?>