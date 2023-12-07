<?php include 'head.php'; ?>


<section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row  align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">




                            Customer’s preference is always our first priority that why we are also in an international trading of different well-known company’s products & services. Our retail partners can ordered to deliver any product of different companies. We do also care about quality of their products and services when we are exporting their products and services.
                            </h2>
                        </div>

                        <div class="col-lg-1 col-12">
                       

                            <a href="" class="custom-btn btn smoothscroll">USA</a>
                        </div>
                        <div class="col-lg-1 col-12">
                       

                       <a href="" class="custom-btn btn smoothscroll">UAE</a>
                   </div>


                   <div class="col-lg-1 col-12">
                       

                       <a href="" class="custom-btn btn smoothscroll">Others</a>
                   </div>

                    </div>
                </div>
            </section>




            <?php
             

            



             $select = $pdo->prepare("select * from item where pagename= 'trading' ");

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