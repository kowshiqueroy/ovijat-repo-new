
<?php include 'head.php'; ?>


<section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                           
                            <div >
                      <p>  <iframe width="650" height="600" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQTzIXPnOhDpz2p1iC2EcnlDKFT2oM456tx5bT0SX1UVRawykSSnv4pt9rWp2a8ljqyNnjFcuMHOnNw/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
                    
                    
                    
                      </p></div>
                           
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
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

$to="it.ovijat@gmail.com";
$subject ="Career Contact Request : ".$_POST['subject'];
$msg =$_POST['name'] . " ".$_POST['email'] ." " .$_POST['phone'] . " " . $_POST['message'];



if (mail($to, $subject, $msg))
{

    echo '<script>alert("Successful Submission")</script>';
}
else{
    echo '<script>alert("Failed Submission")</script>';

}


}



?>

<?php include 'foot.php'; ?>


