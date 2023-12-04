<?php
include_once("..\config.php");

if (!isset($_SESSION["role"])) {
    header('location:..\\index.php');

}

if ($_SESSION["role"] !== basename(dirname(__FILE__))) {
    header('location:..\\' . $_SESSION["role"]);

}





?>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<style>
    #sidebar-nav {
        width: 260px;
    }
</style>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal border-end">

                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">

                    <a style="color:green;" href="#" class="list-group-item  d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>
                            <?php echo $_SESSION["company"]." App"; ?>
                        </span> </a>
                    <a style="color:green;" href="#"  class="list-group-item  d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>
                            <?php echo $_SESSION["usermail"]; ?>
                        </span> </a>
                    <a style="color:green;" href="#"  class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"> <span>
                            <?php echo $_SESSION["role"]; ?>
                        </span> </a>

                    <a href="stocks.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-list-ol"></i> <span>Stocks</span> </a>
                    <a href="entry.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-arrow-down-up"></i> <span>Entry</span> </a>
                        <a href="department.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-bounding-box"></i> <span>Department/Person</span> </a>
                    <a href="category.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-tags"></i> <span>Category</span> </a>
                    <a href="item.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-boxes"></i> <span>Item</span> </a>

                    <a href="companyinfo.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-buildings"></i> <span>Company Info</span> </a>
                    <a href="users.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-people"></i> <span>Users</span> </a>
                    <a href="profile.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-person-gear"></i> <span>Profile</span> </a>
                    <a href="logout.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-box-arrow-right"></i> <span>Logout</span> </a>

                </div>
            </div>
        </div>
        <main class="col ps-md-2 pt-2 ">
            <a style="color:White; background-color:green;" href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
                class="border rounded-3 p-1 text-decoration-none d-flex justify-content-center">
                <h2>Company Name</h2>
            </a>