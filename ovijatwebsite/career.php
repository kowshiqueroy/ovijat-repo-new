<?php include 'head.php'; ?>





<section class="volunteer-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h3 class="mb-4">Drop your CV today</h3>

                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <input type="text" name="name" id="volunteer-name" class="form-control" placeholder="Full Name" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="text" name="phone" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Phone" required>
                                    </div>



                                    <div class="col-lg-6 col-6">
                                        <input type="text" name="address" id="volunteer-name" class="form-control" placeholder="Address" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="email" name="email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="E-mail" required>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <input type="text" name="job" id="volunteer-name" class="form-control" placeholder="Job Sector" required>
                                    </div>

                                    <div class="col-lg-6 col-12">    
                                        <input type="text" name="position" id="volunteer-email"  class="form-control" placeholder="Position" required>
                                    </div>

                                   

               
                                </div>

                                <textarea name="message" rows="3" class="form-control" id="volunteer-message" placeholder="Letter Message"></textarea>

                                <button type="csubmit" class="form-control">Submit</button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                      <p>  <iframe width="600" height="600" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQTzIXPnOhDpz2p1iC2EcnlDKFT2oM456tx5bT0SX1UVRawykSSnv4pt9rWp2a8ljqyNnjFcuMHOnNw/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
                    
                    
                    
                      </p></div>

                    </div>
                </div>
            </section>

            <?php


if (isset($_POST['csubmit']) && ! empty($_POST['name']) && ! empty($_POST['email']) && ! empty($_POST['phone']) && ! empty($_POST['address']) && ! empty($_POST['subject']) && ! empty($_POST['job']) && ! empty($_POST['position']) && ! empty($_POST['message'])&& ! empty($_POST['phone'])){

$to="it.ovijat@gmail.com";
$subject ="Career Request : ".$_POST['subject'];
$msg =$_POST['name'] . " ".$_POST['email'] ." " .$_POST['phone']. " " . $_POST['address'] . " " . $_POST['job']. " " . $_POST['position']. " " . $_POST['message'];

$headers="\r\n" .
'Reply-To:'.$_POST['email'];

mail($to, $subject, $msg, $headers);


}



?>

<?php include 'foot.php'; ?>