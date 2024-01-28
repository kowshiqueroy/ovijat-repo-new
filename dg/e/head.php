


<?php
include  "config.php";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Item Sell Buy Rent</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary"><?php echo $websiteName;?></h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="item.php" class="nav-item nav-link ">Featured</a>
                        <a href="about.html" class="nav-item nav-link">Provider</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dashboard</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="add.php" class="dropdown-item">Add Item</a>
                                <a href="property-type.html" class="dropdown-item">Request</a>
                                
                                <a href="property-agent.html" class="dropdown-item">History</a>
                                <a href="property-agent.html" class="dropdown-item">Payment</a>
                                <a href="property-agent.html" class="dropdown-item">Dispute</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Notification</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Chat</a>
                                <a href="property-type.html" class="dropdown-item">Notice</a>
                                <a href="property-agent.html" class="dropdown-item">Alert</a>
                                <a href="property-agent.html" class="dropdown-item">Help</a>
                            </div>
                        </div>
                       
                       <?php

                       if(!isset($_SESSION['email']))
                       {

                    echo '    <a href="login.php" class="nav-item nav-link active ">Log In</a>
                    <a href="email.php" class="nav-item nav-link active ">Registration</a>';


                       }

                       else {

                        echo '  <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                        
                        <img  style=" border-radius: 50%;" src="';
                        $email=$_SESSION['email'];
                        
                        $sql = "SELECT photo FROM user WHERE email='$email'";
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $photo=$row['photo'];
                            }
                          } else {
                            echo "0 results";
                          }
                        
                        
                        if (!$photo){ echo "users/logo.png";} else{echo $photo;} echo '" width="20" alt="Account">

                        
                        </a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="password.php" class="dropdown-item">Password</a>
                            <a href="profile.php" class="dropdown-item">Profile</a>
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>';





                       }







                       ?>
                       
                      
                        
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Navbar End -->