<!DOCTYPE html>
<html>

<?php
$websiteName = "Khoriddar";

?>

<head>
    <title>
        <?php echo $websiteName; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        font-family: "Georgia", Times, serif;
    }

    .bar b {

        font-size: 15px;


    }
</style>

<body>
    

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-green w3-wide w3-padding w3-card">
            <a href="#home" class="w3-bar-item w3-button">
                <i class="fa fa-bars"></i>
                <b>
                    <?php echo $websiteName; ?>
                </b></a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right  bar">
                <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-comment"></i><b>0</b></a>
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
             




            </div>


        </div>



    </div>
    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq2fQMw5iJ8xdkyRP8Wc8MTRqxaqoVNY_LJOokiGJMyg&s"
            alt="Architecture" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span
                    class="w3-hide-small w3-text-light-grey">Architects</span></h1>
        </div>
    </header>

    <!-- Page content -->



    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Project Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
                    <img src="/w3images/house5.jpg" alt="House" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
                    <img src="/w3images/house2.jpg" alt="House" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
                    <img src="/w3images/house3.jpg" alt="House" style="width:100%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
                    <img src="/w3images/house4.jpg" alt="House" style="width:100%">
                </div>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
                    <img src="/w3images/house2.jpg" alt="House" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
                    <img src="/w3images/house5.jpg" alt="House" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
                    <img src="/w3images/house4.jpg" alt="House" style="width:99%">
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
                    <img src="/w3images/house3.jpg" alt="House" style="width:99%">
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="w3-container w3-padding-32" id="about">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div class="w3-row-padding w3-grayscale">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team2.jpg" alt="John" style="width:100%">
                <h3>John Doe</h3>
                <p class="w3-opacity">CEO & Founder</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                <h3>Jane Doe</h3>
                <p class="w3-opacity">Architect</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
                <h3>Mike Ross</h3>
                <p class="w3-opacity">Architect</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
                <h3>Dan Star</h3>
                <p class="w3-opacity">Architect</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="w3-container w3-padding-32" id="contact">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
            <p>Lets get in touch and talk about your next project.</p>
            <form action="/action_page.php" target="_blank">
                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
                <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
                <button class="w3-button w3-black w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>

        <!-- Image of location/map -->
        <div class="w3-container">
            <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
        </div>

        <!-- End page content -->
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                class="w3-hover-text-green">Kowshique</a></p>
    </footer>

</body>

</html>