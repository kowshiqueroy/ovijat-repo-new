<?php include 'head.php'; ?>






<section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">Our aim is to supply you ethnic food, juice, apparels and household items form your motherland through the importers and distributors around your neighborhood. To establish and maintain our position as one of the largest and trust worthiest food company around the world and expand our global business together with our stakeholders.</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                       

                            <a href="" class="custom-btn btn smoothscroll">Ovijat Group' Mission</a>
                        </div>

                    </div>
                </div>
            </section>





            <?php
             

            



             $select = $pdo->prepare("select * from item where pagename= 'mission' ");

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