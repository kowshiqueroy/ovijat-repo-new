<?php

include 'head.php';

if ( !isset($_REQUEST['email']) AND !isset($_SESSION['email'])){

echo '<script> window.location.replace("profile.php"); </script>';

}
else {

}



?>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">

        <div class="row g-4">
            <form action="chat.php" method="post">
                <input type="text" placeholder="mail id" name="to" required
                    style=" position: absolute; left: 25%; width:40%">
                <input name="new" style=" position: absolute; left: 10%; width:15%" type="submit" value="New">
                <br><br>
                <p style="
                
                background-color: grey ; padding:5px; color:white; border-radius:10px;
                word-wrap: break-word; width:55%;  position: absolute; left: 35%;  "><?php echo $_REQUEST['to']?></p><br>
            </form>

            <div class="col-md-12">
                <style>
                    .chat {
                        display: flex;

                    }

                    .side {
                        flex: 2;
                        height: 50vh;
                        width: 30%;
                        color: black;
                        background-color: white;
                        overflow: scroll;
                        line-height: 30px;
                        border: 1px;
                        border-style: dashed;
                    }




                    .content {
                        height: 50vh;
                        width: 70%;
                        overflow-x: hidden;
                        overflow-y: auto;
                        transform: rotate(180deg);
                       
                        text-align: left;
                        border: 1px;
                        border-style: dashed;
                    }

                    ul {
                        overflow: hidden;
                        transform: rotate(180deg);
                    }
                </style>
                <div class="chat">
                    <div class="side">

                        <script>
                            $(document).ready(function() {
                                setInterval(function() {
                                    $(".side").load("data.php");
                                }, 1000);
                            });
                        </script>
                    </div>

                    
                    <div class="content">

                    
                        <ul class="contentu">
                            
                            <li>No MSG</li>

                            

                            <script>
                                $(document).ready(function() {
                                    setInterval(function() {
                                        $(".contentu").load("datam.php");
                                    }, 1000);
                                });
                            </script>

                        </ul>

                    </div>

                </div>

                <form action="chat.php" method="post">

                    <input type="hidden" name="to" value="<?php echo $_REQUEST['to']?>">
                    <input type="text" placeholder="Type Here" name="msg" required
                        style=" position: absolute; right: 11%; width:55%">
                    <input name="send" style=" position: absolute; right: 10%;" type="submit" value="Send">
                    <br>
                </form>

                <?php

if(isset($_REQUEST['to'])){

    $_SESSION['from']=$_REQUEST['to'];



}

if(isset($_REQUEST['send'])){

$from=$_SESSION['email'];
$to=$_REQUEST['to'];
$msg=$_REQUEST['msg'];




$sql = "INSERT INTO chats (frommail,tomail,msg)
VALUES ('$from','$to','$msg')";

if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
} else {
 // echo "Error: " . $sql . "<br>" . $conn->error;
}


}


?>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
include  "foot.php";
?>