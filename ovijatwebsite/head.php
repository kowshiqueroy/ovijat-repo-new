<?php

include_once("data/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ovijat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="section_1">

    <header style="max-height:70px;" class="site-header">
       
            <div  class="row">

                <div  class="col-lg-9 col-12 ms-auto d-lg-block">
                    <p style=" font-size:20px;" class="d-flex me-4 mb-0">
                        <!--     <i class="bi-geo-alt me-2"></i> -->

                        <?php

                        $d = date("m.d") . "";
                        $m=date("m") . "";
                        $t = "";
 
                        





                        echo '
                
                
                
                
                        <marquee behavior="scroll"  direction="left">';

                        $select = $pdo->prepare("select * from item where itemname like '$d%' or itemname like '$m%' or itemname like '%active%' and pagename= 'top wish'");

                        $select->execute();

                        $fl=0;
                       

                        while ( $row = $select->fetch(PDO::FETCH_OBJ)) {

                            $fl++;
                            echo '
                
                
                
                
                           
                            '. $row->details.' <img id="mimg" style="margin-right:50px; max-height:40px;" src="data/admin/uploads/'.$row->photo.'"  alt="Kind Heart Charity">
                         
                
                
                ';
                        }


                        if ($fl== 0) {

                            echo '
                
                
                
                
                           
                           Naturaly Healthy <img id="mimg" src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                        
                
                
                ';

                        }
                        echo '
                     </marquee>
            
            
            ';
                      


                   

                        





                        ?>

                    </p>

                    <!--  
                            <a style="color" href="mailto:info@ovijatfood.com">
                                info@ovijatfood.com
                            </a> -->

                </div>

                <div  class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul  class="social-icon">
                        <li  class="social-icon-item">
                            <a href="https://www.facebook.com/ovijatfood/" class="social-icon-link bi-facebook"
                                target="blank"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="mailto:info@ovijatfood.com" class="social-icon-link bi-envelope"
                                target="blank"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="tel:+8801733390331" class="social-icon-link bi-phone" target="blank"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="https://www.linkedin.com/in/ovijat-food-and-beverage-industries-ltd-05b5a9164/"
                                class="social-icon-link bi-linkedin" target="blank"></a>
                        </li>

                    </ul>
                </div>

            </div>
        
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    OVIJAT
                    <small>Food & Beverage Industries Ltd.</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link " href=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.php"></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">About Us</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="chairman.php">Chaiman's Message</a></li>

                            <li><a class="dropdown-item" href="mission.php">Our Mission</a></li>
                            <li><a class="dropdown-item" href="vission.php">Our Vission</a></li>
                            <li><a class="dropdown-item" href="company.php">Comapny at a glance</a></li>
                            <li><a class="dropdown-item" href="qa.php">Quality Assurance</a></li>
                            <li><a class="dropdown-item" href="sisterconcern.php">Sister Concerns</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Products</a>

                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="snacks.php">Snacks</a></li>
                            <li><a class="dropdown-item" href="drinks.php">Drinks</a></li>
                            <li><a class="dropdown-item" href="eoil.php">Edible Oil</a></li>
                            <li><a class="dropdown-item" href="rices.php">Rices</a></li>

                            <li><a class="dropdown-item" href="bakery.php">Bakery</a></li>
                            <li><a class="dropdown-item" href="spices.php">Spices</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="rice.php">Rice</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="trading.php">Trading</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>

                    <li class="nav-item">

                        <a id="pbm" class="nav-link " onclick="brochure()">Product Brochure</a>

                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="career.php">Career</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="mybutton">
        <button onclick="brochure()" id="brochure" class="feedback">Product Brochure</button>
    </div>

    <script>
        function brochure() {
            document.getElementById("brochure").innerHTML = "Downloaded";
            window.open("brochure/ovijatproducts.pdf")
            var file_path = 'brochure/ovijatproducts.pdf';
            var a = document.createElement('A');
            a.href = file_path;
            a.download = file_path.substr(file_path.lastIndexOf('/') + 1);
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }
    </script>

    <style>
        .feedback {

            background-color: green;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            border-color: red;
            transform: rotateZ(90deg);



        }

        #mybutton {
            position: fixed;
            top: 300px;
            bottom: 300px;
            right: -80px;
            z-index: 100;
            opacity: 0.5;

        }

        #mybutton:hover {

            opacity: 1;

        }


        @media screen and (max-width: 450px) {


            #mybutton {
                padding: 1px 2px;
                font-size: 8px;
                right: -30px;
                bottom: 0 px;
                display: none;



            }

            #pbm {

                display: block;

            }

            marquee {


                height: 20px;
                font-size: 10px;


            }

            #mimg {



                height: 20px;
            }



        }



        @media screen and (min-width: 451px) {


            #pbm {

                display: none;

            }




        }
    </style>

    <main>