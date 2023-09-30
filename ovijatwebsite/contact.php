<?php include 'head.php'; ?>


<section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                            <div class="contact-info-wrap">
                                <h2>USA Office</h2>

                                <div class="contact-image-wrap d-flex flex-wrap">

                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0">


Delight Distribution Inc. 5605 Maspeth, New York
Mobile: (+88) 0173 339 0301
 (+1) 917 388 5447
Email: director@ovijatfood.com</p>
                                        
                                    </div>
                                </div>

                                <div class="contact-info">

                                <h2>Dhaka Office</h2>
                                <div class="d-flex flex-column justify-content-center ms-3">
                                        <p class="mb-0">

                                        
Shadharan Bima Bhaban 2, 139, Motijheel C/A, Dhaka - 1000, Bangladesh.
Phone: (+88) 02 951 3985
 (+88) 0173 339 0331
Email: info@ovijatfood.com</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
                                <h2>Contact form</h2>

                                <p class="mb-4">Or, you can just send an email:
                                    <a href="mailto:info@ovijatfood.com">info@ovijatfood.com</a>
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

                                <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>

                                <button type="submit" name="submit" class="form-control">Send Message</button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

                           
<?php


if (isset($_POST['submit']) && ! empty($_POST['name']) && ! empty($_POST['email']) && ! empty($_POST['subject'])&& ! empty($_POST['message'])&& ! empty($_POST['phone'])){

$to="it.ovijat@gmail.com";
$subject ="Contact Request : ".$_POST['subject'];
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