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

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Sadharan Bima Bhavan 2, Motijheel, Dhaka, Bangladesh
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@ovijatfood.com">
                                info@ovijatfood.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-envelope"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-phone"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        Ovijat
                        <small>Food & Beverage Industries Ltd.</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="">
                            <a class="nav-link click-scroll" href=""></a>
                        </li>
                    <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php">Home</a>
                        </li>
                    
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>

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
                            <a class="nav-link click-scroll dropdown-toggle" href="" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>

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
                            <a class="nav-link click-scroll" href="rice.php">Rice</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="trading.php">Trading</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="contact.php">Contact</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="career.php">Career</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div id="mybutton">
<button onclick="brochure()" id = "brochure" class="feedback">Product Brochure</button>
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
    
  background-color :    green;
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
  right: -60px;
  z-index: 100;
  opacity: 0.2;
 
}

#mybutton:hover {
 
  opacity: 1;
 
}



</style>



        <main>

        