<?php

include 'head.php';
?>


<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">


       <!-- Search Start -->
       <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                        <div class="col-md-2">

                        <form action="item.php"> 
                        <button type="submit" class="btn btn-dark border-0 w-100 py-3">Refresh</button>
</form>
                    </div>
                            <div class="col-md-4">

                            <form method="get" action="item.php">
                                <input name="n" type="text" class="form-control border-0 py-3"
                                 value="<?php if (isset($_REQUEST['n'])){ echo $_REQUEST['n']; } else { echo 'All';}?>" required>
                            </div>
                            <div class="col-md-3">
                                <select name="t" class="form-select border-0 py-3" required>
                                <?php if (isset($_REQUEST['t'])){ echo  '<option selected >'.$_REQUEST["t"].'</option>'; }?>
  
                                    <option >Property Type 1</option>
                                    <option >Property Type 2</option>
                                    <option >Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="l" class="form-select border-0 py-3" required>
                                <?php if (isset($_REQUEST['l'])){ echo  '<option selected >'.$_REQUEST["l"].'</option>'; }?>
                                    <option >Location 1</option>
                                    <option >Location 2</option>
                                    <option >Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="s" class="btn btn-dark border-0 w-100 py-3">Search</button>
</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">All List</h1>
                    <p>Find Your Best Choice</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">For Sell</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Rent</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">

                    <?php
                        $sql = "SELECT * FROM item WHERE (type='Sell' AND del='0' AND user!='$email') ORDER BY id DESC";
                       
                       if (isset($_REQUEST['s'])){
                        $n=$_REQUEST['n'];
                        $l=$_REQUEST['l'];
                        $t=$_REQUEST['t'];

                        $sql = "SELECT * FROM item WHERE (type='Sell' AND del='0' AND user!='$email' 
                        AND (name LIKE '$n' OR category LIKE '$t' OR detail LIKE '$l')) 
                        ORDER BY id DESC";


                       }
                       
                       
                       
                       
                       
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];

                                $user = $row['user'];

                                $ts = $row['ts'];

                                $name = $row['name'];

                                $type = $row['type'];

                                $category = $row['category'];

                                $detail = $row['detail'];

                                $stock = $row['stock'];

                                $recuring = $row['recuring'];

                                $period = $row['period'];

                                $regularprice = $row['regularprice'];

                                $saleprice = $row['saleprice'];

                                $photo = $row['photo'];

                                if ($recuring==0){ $r= "One Time";}
                                else { $r= "Recuring";}






                                echo '
                                
                                
                                
                                
                                
                                
                                <div class="col-lg-4 col-md-6">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img height="50" class="img-fluid" src="'.$photo.'" alt=""></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">'.$category.'</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">For '.$type.' by '.$user.'</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3"><s style="color:grey; font-size:10px;">'.$regularprice.'</s> '.$saleprice.' BDT</h5>
                                        <a class="d-block h5 mb-2" href="">'.$name.'</a>
                                        <p><i class="fa fa-sticky-note text-primary me-2"></i>'.$detail.'</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-boxes text-primary me-2"></i>'.$stock.'</small>
                                        <small class="flex-fill text-center border-end py-2">'.$r.'</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-calendar text-primary me-2"></i>'.$period.'</small>
                                    </div>
                                    <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comments text-primary me-2"></i> <a class="d-block h6 mb-2" href="chat.php?to='.$user.'">Chat</a></small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-handshake text-primary me-2"></i> <a class="d-block h6 mb-2" href="request.php?id='.$id.'"> Request a Deal</a></small>
                                </div>
                                </div>
                            </div>
                                
                                ';
                            }
                        }
                        ?>

                </div>
            </div>

            <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-4">

<?php
    $sql = "SELECT * FROM item WHERE (type='Rent' AND del='0' AND user!='$email') ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];

            $user = $row['user'];

            $ts = $row['ts'];

            $name = $row['name'];

            $type = $row['type'];

            $category = $row['category'];

            $detail = $row['detail'];

            $stock = $row['stock'];

            $recuring = $row['recuring'];

            $period = $row['period'];

            $regularprice = $row['regularprice'];

            $saleprice = $row['saleprice'];

            $photo = $row['photo'];

            if ($recuring==0){ $r= "One Time";}
            else { $r= "Recuring";}






            echo '
            
            
            
            
            
            
            <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
                <div class="position-relative overflow-hidden">
                    <a href=""><img height="50" class="img-fluid" src="'.$photo.'" alt=""></a>
                    <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">'.$category.'</div>
                    <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">For '.$type.' by '.$user.'</div>
                </div>
                <div class="p-4 pb-0">
                    <h5 class="text-primary mb-3"><s style="color:grey; font-size:10px;">'.$regularprice.'</s> '.$saleprice.' BDT</h5>
                    <a class="d-block h5 mb-2" href="">'.$name.'</a>
                    <p><i class="fa fa-sticky-note text-primary me-2"></i>'.$detail.'</p>
                </div>
                <div class="d-flex border-top">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-boxes text-primary me-2"></i>'.$stock.'</small>
                    <small class="flex-fill text-center border-end py-2">'.$r.'</small>
                    <small class="flex-fill text-center py-2"><i class="fa fa-calendar text-primary me-2"></i>'.$period.'</small>
                </div>
                <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-comments text-primary me-2"></i> <a class="d-block h6 mb-2" href="chat.php?to='.$user.'">Chat</a></small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-handshake text-primary me-2"></i> <a class="d-block h6 mb-2" href="deal.php?id='.$id.'">Deal</a></small>
            </div>
            </div>
        </div>
            
            ';
        }
    }
    ?>

</div>
            </div>

        </div>
    </div>
</div>
<!-- Property List End -->

<?php
include  "foot.php";
?>