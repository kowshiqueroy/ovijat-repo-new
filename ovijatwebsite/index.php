<?php include 'head.php'; ?>

<?php
             

            



             $select = $pdo->prepare("select * from item where pagename= 'banner'");

             $select->execute();
             $row = $select->fetch(PDO::FETCH_ASSOC);

?>  
            <img src="<?php echo "data/admin/uploads/".$row["photo"];?>" style="  height: auto; width: 100%;"class="" alt="">



            <style>
.buttonup {
  background-color: #4CAF50;
  border: none;
  color: white;

  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 26px;
  margin: 4px 2px;
  cursor: pointer;

 width: 100%;
padding: 10px;
}
.buttonup:hover {
  
  font-size: 36px;
  background-color: red;
}

@media screen and (max-width: 992px) {

  .buttonup {
    font-size: 16px;
  }

  .buttonup:hover {
  
  font-size: 26px;
  background-color: red;
}
}

</style>

            <section style=" padding-top:15px; padding-bottom:15px; ">
    <div class="fa-3x" id="buttonupid" style=" display: flex; ">
              <button class="buttonup"> <i class="fa fa-tag" aria-hidden="true"> </i><br>Private Labeling</button>  
              <button class="buttonup">   <i class="fa fa-ship" aria-hidden="true"></i></i><br>WorldWide Shipping</button>  
              <button class="buttonup">   <i class="fa fa-handshake-o" aria-hidden="true"></i></i><br>24/7 Support</button>  





             

          </div>
          

           

           
  </section>
          


  



                    
<section style="margin-top:30px;">
                <div class="container">
                <div class="row">

<div class="col-lg-10 col-12 text-center mx-auto">
    <h2 class="mb-5">New Products</h2>
</div>

<?php
 

 $select = $pdo->prepare("select * from item where
  pagename='snacks'
 or pagename='drinks'
 or pagename='edible oil'
 or pagename='rices'
 or pagename='bekary'
 or pagename='spices'
  order by id desc");

 $select->execute();
$flag=1;
 while ($row = $select->fetch(PDO::FETCH_OBJ)) {


        if($flag<=8){

      

            if($flag==5){

echo '


    <h2 class="mb-5 text-center">Top Products</h2>




';

            }

            echo '
     
     
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
            <div class="featured-block d-flex justify-content-center align-items-center">
                <a href="product.php?id='.$row->id.'" class="d-block">
                    <img src="data/admin/uploads/'.$row->photo.'" class="featured-block-image img-fluid" alt="">

                    <p class="featured-block-text"><strong>'.$row->itemname.'</strong><br></p>
                </a>
            </div>
        </div>
            
            
            ';
        }
        $flag++;
   
 }
 

?>

</div>
                </div>
            </section>




           


            

          


            


            


            <section class="testimonial-section section-padding section-bg">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="mb-lg-3">Happy to serve all over the word</h2>
                            
                                <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           <div class="carousel-caption">
                                                <h4 class="carousel-title">Now in USA</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">USA</small>
                                           </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Now in UK</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">UK</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">Now in UAE</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">UAE</small>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="carousel-caption">
                                                <h4 class="carousel-title">India</h4>

                                                <small class="carousel-name"><span class="carousel-name-title">India</small>
                                           </div>
                                        </div>

                                          <ol class="carousel-indicators">
                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                                    <img src="images/usa.jpg" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                                    <img src="images/uk.png" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                                    <img src="images/uae.png" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>

                                               <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                                    <img src="images/india.png" class="img-fluid rounded-circle avatar-image" alt="avatar">
                                               </li>
                                          </ol>

                                 </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

    <section class="section-padding">
      <div class="container">
          <div class="row">

              <div class="col-lg-10 col-12 text-center mx-auto">
                  <h2 class="mb-5">Ovijat Group</h2>
              </div>

              <div id="sc" style=" margin: auto;
                             width: 90%;
                             text-align: center;
                             border: 3px solid #73AD21;
                            padding: 10px;">
                  <img src="" style="max-width:150px" alt="">

                  <img src="" style="max-width:150px" alt="">
                  <img class="col-lg-2 col-12 text-center mx-auto" src="images/1.png" style="max-width:150px" alt="">
                  <img class="col-lg-2 col-12 text-center mx-auto" src="images/2.png" style="max-width:150px" alt="">
                  <img class="col-lg-2 col-12 text-center mx-auto" src="images/3.png" style="max-width:150px" alt="">
                  <img class="col-lg-2 col-12 text-center mx-auto" src="images/4.png" style="max-width:150px" alt="">
                  <img class="col-lg-2 col-12 text-center mx-auto" src="images/5.png" style="max-width:150px" alt="">

                  <img class="col-lg-2 col-12 text-center mx-auto" src="images/6.png" style="max-width:150px" alt="">

              </div>

          </div>
      </div>
  </section>

    







<?php include 'foot.php'; ?>