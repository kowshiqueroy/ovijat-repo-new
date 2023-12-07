<?php include 'head.php'; ?>






<?php
             

            



                $select = $pdo->prepare("select * from item where pagename= 'sister' ");

                $select->execute();
                $row = $select->fetch(PDO::FETCH_ASSOC);


                if ($row){


                    echo '
                    
                    
                    
                    
                    
<section class="section-padding section-bg" id="section_2">
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
            <img src="data/admin/uploads/'.$row["photo"].'" class="custom-text-box-image img-fluid" alt="">
        </div>

        <div class="col-lg-6 col-12">
            <div class="custom-text-box">
                <h2 class="mb-2">'. $row["itemname"].'</h2>
                
             

                <p class="mb-0">'. $row["details"].'    </div>
     
              
            
        </div>

    </div>
</div>
</section>
                    
                    
                    ';
                }

?>




<?php include 'foot.php'; ?>