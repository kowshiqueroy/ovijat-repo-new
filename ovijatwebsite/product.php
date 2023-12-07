<?php include 'head.php'; ?>


<?php
             

             if(isset($_GET['id'])) {

                $id = $_GET['id'];




                $select = $pdo->prepare("select * from item where id= '$id'");

                $select->execute();
                $row = $select->fetch(PDO::FETCH_ASSOC);}

?>


<section class="section-padding section-bg" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="<?php echo 'data/admin/uploads/'.$row["photo"]; ?>" class="custom-text-box-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2"><?php echo $row["itemname"]; ?></h2>
                                
                                <h5 class="mb-3"><?php echo $row["pagename"]; ?></h5>

                                <p class="mb-0"><?php echo $row["details"]; ?>     </div>
                     
                              
                            
                        </div>

                    </div>
                </div>
            </section>




            <?php include 'foot.php'; ?>