<?php
//include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
include_once("../config.php");


    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


if (!isset($_SESSION["role"])) {
    header('location: ../index.php');

}

if ($_SESSION["role"] !== basename(dirname(__FILE__))) {
    header('location: ../' . $_SESSION["role"]);

}





$select = $pdo->prepare("select * from company");

$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);
$company_id_db = $row["id"];
$company_name_db = $row["name"];
$company_phone_db = $row["phone"];
$company_mail_db = $row["mail"];
$company_details_db = $row["details"];


?>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<style>
    #sidebar-nav {
        width: 260px;
    }





    

.loaderImage {
  width: 150px;
  margin-top: -130px;
}

#loaderp {
  font-size: 30px;

}
#loaderp2 {
  font-size: 20px;

}

.notLoaded {
  height: 100vh;
  overflow: hidden;
  position: fixed;
  margin: 0px;
}

#loader {
  position: absolute;
  background: white;
  width: 100%;
  height: 100vh;
  top: 0px;
  left: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>



<style>
     /* Add padding to containers */
     .containerform {
         padding: 5px;
         background-color: white;
     }


     label {

         margin-top: 15px;
         margin-bottom: 5px;
     }



     .select2,
     .select2-search__field,
     .select2-results__option {
         font-size: 1em !important;
     }

     .select2-selection__rendered {
         line-height: 2em !important;
     }

     .select2-container .select2-selection--single {
         height: 2.5em !important;

     }


     .select2-selection__arrow {
         height: 2em !important;
     }



     /* Full-width input fields */
     input[type=text],
     input[type=float],
     input[type=password],
     select {
         width: 100%;
         font-size: 1em;
         height: 2.5em;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 4px;

         padding-left: 5px;
     }



     /* Overwrite default styles of hr */
     hr {
         border: 1px solid #f1f1f1;
         margin-bottom: 25px;
     }

     /* Set a style for the submit button */
     .savebtn {
         background-color: green;
         color: white;
         padding: 16px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 100%;
         opacity: 1;
     }


     .savebtn:hover {
         opacity: 0.8;
     }

     .addsavebtn {
         background-color: #04AA6D;
         color: white;
         padding: 16px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 100%;
         opacity: 0.1;
     }
     

     .addsavebtn:hover {
         opacity: 1;
     }
 </style>


<div class="container-fluid notLoaded">
    <div class="row flex-nowrap">
        <div class="col-auto px-0">
            <div id="sidebar" class="collapse collapse-horizontal border-end">

                <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">

                    <a style="color:green;" href="index.php" class="list-group-item  d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>
                            <?php echo $_SESSION["company"]." App"; ?>
                        </span> </a>
                    <a style="color:green;" href="index.php"  class="list-group-item  d-inline-block text-truncate" data-bs-parent="#sidebar"> <span>
                            <?php echo $_SESSION["usermail"]; ?>
                        </span> </a>
                    <a style="color:green;" href="index.php"  class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"> <span>
                            <?php echo $_SESSION["role"]; ?>
                        </span> </a>

                    <a href="stockbyitem.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-calendar2"></i> <span>Stock by Item</span> </a>
                        <a href="stockbydate.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-calendar2-month"></i> <span>Stock by Date</span> </a>
                        <a href="stockbyquantity.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-calendar2-date"></i> <span>Stock by Quantity</span> </a>
                        <a href="stockscompare.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-calendar-week"></i> <span>Stocks Compare</span> </a>
                    <a href="entry.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-arrow-down-up"></i> <span>Entry</span> </a>
                        <a href="mrr.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-arrow-down"></i> <span>MRR</span> </a>
                        <a href="drl.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-arrow-up"></i> <span>DRL</span> </a>
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
                        <a href="ippermit.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-router"></i> <span>IP Permit</span> </a>
                        <a href="logdata.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-text-wrap"></i> <span>Log Data</span> </a>
                    <a href="profile.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-person-gear"></i> <span>Profile</span> </a>
                    <a href="logout.php" class="list-group-item border-end-0 d-inline-block text-truncate"
                        data-bs-parent="#sidebar"><i class="bi bi-box-arrow-right"></i> <span>Logout</span> </a>

                </div>
            </div>
        </div>
        <main class="col ps-md-2 pt-2 ">
            <div style="color:White; background-color:green; padding-top:10px; padding-bottom:2px;" href="#" data-bs-target="#sidebar" data-bs-toggle="collapse"
              >
               <center><p style="color:White; background-color:green; text-decoration:none;" href=""> <h3><?php echo $company_name_db; ?> </h3></p>
                <p><?php echo $company_phone_db." ".$company_mail_db."<br>".$company_details_db; ?></p></center>
</div>
            
