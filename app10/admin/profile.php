<?php
include_once ("header.php");

?>

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


<div class="container ">
    <div class="row">
    <div class="col-sm">

    
    
          <?php 
$mail=$_SESSION ["usermail"];

$select = $pdo->prepare("select * from users where usermail='$mail'");

$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);

$usermail_db = $row["usermail"];
$userpassword_db = $row["userpassword"];
$role_db = $row["role"];
$status_db = $row["status"];


          $role=$role_db;
          $status=$status_db;
          
          
          echo"<h4><br>Hello,<br></h4><h1>". $_SESSION ["usermail"]."</h1><h4><br>Your Role: </h4><h2>".$role."<br></h2><h4><br>Your Status: </h4><h2>".$status."</h2>";
          
          if(isset($_POST["addsavebtn"])){
if($userpassword_db==$_POST["op"]){

    $update=$pdo->prepare("update users set userpassword=:pass where usermail=:mail");
            
    $update->bindParam(":pass",$_POST["np"]);
    $update->bindParam(":mail",$usermail_db);
 
    $update->execute();
    echo "<br>Password Changed";

}


          }
          
          
          ?>  
    </div>
        <div class="col-sm">

<form action="profile.php" method="post">
                <div class="containerform">
                    <h1>Password</h1>
                    <p>Update your Details.</p>
                    <hr>

                    <label for="psw"><b>Current Password</b></label>
                    <input type="password" <?php #echo "value='" . $userpassword_db . "'" ?> name="op" id="psw" required>

                   
                    <label for="psw"><b>New Password</b></label>
                    <input type="password" <?php #echo "value='" . $userpassword_db . "'" ?> name="np" id="npsw" required>

                   

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