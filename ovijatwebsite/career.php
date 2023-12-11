
<?php include 'head.php'; ?>

<style>


.column {
    width: 100%;
    margin-top:-80px;
  }

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  margin-top:-50px;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }

 
}
</style>


<?php
             

            $d=date('Y.m.d');

           // echo''.$d.'';



             $select = $pdo->prepare("select * from item where pagename= 'job' and itemname > '$d' ");

             $select->execute();
          


             while ($row = $select->fetch(PDO::FETCH_OBJ)) {


                 echo '
                 
                 
                 
                 
                 
<section class="section-padding section-bg" id="section_2">
<div class="container">
 <div class="row">

    

     <div class="col-lg-10 col-12">
         <div class="custom-text-box">
             <h2 class="mb-2"> Deadline: '. $row->itemname.'</h2>
             
          

             <p class="mb-0">'. $row->details.'    </div>

             
  
           
         
     </div>
     <div class="col-lg-2 col-12 mb-5 mb-lg-0"><a href="data/admin/uploads/'.$row->photo.'">
     <img style="max-width:100px;" src="data/admin/uploads/'.$row->photo.'" class="custom-text-box-image img-fluid" alt="">
     </a>
 </div>

 </div>
</div>
</section>
                 
                 
                 ';
             }

?>


<section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mb-5 mb-lg-0">
                           
</div>
                           
                        </div>


                        <div class="col-lg-8 col-12 mx-auto" id="form" style="padding-top:50px;">
                            <form class="custom-form contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
                                <h2>Career form</h2>

                                <p class="mb-4">Or, you can just send an email:
                                    <a href="mailto:info@ovijatfood.com">career.ovijat@gmail.com</a>
                                </p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                </div>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="name@mail.com" required>
                                <input type="text" name="subject" id="subject"  class="form-control" placeholder="Subject" required>

                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="Your information, Desired Position, Sector, Experience etc"></textarea>

                                <button type="submit" name="submit" class="form-control">Send Covel Letter</button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

                           
<?php


if (isset($_POST['submit']) && ! empty($_POST['name']) && ! empty($_POST['email']) && ! empty($_POST['subject'])&& ! empty($_POST['message'])&& ! empty($_POST['phone'])){

$to="career.ovijat@gmail.com";
$subject ="Career Contact Request : ".$_POST['subject'];
$msg =$_POST['name'] . " ".$_POST['email'] ." " .$_POST['phone'] . " " . $_POST['message'];


$head="From: Ovijat Group< it@ovijatfood.com>\r\nReply-To: ".$_POST['email'];
$sub=$subject;

if(
mail($to,$sub,$msg,$head))
{

    echo '<script>alert("Successful Submission")</script>';

    $head="From: Ovijat Group< it@ovijatfood.com>\r\nReply-To: ".$to;
    mail($_POST['email'],"Received Your ".$sub,"Submission: ".$msg,$head);
}
else{
    echo '<script>alert("Failed Submission")</script>';

}


}



?>

<?php include 'foot.php'; ?>


