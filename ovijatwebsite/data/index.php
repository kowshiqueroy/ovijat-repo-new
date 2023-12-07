<?php
if(isset($_SESSION)) {
    session_destroy();

   


}

session_start();
date_default_timezone_set("Asia/Dhaka");
?>
<?php

$_SESSION["test"]="test session";

?>

<?php
date_default_timezone_set("Asia/Dhaka");

?>



<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: green;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: green;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <form action="login.php" method="post" style="max-width:500px;margin:auto">
        <center>
            <br><br>
            <h1 style="color:green; font-size:50px;">Inventory<br>Web App</h1>
            <br><br>
            <center>
                <div class="input-container">
                    <i class="fa fa-building-o icon"></i>
                    <input class="input-field" type="text" placeholder="Company"  name="company" required>
                </div>

                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="text" placeholder="Email"  name="email" required>
                </div>

                <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" type="password" placeholder="Password"  name="password" required>
                </div>

                <button type="submit" class="btn">Enter</button>
    </form>


  


</body>

</html>