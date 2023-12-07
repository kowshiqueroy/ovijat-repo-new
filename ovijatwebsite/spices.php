<?php include 'head.php'; ?>

<section style="margin-top:30px;">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Spices</h2>
            </div>

            <?php
             

             $select = $pdo->prepare("select * from item order by id desc");

             $select->execute();

             while ($row = $select->fetch(PDO::FETCH_OBJ)) {


                    if($row->pagename=='spices'){

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

               
             }
             
            
            ?>

        </div>
    </div>
</section>

<?php include 'foot.php'; ?>